<?php defined( 'ABSPATH' ) || exit; ?>
<section class="abt-section contact-section" id="contact">
    <div class="abt-container">
        <div class="abt-card-3d abt-contact-grid color-theme-emerald">
            <div class="contact-info-col">
                <span class="abt-eyebrow">DIRECT TELEMETRY GATEWAY</span>
                <h2 class="abt-title-lg text-3d-extrude">Executive Secretariat &amp; Commercialisation Dispatch</h2>
                <p class="text-3d-relief">Transmit patent licensing proposals, laboratory assay bookings, or ministerial correspondence directly to the NASTCO Directorate of Innovation &amp; Commercialisation via our Termii-integrated dispatch gateway.</p>
                <div class="contact-meta-stack">
                    <div class="c-meta-item abt-card-3d color-theme-cyan">
                        <strong class="text-3d-card-title">📍 Headquarters Campus</strong>
                        <span>KM 10 Abuja–Lokoja Expressway, Sheda, Kwali Area Council, FCT Abuja</span>
                    </div>
                    <div class="c-meta-item abt-card-3d color-theme-gold">
                        <strong class="text-3d-card-title">📡 Live Telemetry Routing</strong>
                        <span>Instant Termii SMS/WhatsApp Executive Notification &amp; REST API Ledger</span>
                    </div>
                </div>
            </div>

            <form class="abt-dispatch-form" id="nastcoContactForm">
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="dispName">Full Name / Organization *</label>
                        <input type="text" id="dispName" name="name" required placeholder="Dr. / Engr. / Off-Taker Organization">
                    </div>
                    <div class="form-group">
                        <label for="dispPhone">Mobile / WhatsApp Number *</label>
                        <input type="tel" id="dispPhone" name="phone" required placeholder="+234 800 000 0000">
                    </div>
                </div>
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="dispEmail">Official Email Address</label>
                        <input type="email" id="dispEmail" name="email" placeholder="director@organization.ng">
                    </div>
                    <div class="form-group">
                        <label for="dispSubject">Target Directorate / Inquiry Type</label>
                        <select id="dispSubject" name="subject">
                            <option value="Venture Licensing & IP Off-Taking">💎 Venture Licensing &amp; IP Off-Taking</option>
                            <option value="AMSARC — Applied Mathematics & Simulation">💻 AMSARC — Applied Mathematics &amp; Simulation</option>
                            <option value="BARC — Biotechnology Research">🧬 BARC — Biotechnology Research</option>
                            <option value="CARC — Chemistry & Spectrometry">⚗️ CARC — Chemistry &amp; Spectrometry</option>
                            <option value="PARC — Physics & Clean Energy">☀️ PARC — Physics &amp; Clean Energy</option>
                            <option value="AEPC — Engineering & CNC Prototyping">⚙️ AEPC — Engineering &amp; CNC Prototyping</option>
                            <option value="NTC — Nuclear & Gamma Irradiation">☢️ NTC — Nuclear &amp; Gamma Irradiation</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dispMessage">Executive Brief / Technical Specifications *</label>
                    <textarea id="dispMessage" name="message" rows="4" required placeholder="Detail your patent licensing interest, sample assay specifications, or institutional proposal..."></textarea>
                </div>
                <button type="submit" id="submitDispatchBtn" class="abt-btn-3d gold full-width">
                    ⚡ Transmit Secure Executive Dispatch
                </button>
            </form>
        </div>
    </div>
</section>
