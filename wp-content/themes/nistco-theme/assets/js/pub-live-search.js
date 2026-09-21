/**
 * File: assets/js/pub-live-search.js
 * Instant AJAX search with debounced typing, request canceling & keyboard navigation
 */
(function ($) {
  "use strict";

  let searchTimer = null;
  let activeAjaxRequest = null;
  let selectedIndex = -1;

  const $input = $("#pub-live-search-input");
  const $spinner = $("#pub-search-spinner");
  const $dropdown = $("#pub-live-dropdown");
  const $resultsList = $("#pub-live-results-list");
  const $footer = $("#pub-live-footer");

  if (!$input.length) return;

  // 1. Debounced Input Handler with Query Cancellation
  $input.on("input", function () {
    const query = $(this).val().trim();
    clearTimeout(searchTimer);

    // Abort any ongoing AJAX network request
    if (activeAjaxRequest && activeAjaxRequest.readyState !== 4) {
      activeAjaxRequest.abort();
    }

    if (query.length < 2) {
      $dropdown.hide();
      $resultsList.empty();
      $spinner.hide();
      selectedIndex = -1;
      return;
    }

    $spinner.show();

    searchTimer = setTimeout(function () {
      performSearch(query);
    }, 280); // 280ms debounce window
  });

  // 2. Perform AJAX Fetch Request
  function performSearch(term) {
    activeAjaxRequest = $.ajax({
      url: shestco_search_vars.ajax_url,
      type: "POST",
      dataType: "json",
      data: {
        action: "shestco_search_publications",
        security: shestco_search_vars.nonce,
        term: term,
      },
      success: function (response) {
        $spinner.hide();
        selectedIndex = -1;

        if (response.success && response.data.results.length > 0) {
          renderResults(response.data.results, term, response.data.total);
        } else {
          renderEmptyState(term);
        }
      },
      error: function (xhr, status) {
        if (status !== "abort") {
          $spinner.hide();
          $dropdown.hide();
        }
      },
    });
  }

  // 3. Render Results in Dropdown
  function renderResults(results, query, totalCount) {
    $resultsList.empty();

    results.forEach(function (item, index) {
      const regex = new RegExp("(" + escapeRegExp(query) + ")", "gi");
      const highlightedTitle = item.title.replace(regex, "<mark>$1</mark>");

      const centreBadge = item.centre
        ? `<span class="pub-badge-centre">🏛️ ${escapeHtml(item.centre)}</span>`
        : "";
      const doiBadge = item.doi
        ? `<span class="pub-badge-doi">DOI: ${escapeHtml(item.doi)}</span>`
        : "";

      const row = `
        <a href="${escapeHtml(item.permalink)}" class="pub-live-item" data-index="${index}">
          <div class="pub-live-item-meta">
            <span class="pub-badge-year">${escapeHtml(item.year)}</span>
            ${centreBadge}
            ${doiBadge}
          </div>
          <div class="pub-live-item-title">${highlightedTitle}</div>
          <div class="pub-live-item-authors">✍️ ${escapeHtml(item.authors)}</div>
        </a>
      `;
      $resultsList.append(row);
    });

    // View All Footer
    if (totalCount > results.length) {
      $footer
        .html(
          `
          <button type="button" class="pub-live-view-all btn-submit-parent-form">
            View all ${totalCount} matching publications &rarr;
          </button>
        `,
        )
        .show();
    } else {
      $footer.hide();
    }

    $dropdown.show();
  }

  // 4. Render Empty Results State
  function renderEmptyState(query) {
    $resultsList.html(`
      <div class="pub-live-empty">
        <span>🔍</span>
        <p>No scientific publications matching <strong>"${escapeHtml(query)}"</strong></p>
      </div>
    `);
    $footer.hide();
    $dropdown.show();
  }

  // 5. Full Keyboard Navigation (Arrow Keys, Enter, Escape)
  $input.on("keydown", function (e) {
    const $items = $resultsList.find(".pub-live-item");

    if (!$dropdown.is(":visible") || !$items.length) {
      if (e.key === "Escape") {
        $dropdown.hide();
      }
      return;
    }

    // Down Arrow (↓)
    if (e.key === "ArrowDown") {
      e.preventDefault();
      selectedIndex = (selectedIndex + 1) % $items.length;
      updateActiveItem($items);
    }
    // Up Arrow (↑)
    else if (e.key === "ArrowUp") {
      e.preventDefault();
      selectedIndex = (selectedIndex - 1 + $items.length) % $items.length;
      updateActiveItem($items);
    }
    // Enter Key (↵)
    else if (e.key === "Enter") {
      if (selectedIndex >= 0 && selectedIndex < $items.length) {
        e.preventDefault();
        const targetUrl = $items.eq(selectedIndex).attr("href");
        if (targetUrl) {
          window.location.href = targetUrl;
        }
      }
    }
    // Escape Key (Esc)
    else if (e.key === "Escape") {
      $dropdown.hide();
      selectedIndex = -1;
    }
  });

  function updateActiveItem($items) {
    $items.removeClass("is-active");
    if (selectedIndex >= 0) {
      const $active = $items.eq(selectedIndex);
      $active.addClass("is-active");

      // Auto-scroll dropdown container to keep active item in view
      const containerTop = $dropdown.scrollTop();
      const containerHeight = $dropdown.height();
      const itemTop = $active.position().top + containerTop;
      const itemHeight = $active.outerHeight();

      if (itemTop < containerTop) {
        $dropdown.scrollTop(itemTop);
      } else if (itemTop + itemHeight > containerTop + containerHeight) {
        $dropdown.scrollTop(itemTop + itemHeight - containerHeight);
      }
    }
  }

  // 6. Form Submission Trigger for Footer Button
  $(document).on("click", ".btn-submit-parent-form", function (e) {
    e.preventDefault();
    $input.closest("form").submit();
  });

  // 7. Click-Outside & Refocus Dismissal
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".pub-search-wrapper").length) {
      $dropdown.hide();
    }
  });

  $input.on("focus", function () {
    if (
      $(this).val().trim().length >= 2 &&
      $resultsList.children().length > 0
    ) {
      $dropdown.show();
    }
  });

  // Helpers
  function escapeHtml(string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
      return {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#39;",
        "/": "&#x2F;",
      }[s];
    });
  }

  function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
  }
})(jQuery);
