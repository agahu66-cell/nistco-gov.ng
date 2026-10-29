<?php defined( 'ABSPATH' ) || exit; ?>
<section class="abt-section abt-flip-carousel-wrap" id="publications">
    <div class="abt-container">
        <div class="abt-section-header">
            <span class="abt-eyebrow">SCIENTIFIC REPOSITORY &amp; MONOGRAPHS</span>
            <h2 class="abt-title-lg text-3d-extrude">Featured Publications &amp; Statutory Dossiers</h2>
            <p class="abt-subtitle text-3d-relief">Explore peer-reviewed research monographs, IP frameworks, and technical radiation safety dossiers.</p>
        </div>

        <!-- 3D Flip Carousel Stage -->
        <div class="flip-carousel-stage" id="pubFlipCarousel">
            <div class="flip-carousel-cards" id="pubCardsTrack">
                
                <!-- Card 1 -->
                <div class="flip-card-3d active" data-index="0">
                    <div class="flip-card-inner">
                        <div class="flip-card-front abt-card-3d color-theme-cyan">
                            <span class="abt-pill-3d cyan">AMSARC MONOGRAPH • 2026</span>
                            <h3 class="text-3d-card-title">Physics-Informed Neural Networks for Turbulent Flow &amp; Stress</h3>
                            <p class="text-3d-relief">Benchmarking sovereign numerical solvers for aerospace aerodynamics and critical civil infrastructure resilience.</p>
                            <button type="button" class="flip-toggle-btn">🔍 Flip for Dossier Details</button>
                        </div>
                        <div class="flip-card-back abt-card-3d color-theme-cyan">
                            <span class="abt-pill-3d gold">TECHNICAL SPECIFICATION</span>
                            <h3 class="text-3d-card-title">Numerical Solver Architecture</h3>
                            <p class="text-3d-relief">Deployed on the NASTCO HPE ProLiant MicroServer cluster. Reduces aerodynamic simulation runtime by 74% using GPU-accelerated PINNs.</p>
                            <button type="button" class="flip-toggle-btn">↩ Return to Overview</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flip-card-3d" data-index="1">
                    <div class="flip-card-inner">
                        <div class="flip-card-front abt-card-3d color-theme-gold">
                            <span class="abt-pill-3d gold">COMMERCIALISATION LEDGER • 2026</span>
                            <h3 class="text-3d-card-title">The 40/35/25 Statutory IP Revenue Distribution Framework</h3>
                            <p class="text-3d-relief">Institutional guidelines for industrial off-takers, patent valuation, and automated royalty splits at NASTCO.</p>
                            <button type="button" class="flip-toggle-btn">🔍 Flip for Dossier Details</button>
                        </div>
                        <div class="flip-card-back abt-card-3d color-theme-gold">
                            <span class="abt-pill-3d cyan">FISCAL GOVERNANCE</span>
                            <h3 class="text-3d-card-title">Automated Revenue Split</h3>
                            <p class="text-3d-relief">Connected to LiveLedger and Google Looker Studio. Automatically routes 40% to inventors, 35% to research centres, and 25% to sovereign reserves.</p>
                            <button type="button" class="flip-toggle-btn">↩ Return to Overview</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flip-card-3d" data-index="2">
                    <div class="flip-card-inner">
                        <div class="flip-card-front abt-card-3d color-theme-crimson">
                            <span class="abt-pill-3d green">NTC / BARC TECHNICAL DOSSIER</span>
                            <h3 class="text-3d-card-title">Cobalt-60 Gamma Dosimetry for Export Agro-Preservation</h3>
                            <p class="text-3d-relief">Eliminating post-harvest aflatoxin and microbial contamination in Nigerian agricultural exports via gamma irradiation.</p>
                            <button type="button" class="flip-toggle-btn">🔍 Flip for Dossier Details</button>
                        </div>
                        <div class="flip-card-back abt-card-3d color-theme-crimson">
                            <span class="abt-pill-3d gold">RADIATION SAFETY</span>
                            <h3 class="text-3d-card-title">GIF Facility Protocols</h3>
                            <p class="text-3d-relief">Meets NNRA and IAEA safety thresholds. Calibrated for high-throughput food sterilization and medical device bio-burden reduction.</p>
                            <button type="button" class="flip-toggle-btn">↩ Return to Overview</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <div class="flip-carousel-controls">
                <button type="button" id="pubPrevBtn" class="abt-btn-3d cyan" aria-label="Previous Publication">❮ Prev Dossier</button>
                <div class="carousel-dots" id="pubDots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
                <button type="button" id="pubNextBtn" class="abt-btn-3d cyan" aria-label="Next Publication">Next Dossier ❯</button>
            </div>
        </div>
    </div>
</section>
