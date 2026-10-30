<?php
/**
 * NASTCO Sovereign Portal — Master Executive Homepage (front-page.php)
 * Complete 12-Section Architecture:
 *   01. Next-Generation Hero Experience
 *   02. Presidential Section
 *   03. Sovereign Scientific & Engineering Centres (6 Hub Cards)
 *   04. FAC Strategic Platform
 *   05. High-Impact Commercialised Patents
 *   06. Federal Ministry Leadership (FMST Unified)
 *   07. Executive Financial & Royalty Dashboard (Looker Studio + 40/35/25 LiveLedger)
 *   08. NASTCO Executive Leadership (Board Chair & DG/CEO)
 *   09. Strategic Institutional & Regulatory Partners (3D Partnership Ecosystem)
 *   10. NASTCO Media & Directorate Briefings Hub
 *   11. 3D Rotational Compliance Engine
 *   12. Smart Institutional Footer (in footer.php)
 */
defined( 'ABSPATH' ) || exit;

get_header();

// 1. Next-Generation Hero Experience
get_template_part( 'template-parts/front-page/01-sovereign-hero' );

// 2. Presidential Section & 4. FAC Strategic Platform
get_template_part( 'template-parts/front-page/01b-presidential-fac' );

// 3. Sovereign Scientific & Engineering Centres
get_template_part( 'template-parts/front-page/02-sovereign-centres' );

// 5. High-Impact Commercialised Patents
get_template_part( 'template-parts/front-page/03-commercialised-patents' );

// 6. Federal Ministry Leadership
get_template_part( 'template-parts/front-page/05-fmst-leadership' );

// 7. Executive Financial & Royalty Dashboard
get_template_part( 'template-parts/front-page/07-executive-financial-dashboard' );

// 8. NASTCO Executive Leadership
get_template_part( 'template-parts/front-page/07b-nastco-leadership' );

// 9. Strategic Partners & 10. Media Hub
get_template_part( 'template-parts/front-page/08-partners-media-ratings' );

// 11. 3D Rotational Compliance Engine
get_template_part( 'template-parts/front-page/11-rotational-compliance-engine' );

get_footer();
