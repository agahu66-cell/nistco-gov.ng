/**
 * File: assets/js/pdf-modal.js
 * In-browser fullscreen PDF modal preview controller
 */
(function ($) {
  "use strict";

  const $modal = $("#pdf-viewer-modal");
  const $iframe = $("#pdf-modal-iframe");
  const $loader = $("#pdf-modal-loader");
  const $modalTitle = $("#pdf-modal-title");
  const $downloadBtn = $("#pdf-modal-download-btn");
  const $newTabBtn = $("#pdf-modal-newtab-btn");
  const $closeBtn = $("#pdf-modal-close-btn");

  if (!$modal.length) return;

  // 1. Open Modal Trigger
  $(document).on("click", ".btn-pdf-preview", function (e) {
    e.preventDefault();

    const pdfUrl = $(this).data("pdf-url");
    const pdfTitle = $(this).data("pdf-title") || "Scientific Document Preview";

    if (!pdfUrl) return;

    // Populate Headers and Links
    $modalTitle.text(pdfTitle);
    $downloadBtn.attr("href", pdfUrl);
    $newTabBtn.attr("href", pdfUrl);

    // Reset loader and set iframe target
    $loader.show().css("opacity", "1");

    // Append PDF viewer hash parameters for clean toolbar presentation
    $iframe.attr("src", pdfUrl + "#view=FitH&toolbar=1&navpanes=0");

    // Show Modal and Lock Page Scroll
    $modal.css("display", "flex");
    setTimeout(function () {
      $modal.addClass("is-active");
    }, 10);
    $("body").css("overflow", "hidden");

    // Hide spinner when iframe finishes rendering
    $iframe.off("load").on("load", function () {
      $loader.css("opacity", "0");
      setTimeout(function () {
        $loader.hide();
      }, 300);
    });
  });

  // 2. Close Modal Function
  function closeModal() {
    $modal.removeClass("is-active");
    $("body").css("overflow", "");

    setTimeout(function () {
      $modal.css("display", "none");
      // Unload iframe source to release memory and stop background processing
      $iframe.attr("src", "");
    }, 250);
  }

  // 3. Event Bindings
  $closeBtn.on("click", closeModal);

  // Dismiss on clicking backdrop outside container
  $modal.on("click", function (e) {
    if ($(e.target).is("#pdf-viewer-modal")) {
      closeModal();
    }
  });

  // Dismiss on pressing Escape
  $(document).on("keydown", function (e) {
    if (e.key === "Escape" && $modal.hasClass("is-active")) {
      closeModal();
    }
  });
})(jQuery);
