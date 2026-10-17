<?php
/**
 * Template Name: Innovations & Patents Registry
 * Description: Institutional catalog for NASTCO sovereign IP, patents, NOTAP certifications, and TRL tracking.
 *
 * @package NASTCO
 */

get_header();

// Sample portfolio data structured by centre
$innovations = [
    [
        'patent_no'   => 'NG/P/2026/00142',
        'notap_ref'   => 'NOTAP/CERT/IND/2026/089',
        'title'       => 'Catalytic Pyrolysis of Heavy Petrochemical Residuals into Linear Alkylbenzenes',
        'centre'      => 'carc',
        'centre_name' => 'CARC (Chemistry)',
        'trl'         => 8,
        'trl_label'   => 'TRL 8 - Commercial Demonstration',
        'status'      => 'Licensed / Active Production',
        'partner'     => 'Indorama Eleme Petrochemicals Ltd',
        'summary'     => 'Proprietary zeolite catalyst formulations that convert heavy refinery tails into high-grade detergent intermediates at sub-critical pressures.'
    ],
    [
        'patent_no'   => 'NG/P/2025/00918',
        'notap_ref'   => 'NOTAP/CERT/BIO/2025/112',
        'title'       => 'High-Yield Cassava Bioethanol Fermentation Strain BARC-Eth-04',
        'centre'      => 'barc',
        'centre_name' => 'BARC (Biotech)',
        'trl'         => 9,
        'trl_label'   => 'TRL 9 - Full Commercial Operation',
        'status'      => 'Licensed / Commercial Run',
        'partner'     => 'CassavaBio Energy Transporters Nig. Ltd',
        'summary'     => 'Genetically optimized thermotolerant yeast strain capable of 14.8% ethanol concentration in high-gravity cassava mashes with zero enzymatic foaming.'
    ],
    [
        'patent_no'   => 'NG/P/2026/00204',
        'notap_ref'   => 'NOTAP/APPL/TECH/2026/043',
        'title'       => 'Perovskite-Silicon Tandem Solar PV Cell Architecture with 27.4% Conversion',
        'centre'      => 'parc',
        'centre_name' => 'PARC (Physics)',
        'trl'         => 6,
        'trl_label'   => 'TRL 6 - Prototype Field Validated',
        'status'      => 'Available for Industrial Licensing',
        'partner'     => 'National Solar Pilot Facility',
        'summary'     => 'Substrate passivated solar cell configuration tuned for equatorial solar spectral irradiation with reduced thermal degradation up to 65°C.'
    ],
    [
        'patent_no'   => 'NG/P/2026/00078',
        'notap_ref'   => 'NOTAP/CERT/ENG/2026/015',
        'title'       => 'Modular 5-Axis CNC Milling Spindle for High-Speed Titanium Machining',
        'centre'      => 'aepc',
        'centre_name' => 'AEPC (Prototype)',
        'trl'         => 7,
        'trl_label'   => 'TRL 7 - Integrated Pilot Demonstration',
        'status'      => 'Licensed / Prototype Production',
        'partner'     => 'Defense Engineering Technologies Group',
        'summary'     => 'Direct-drive water-cooled ceramic-bearing spindle assembly built specifically for precision aerospace component fabrication.'
    ],
    [
        'patent_no'   => 'NG/P/2026/00311',
        'notap_ref'   => 'Pending NOTAP Verification',
        'title'       => 'Neural CFD Solver for Aerodynamic Profile Optimization in Sub-Saharan Crosswinds',
        'centre'      => 'amsarc',
        'centre_name' => 'AMSARC (Applied Math)',
        'trl'         => 5,
        'trl_label'   => 'TRL 5 - Laboratory Validated',
        'status'      => 'R&D Commercial Partnership Open',
        'partner'     => 'Applied Mathematics Advanced Computing Lab',
        'summary'     => 'Physics-informed neural networks (PINNs) enabling real-time turbulent boundary layer simulation with a 40x speedup over traditional Navier-Stokes solvers.'
    ],
    [
        'patent_no'   => 'NG/P/2025/00780',
        'notap_ref'   => 'NOTAP/CERT/MED/2025/031',
        'title'       => 'Direct Digital Dosimetry Calibration Standard for Industrial Gamma Irradiators',
        'centre'      => 'ntc',
        'centre_name' => 'NTC (Nuclear)',
        'trl'         => 9,
        'trl_label'   => 'TRL 9 - National Reference Standard',
        'status'      => 'Active Statutory Calibration Service',
        'partner'     => 'Federal Secondary Standard Dosimetry Laboratory',
        'summary'     => 'Statutory optical density calibration wafer certified to IAEA protocols for medical radiotherapy and agricultural crop sterilization.'
    ],
];
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/ventures-engine.css' ); ?>">

<style>
    .innovations-hero {
        padding: 5rem 0 3rem 0;
        background: radial-gradient(circle at 80% 10%, rgba(212, 175, 55, 0.12) 0%, transparent 60%),
                    radial-gradient(circle at 15% 90%, rgba(0, 210, 133, 0.08) 0%, transparent 50%),
                    #060d17;
        border-bottom: 2px solid #d4af37;
    }

    .trl-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.65rem;
        background: rgba(212, 175, 55, 0.15);
        color: #d4af37;
        border: 1px solid rgba(212, 175, 55, 0.35);
        border-radius: 6px;
        font-size: 0.74rem;
        font-weight: 800;
        text-transform: uppercase;
        font-family: ui-monospace, monospace;
    }

    .ip-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        gap: 1.75rem;
        margin-top: 2.5rem;
        margin-bottom: 5rem;
    }

    .ip-card {
        background: #0c1626;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .ip-card:hover {
        transform: translateY(-4px);
        border-color: #d4af37;
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45), 0 0 15px rgba(212, 175, 55, 0.15);
    }

    .ip-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.25rem;
    }

    .ip-title {
        font-size: 1.2rem;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.35;
        margin: 0 0 0.75rem 0;
    }

    .ip-summary {
        font-size: 0.88rem;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .ip-meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        padding-top: 1rem;
        font-size: 0.78rem;
        color: #64748b;
    }

    .btn-ip-inquire {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        padding: 0.65rem 1.2rem;
        background: rgba(212, 175, 55, 0.1);
        border: 1px solid #d4af37;
        color: #d4af37;
        border-radius: 8px;
        font-size: 0.82rem;
        font-weight: 800;
        text-decoration: none;
        transition: all 0.2s ease;
        margin-top: 1.25rem;
    }

    .btn-ip-inquire:hover {
        background: #d4af37;
        color: #060d17;
        box-shadow: 0 4px 14px rgba(212, 175, 55, 0.35);
    }
</style>

<main class="ventures-dashboard-main">
    <header class="innovations-hero">
        <div class="ventures-container">
            <span class="ventures-badge" style="border-color: #d4af37; color: #d4af37; background: rgba(212, 175, 55, 0.1);">
                <span>●</span> Federal Intellectual Property Repository
            </span>
            <h1 class="ventures-title">Innovations & Sovereign Patent Registry</h1>
            <p class="ventures-subtitle">
                Official register of technological patents, NOTAP transfer agreements, and breakthrough discoveries engineered across NASTCO’s specialized research centres. All active covenants adhere to the statutory 40 / 35 / 25 royalty distribution charter.
            </p>

            <div class="filter-pills-cluster">
                <button class="filter-pill active" onclick="filterIP('all')">All Disciplines</button>
                <button class="filter-pill" onclick="filterIP('carc')">CARC (Chemistry)</button>
                <button class="filter-pill" onclick="filterIP('barc')">BARC (Biotech)</button>
                <button class="filter-pill" onclick="filterIP('parc')">PARC (Physics)</button>
                <button class="filter-pill" onclick="filterIP('aepc')">AEPC (Prototype)</button>
                <button class="filter-pill" onclick="filterIP('amsarc')">AMSARC (Applied Math)</button>
                <button class="filter-pill" onclick="filterIP('ntc')">NTC (Nuclear)</button>
            </div>
        </div>
    </header>

    <div class="ventures-container">
        <div class="ip-grid" id="ipGrid">
            <?php foreach ( $innovations as $item ) : ?>
                <article class="ip-card" data-centre="<?php echo esc_attr( $item['centre'] ); ?>">
                    <div>
                        <div class="ip-card-header">
                            <div>
                                <span class="centre-tag <?php echo esc_attr( $item['centre'] ); ?>">
                                    <?php echo esc_html( $item['centre_name'] ); ?>
                                </span>
                                <div style="margin-top: 0.5rem; font-family: ui-monospace, monospace; font-size: 0.78rem; color: #cbd5e1; font-weight: 700;">
                                    <?php echo esc_html( $item['patent_no'] ); ?>
                                </div>
                            </div>
                            <span class="trl-badge" title="<?php echo esc_attr( $item['trl_label'] ); ?>">
                                TRL <?php echo esc_html( $item['trl'] ); ?>
                            </span>
                        </div>

                        <h2 class="ip-title"><?php echo esc_html( $item['title'] ); ?></h2>
                        <p class="ip-summary"><?php echo esc_html( $item['summary'] ); ?></p>
                    </div>

                    <div>
                        <div class="ip-meta-row">
                            <span>NOTAP Crt:</span>
                            <strong style="color: #cbd5e1; font-family: ui-monospace, monospace;"><?php echo esc_html( $item['notap_ref'] ); ?></strong>
                        </div>
                        <div class="ip-meta-row" style="margin-top: 0.5rem;">
                            <span>Commercial Status:</span>
                            <span style="color: #00d285; font-weight: 700;"><?php echo esc_html( $item['status'] ); ?></span>
                        </div>

                        <a href="<?php echo esc_url( home_url( '/commercial-ventures/#licensing' ) ); ?>" class="btn-ip-inquire">
                            <span>Request Licensing Dossier</span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 11L11 1M11 1H3M11 1V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<script>
function filterIP(centre) {
    document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');

    const cards = document.querySelectorAll('#ipGrid .ip-card');
    cards.forEach(c => {
        if (centre === 'all' || c.getAttribute('data-centre') === centre) {
            c.style.display = 'flex';
        } else {
            c.style.display = 'none';
        }
    });
}
</script>

<?php get_footer(); ?>
