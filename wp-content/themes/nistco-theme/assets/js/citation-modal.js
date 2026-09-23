/**
 * NISTCO Dynamic Citation Export Modal Handler
 * Supports BibTeX and RIS format exports with clipboard copy & file download
 */
jQuery(document).ready(function ($) {
  const $modal = $("#citation-export-modal");
  const $paperTitle = $("#cite-modal-paper-title");
  const $codeDisplay = $("#cite-code-display");
  const $tabBtns = $(".cite-tab-btn");
  const $copyBtn = $("#btn-copy-citation");
  const $downloadBtn = $("#btn-download-citation");
  const $closeBtn = $("#cite-modal-close-btn");
  const $toast = $("#cite-toast-msg");

  let currentBibtex = "";
  let currentRis = "";
  let currentTitle = "";
  let activeFormat = "bibtex";
  let currentPostId = null;

  if (!$modal.length) return;

  function fetchCitation(postId, format, callback) {
    $.ajax({
      url: "/wp-admin/admin-ajax.php",
      type: "GET",
      data: {
        action: "nistco_get_citation",
        post_id: postId,
        format: format,
      },
      success: function (response) {
        callback(response);
      },
      error: function () {
        callback("Error loading citation.");
      },
    });
  }

  function setFormat(format) {
    activeFormat = format;
    $tabBtns.removeClass("is-active");
    $(`.cite-tab-btn[data-format="${format}"]`).addClass("is-active");

    if (format === "bibtex") {
      $downloadBtn.text("📥 Download .bib");
      if (currentBibtex) {
        $codeDisplay.text(currentBibtex);
      } else if (currentPostId) {
        $codeDisplay.text("Loading BibTeX citation...");
        fetchCitation(currentPostId, "bibtex", function (res) {
          currentBibtex = res;
          if (activeFormat === "bibtex") $codeDisplay.text(res);
        });
      }
    } else {
      $downloadBtn.text("📥 Download .ris");
      if (currentRis) {
        $codeDisplay.text(currentRis);
      } else if (currentPostId) {
        $codeDisplay.text("Loading RIS citation...");
        fetchCitation(currentPostId, "ris", function (res) {
          currentRis = res;
          if (activeFormat === "ris") $codeDisplay.text(res);
        });
      }
    }
  }

  $(document).on("click", ".btn-cite-trigger, .btn-cite-export", function (e) {
    e.preventDefault();
    currentPostId = $(this).data("post-id") || $(this).data("id") || null;
    currentTitle =
      $(this).data("title") ||
      $(this).closest("article").find("h1, h2").first().text().trim() ||
      "Publication Citation";
    currentBibtex = $(this).data("bibtex") || "";
    currentRis = $(this).data("ris") || "";

    $paperTitle.text(currentTitle);
    setFormat("bibtex");

    $modal.css("display", "flex");
    setTimeout(function () {
      $modal.addClass("is-active");
    }, 10);
    $("body").css("overflow", "hidden");
  });

  $tabBtns.on("click", function () {
    setFormat($(this).data("format"));
  });

  function closeModal() {
    $modal.removeClass("is-active");
    setTimeout(function () {
      $modal.css("display", "none");
    }, 200);
    $("body").css("overflow", "");
  }

  $closeBtn.on("click", closeModal);
  $modal.on("click", function (e) {
    if ($(e.target).is($modal)) closeModal();
  });

  function showToast() {
    $toast.stop(true, true).fadeIn(200).delay(2000).fadeOut(300);
  }

  $copyBtn.on("click", function () {
    const textToCopy = $codeDisplay.text();
    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(textToCopy).then(showToast);
    } else {
      const $temp = $("<textarea>");
      $("body").append($temp);
      $temp.val(textToCopy).select();
      document.execCommand("copy");
      $temp.remove();
      showToast();
    }
  });

  $downloadBtn.on("click", function () {
    const textToDownload = $codeDisplay.text();
    const ext = activeFormat === "bibtex" ? "bib" : "ris";
    const filename =
      (currentTitle
        .replace(/[^a-z0-9]/gi, "_")
        .toLowerCase()
        .substring(0, 30) || "citation") +
      "." +
      ext;
    const blob = new Blob([textToDownload], {
      type: "text/plain;charset=utf-8",
    });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  });
});
