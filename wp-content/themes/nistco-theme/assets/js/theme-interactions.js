/**
 * File: assets/js/theme-interactions.js
 * Comprehensive Animation, Scroll-Reveal & Micro-Interactions Controller
 */

(function ($) {
  "use strict";

  $(document).ready(function () {
    // 1. Mark DOM ready to activate smooth animations without hiding content prematurely
    $("html").addClass("js-ready");

    initScrollProgressBar();
    initStickyHeaderBlur();
    initScrollRevealEngine();
    initMicroInteractions();
  });

  function initScrollProgressBar() {
    if (!$("#scroll-progress-bar").length) {
      $("body").prepend('<div id="scroll-progress-bar"></div>');
    }
    const $progressBar = $("#scroll-progress-bar");
    $(window).on("scroll", function () {
      const scrollTop = $(window).scrollTop();
      const docHeight = $(document).height() - $(window).height();
      const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
      $progressBar.css("width", scrollPercent + "%");
    });
  }

  function initStickyHeaderBlur() {
    const $header = $(".main-header-bar");
    if (!$header.length) return;
    function handleScroll() {
      if ($(window).scrollTop() > 30) {
        $header.addClass("is-scrolled");
      } else {
        $header.removeClass("is-scrolled");
      }
    }
    $(window).on("scroll", handleScroll);
    handleScroll();
  }

  function initScrollRevealEngine() {
    $(
      ".pub-card, .division-card, .mandate-card, .dg-profile-card, .auth-card",
    ).each(function (index) {
      if (!$(this).hasClass("reveal-on-scroll")) {
        $(this).addClass("reveal-on-scroll");
        const delay = (index % 4) * 100;
        if (delay > 0) {
          $(this).addClass("delay-" + delay);
        }
      }
    });

    const revealElements = document.querySelectorAll(".reveal-on-scroll");
    if (!revealElements.length) return;

    if ("IntersectionObserver" in window) {
      const revealObserver = new IntersectionObserver(
        function (entries, observer) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              observer.unobserve(entry.target);
            }
          });
        },
        { root: null, rootMargin: "0px 0px -40px 0px", threshold: 0.1 },
      );

      revealElements.forEach(function (el) {
        revealObserver.observe(el);
      });
    } else {
      $(".reveal-on-scroll").addClass("is-visible");
    }
  }

  function initMicroInteractions() {
    $('a[href^="#"]:not([href="#"])').on("click", function (e) {
      const targetId = $(this).attr("href");
      const $target = $(targetId);
      if ($target.length) {
        e.preventDefault();
        const headerOffset = $(".main-header-bar").outerHeight() || 70;
        const targetPosition = $target.offset().top - headerOffset - 15;
        $("html, body").animate({ scrollTop: targetPosition }, 500);
      }
    });
  }
})(jQuery);
(function ($) {
  "use strict";

  $(document).ready(function () {
    initScrollProgressBar();
    initStickyHeaderBlur();
    initScrollRevealEngine();
    initMicroInteractions();
  });

  /**
   * 1. Top Reading / Scroll Progress Bar
   */
  function initScrollProgressBar() {
    if (!$("#scroll-progress-bar").length) {
      $("body").prepend('<div id="scroll-progress-bar"></div>');
    }
    const $progressBar = $("#scroll-progress-bar");

    $(window).on("scroll", function () {
      const scrollTop = $(window).scrollTop();
      const docHeight = $(document).height() - $(window).height();
      const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
      $progressBar.css("width", scrollPercent + "%");
    });
  }

  /**
   * 2. Header Blur & Elevation on Scroll
   */
  function initStickyHeaderBlur() {
    const $header = $(".main-header-bar");
    if (!$header.length) return;

    function handleScroll() {
      if ($(window).scrollTop() > 30) {
        $header.addClass("is-scrolled");
      } else {
        $header.removeClass("is-scrolled");
      }
    }

    $(window).on("scroll", handleScroll);
    handleScroll();
  }

  /**
   * 3. IntersectionObserver Scroll Reveal Engine
   */
  function initScrollRevealEngine() {
    // Automatically attach reveal classes to standard grid items if not already added
    $(
      ".pub-card, .division-card, .mandate-card, .dg-profile-card, .auth-card",
    ).each(function (index) {
      if (!$(this).hasClass("reveal-on-scroll")) {
        $(this).addClass("reveal-on-scroll");
        // Stagger every 3-4 items
        const delay = (index % 4) * 100;
        if (delay > 0) {
          $(this).addClass("delay-" + delay);
        }
      }
    });

    const revealElements = document.querySelectorAll(".reveal-on-scroll");
    if (!revealElements.length) return;

    if ("IntersectionObserver" in window) {
      const observerOptions = {
        root: null,
        rootMargin: "0px 0px -40px 0px",
        threshold: 0.12,
      };

      const revealObserver = new IntersectionObserver(function (
        entries,
        observer,
      ) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      revealElements.forEach(function (el) {
        revealObserver.observe(el);
      });
    } else {
      // Fallback for older browsers
      $(".reveal-on-scroll").addClass("is-visible");
    }
  }

  /**
   * 4. Micro-Interactions (Button Ripple & Smooth Anchor Scrolling)
   */
  function initMicroInteractions() {
    // Smooth Anchor Scrolling with header offset compensation
    $('a[href^="#"]:not([href="#"])').on("click", function (e) {
      const targetId = $(this).attr("href");
      const $target = $(targetId);

      if ($target.length) {
        e.preventDefault();
        const headerOffset = $(".main-header-bar").outerHeight() || 70;
        const targetPosition = $target.offset().top - headerOffset - 15;

        $("html, body").animate(
          {
            scrollTop: targetPosition,
          },
          500,
        );
      }
    });
  }
})(jQuery);
