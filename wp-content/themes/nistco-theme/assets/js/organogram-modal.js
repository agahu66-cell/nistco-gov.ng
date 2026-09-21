/**
 * File: assets/js/organogram-modal.js
 * Interactive Directorate & Governance Organogram Modal Controller
 * Package: NistcoTheme
 * Version: 2.5.0
 */
(function ($) {
  "use strict";

  // Base URL resolution helper with backward compatibility
  const siteUrl =
    typeof nistcoSettings !== "undefined" && nistcoSettings.homeUrl
      ? nistcoSettings.homeUrl
      : typeof shestcoSettings !== "undefined" && shestcoSettings.homeUrl
        ? shestcoSettings.homeUrl
        : window.location.origin;

  // 1. Directorate & Executive Profiles Dictionary
  const orgProfiles = {
    ministry: {
      badge: "Supervisory Authority",
      title: "Federal Ministry of Innovation, Science & Technology (FMIST)",
      description:
        "The apex federal ministry providing statutory policy guidance, budgetary appropriation, and strategic alignment with the National Science, Technology, and Innovation Policy (NSTIP).",
      units: [
        "Office of the Honourable Minister",
        "Office of the Permanent Secretary",
        "Department of Science, Technology & Innovation Promotion",
        "Planning, Research & Statistics Directorate",
      ],
      capabilities: [
        "National STI Policy Directives",
        "Statutory Parastatal Oversight",
        "Inter-Ministerial Technology Alignment",
        "Bilateral Innovation Treaties",
      ],
      contact:
        "Supervising Desk: info@innovation.gov.ng | Federal Secretariat, Phase II, Abuja",
      linkUrl: "https://scienceandtech.gov.ng",
      linkLabel: "Visit FMIST Portal ↗",
      isExternal: true,
    },
    board: {
      badge: "Statutory Governance",
      title: "Governing Board of the Complex",
      description:
        "The institutional apex board appointed by the Federal Government to formulate broad policies, evaluate major research programmes, approve annual budgets, and oversee senior executive appointments.",
      units: [
        "Board Secretariat & Corporate Records",
        "Finance & General Purpose Committee (FGPC)",
        "Tenders Board & Procurement Oversight",
        "Scientific Advisory & Ethics Committee",
      ],
      capabilities: [
        "Fiduciary Governance",
        "Strategic Policy Approval",
        "Capital Project Authorization",
        "Research Charter Approvals",
      ],
      contact:
        "Board Secretariat: secretariat@nistco.gov.ng | Complex HQ, Sheda",
      linkUrl: siteUrl + "/about-us/#dignitaries",
      linkLabel: "View Governance Dignitaries ↑",
      isExternal: false,
    },
    dg_office: {
      badge: "Apex Executive Leadership",
      title: "Office of the Director-General / Chief Executive Officer",
      description:
        "Responsible for the overall scientific, administrative, and strategic leadership of the Complex. Leads national research commercialization, international partnerships, and institutional modernization.",
      units: [
        "Internal Audit & Compliance Unit",
        "Legal Services & Intellectual Property Desk",
        "SERVICOM & Anti-Corruption Transparency Unit (ACTU)",
        "Corporate Communications & Media Relations",
      ],
      capabilities: [
        "Strategic Institutional Leadership",
        "Public-Private Research Partnerships",
        "Intellectual Property & Patent Protection",
        "Digital Enterprise Transformation",
      ],
      contact: "Executive Office: dg@nistco.gov.ng | Tel: +234 (0) 9 290 1234",
      linkUrl: siteUrl + "/about-us/#dg-welcome",
      linkLabel: "Read DG / CEO Welcome Address ↑",
      isExternal: false,
    },
    biotech: {
      badge: "Advanced Research Directorate",
      title: "Biotechnology Advanced Research Centre (BARC)",
      description:
        "Mandated to harness genetic resources, bioinformatics, and cellular biology to address national food security, disease surveillance, crop micropropagation, and industrial bio-processing.",
      units: [
        "Plant Tissue Culture & Micropropagation Demonstration Lab",
        "Molecular Biology, Genomics & DNA Sequencing Unit",
        "Fermentation Technology & Industrial Bioprocess Suite",
        "Bio-pesticides & Bio-fertilizer Formulation Core",
      ],
      capabilities: [
        "Disease-Free Seedling Mass Multiplication",
        "Genomic Fingerprinting of Indigenous Flora",
        "Microbial Bio-Fertilizer Synthesis",
        "Molecular Diagnostics Residencies",
      ],
      contact: "Directorate Desk: biotech@nistco.gov.ng | BARC Complex, Wing B",
      linkUrl: siteUrl + "/facilities/",
      linkLabel: "Book Facility Time & Laboratories →",
      isExternal: false,
    },
    simulation: {
      badge: "Advanced Research Directorate",
      title:
        "Applied Mathematics and Simulation Advanced Research Centre (AMSARC)",
      description:
        "Dedicated to high-performance supercomputing (HPC), computational mathematics, cryptanalysis, and simulation models that forecast industrial dynamics, aerodynamic turbulence, and climate impact.",
      units: [
        "High-Performance Computational Supercomputing Cluster (HPC)",
        "Computational Fluid Dynamics (CFD) & Thermal Modeling Lab",
        "Cryptographic Security & Algorithmic Design Lab",
        "AI, Big Data & Agricultural Predictive Modeling Desk",
      ],
      capabilities: [
        "1,024-Core Parallel Supercomputing Compute Allocation",
        "Climate-Agricultural Simulation Forecasting",
        "Aerodynamic & Fluid Dynamics Calculations",
        "Secure Cryptographic Algorithm Development",
      ],
      contact: "Directorate Desk: simulation@nistco.gov.ng | AMSARC Facility",
      linkUrl: siteUrl + "/facilities/",
      linkLabel: "Request HPC Cluster Allocation →",
      isExternal: false,
    },
    chem_phys: {
      badge: "Frontier Physical & Nuclear Directorates",
      title:
        "Chemical, Physical & Nuclear Technology Centres (CARC / PARC / NTC)",
      description:
        "Houses state-of-the-art laboratories for advanced polymer synthesis, renewable energy materials, semiconductor characterization, nuclear radiation physics, and high-field NMR spectroscopy.",
      units: [
        "High-Field Multi-Nuclear NMR Core Facility (CARC)",
        "500L Batch Chemical Process Pilot Plant (CARC)",
        "Photovoltaic & Semiconductor Characterization Suite (PARC)",
        "Gamma Irradiation, NDT & Radiation Dosimetry Core (NTC)",
      ],
      capabilities: [
        "400/500 MHz Multi-Nuclear NMR Structural Testing",
        "500-Liter Industrial Chemical Synthesis Pilot Plant",
        "Thin-Film Solar Photovoltaic Simulators",
        "IAEA / NNRA Certified Gamma Irradiation",
      ],
      contact:
        "Directorate Desk: chemistry@nistco.gov.ng | Physical Sciences Block",
      linkUrl: siteUrl + "/facilities/",
      linkLabel: "Explore Analytical Instrumentation →",
      isExternal: false,
    },
    works_ict: {
      badge: "Engineering & Operational Directorate",
      title: "Directorate of Works, Services & ICT Unit",
      description:
        "Maintains the institutional digital ecosystem, enterprise servers, central electrical power, water utilities, and precision laboratory instrument calibration across the 2,000-hectare complex campus.",
      units: [
        "ICT Unit & Enterprise Network Infrastructure",
        "Central Precision Engineering & 5-Axis CNC Workshop",
        "500 kVA Solar Hybrid Microgrid & Clean Power Station",
        "Scientific Instrumentation Maintenance & Calibration Desk",
      ],
      capabilities: [
        "High-Availability Campus Network & Server Hosting",
        "Heavy Laboratory Power Conditioning",
        "5-Micron Precision Mechanical Part Prototyping",
        "Enterprise Digital System Support",
      ],
      contact: "Directorate Desk: works@nistco.gov.ng | Central Workshop Block",
      linkUrl: siteUrl + "/facilities/",
      linkLabel: "Explore Precision Engineering Workshop →",
      isExternal: false,
    },
    finance_admin: {
      badge: "Corporate Directorate",
      title: "Directorate of Finance & Corporate Administration",
      description:
        "Ensures institutional fiscal compliance, public procurement transparency under Bureau of Public Procurement (BPP) guidelines, human capital development, and statutory accounting.",
      units: [
        "Public Procurement Directorate (BPP Tender Desk)",
        "Finance, Budget & Remita (TSA) Accounts Unit",
        "Human Resource Management & Staff Training Registry",
        "General Administration, Logistics & Stores",
      ],
      capabilities: [
        "BPP-Compliant Tender Administration",
        "Treasury Single Account (TSA) Management",
        "Postgraduate Research Fellow Registry",
        "Statutory Audit & Public Records Archiving",
      ],
      contact:
        "Procurement Desk: procurement@nistco.gov.ng | Admin Wing, Floor 1",
      linkUrl: siteUrl + "/tenders/",
      linkLabel: "Open Public Procurement Gateway →",
      isExternal: false,
    },
  };

  // 2. Multi-Selector Helper to Support Various Template Markups
  function getElements() {
    return {
      $modal: $("#org-dossier-modal, #org-modal-backdrop"),
      $badge: $("#org-modal-cadre, #org-modal-badge"),
      $title: $("#org-modal-title"),
      $description: $("#org-modal-desc, #org-modal-description"),
      $unitsList: $("#org-modal-units"),
      $capabilities: $("#org-modal-pills, #org-modal-capabilities"),
      $contact: $("#org-modal-contact"),
      $link: $("#org-modal-link"),
      $closeBtn: $("#org-modal-close, #org-modal-close-btn"),
    };
  }

  // 3. Open Modal Handler
  function openOrgModal(targetKey) {
    const els = getElements();
    if (!els.$modal.length) return;

    const data = orgProfiles[targetKey];
    if (!data) return;

    // Populate Headers
    els.$badge.text(data.badge);
    els.$title.text(data.title);
    els.$description.text(data.description);

    // Populate Units
    els.$unitsList.empty();
    data.units.forEach(function (unit) {
      els.$unitsList.append(`<li>${escapeHtml(unit)}</li>`);
    });

    // Populate Capabilities / Pills
    els.$capabilities.empty();
    data.capabilities.forEach(function (cap) {
      els.$capabilities.append(
        `<span class="org-capability-pill">✓ ${escapeHtml(cap)}</span>`,
      );
    });

    // Populate Contact if element exists
    if (els.$contact.length) {
      els.$contact.html(`<span>${escapeHtml(data.contact)}</span>`);
    }

    // Populate & Configure Action Link
    if (els.$link.length) {
      els.$link.html(data.linkLabel);
      els.$link.attr("href", data.linkUrl);

      if (
        data.isExternal ||
        data.linkUrl.startsWith("http://") ||
        data.linkUrl.startsWith("https://")
      ) {
        if (data.linkUrl.indexOf(window.location.hostname) === -1) {
          els.$link.attr("target", "_blank");
          els.$link.attr("rel", "noopener noreferrer");
        } else {
          els.$link.removeAttr("target");
          els.$link.removeAttr("rel");
        }
      } else {
        els.$link.removeAttr("target");
        els.$link.removeAttr("rel");
      }
    }

    // Reveal Modal and Lock Body Scroll
    els.$modal.css("display", "flex");
    setTimeout(function () {
      els.$modal.addClass("is-active");
    }, 10);
    $("body").css("overflow", "hidden");
  }

  // 4. Close Modal Handler
  function closeOrgModal() {
    const els = getElements();
    if (!els.$modal.length) return;

    els.$modal.removeClass("is-active");
    $("body").css("overflow", "");
    setTimeout(function () {
      els.$modal.css("display", "none");
    }, 250);
  }

  // 5. Event Listeners
  $(document).ready(function () {
    // Open modal on clicking any element with .org-clickable
    $(document).on("click", ".org-clickable", function (e) {
      const target = $(this).data("org-target");
      if (target && orgProfiles[target]) {
        e.preventDefault();
        openOrgModal(target);
      }
    });

    // Keyboard trigger (Enter & Space)
    $(document).on("keydown", ".org-clickable", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        const target = $(this).data("org-target");
        if (target && orgProfiles[target]) {
          e.preventDefault();
          openOrgModal(target);
        }
      }
    });

    // Handle Footer Action Link clicks smoothly
    $(document).on("click", "#org-modal-link", function (e) {
      const href = $(this).attr("href");
      if (!href) return;

      if (
        href.includes("#") &&
        href.split("#")[0] === window.location.href.split("#")[0]
      ) {
        e.preventDefault();
        const hash = "#" + href.split("#")[1];
        closeOrgModal();
        const $target = $(hash);
        if ($target.length) {
          setTimeout(function () {
            const headerOffset =
              $(".main-header-bar, header").outerHeight() || 80;
            const targetPos = $target.offset().top - headerOffset - 20;
            $("html, body").animate({ scrollTop: targetPos }, 500);
          }, 260);
        }
      } else {
        closeOrgModal();
      }
    });

    // Close triggers
    $(document).on(
      "click",
      "#org-modal-close, #org-modal-close-btn",
      closeOrgModal,
    );

    $(document).on(
      "click",
      "#org-dossier-modal, #org-modal-backdrop",
      function (e) {
        if ($(e.target).is("#org-dossier-modal, #org-modal-backdrop")) {
          closeOrgModal();
        }
      },
    );

    $(document).on("keydown", function (e) {
      const els = getElements();
      if (e.key === "Escape" && els.$modal.is(":visible")) {
        closeOrgModal();
      }
    });
  });

  // Sanitizer
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
})(jQuery);
