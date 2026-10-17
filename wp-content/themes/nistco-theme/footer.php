<?php
/**
 * NASTCO Institutional Footer Template
 * 
 * Research Centre Designations:
 * - AMSARC: Applied Mathematics & Simulation Advanced Research Centre
 * - BARC: Biotechnology Advanced Research Centre
 * - CARC: Chemistry Advanced Research Centre
 * - PARC: Physics Advanced Research Centre
 * - AEPC: Advanced Engineering & Prototype Centre
 * - NTC: Nuclear Technology Centre
 *
 * @package NASTCO
 */
?>
</div><!-- /#main-content -->

<footer class="nastco-site-footer" role="contentinfo">
    <style>
        .nastco-site-footer {
            background: #03070d;
            color: #94a3b8;
            border-top: 2px solid #d4af37;
            padding: 4.5rem 0 2rem 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            font-size: 0.9rem;
            position: relative;
        }

        .nastco-footer-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 1.75rem;
        }

        .nastco-footer-grid {
            display: grid;
            grid-template-columns: 2fr 1.25fr 1.25fr 1.5fr;
            gap: 3rem;
            margin-bottom: 3.5rem;
        }

        @media (max-width: 1024px) {
            .nastco-footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2.5rem;
            }
        }

        @media (max-width: 640px) {
            .nastco-footer-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        /* Brand Column */
        .footer-brand-wrap {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .footer-logo-anchor {
            display: inline-flex;
            align-items: center;
            gap: 0.9rem;
            text-decoration: none;
            color: #ffffff;
        }

        .footer-logo-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            clip-path: circle(48.5% at 50% 50%);
            object-fit: contain;
            border: 2px solid #d4af37;
            filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.3));
            transition: transform 0.25s ease;
        }

        .footer-logo-anchor:hover .footer-logo-img {
            transform: scale(1.05);
        }

        .footer-brand-title {
            font-size: 1.25rem;
            font-weight: 900;
            color: #ffffff;
            letter-spacing: -0.5px;
            display: block;
        }

        .footer-brand-sub {
            font-size: 0.65rem;
            font-weight: 700;
            color: #d4af37;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            display: block;
        }

        .footer-mission-text {
            line-height: 1.65;
            color: #94a3b8;
            font-size: 0.86rem;
            margin: 0;
            max-width: 380px;
        }

        .footer-statutory-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(212, 175, 55, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.35);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.76rem;
            font-weight: 700;
            color: #d4af37;
            width: fit-content;
        }

        .footer-social-wrap {
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
            margin-top: 0.25rem;
        }

        .footer-social-label {
            font-size: 0.76rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #d4af37;
        }

        .footer-social-icons {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .footer-social-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(212, 175, 55, 0.25);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .footer-social-btn:hover {
            background: rgba(212, 175, 55, 0.15);
            border-color: #d4af37;
            color: #d4af37;
            transform: translateY(-2px);
        }

        /* Column Headers & Links */
        .footer-col-title {
            font-size: 0.82rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #ffffff;
            margin: 0 0 1.25rem 0;
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }

        .footer-col-title::before {
            content: "";
            width: 6px;
            height: 6px;
            background: #d4af37;
            border-radius: 50%;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }

        .footer-links-list li a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.86rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .footer-links-list li a:hover {
            color: #d4af37;
            transform: translateX(3px);
        }

        .footer-centre-abbr {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-weight: 800;
            font-size: 0.76rem;
            color: #d4af37;
        }

        .footer-meta-block {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            font-size: 0.84rem;
            color: #94a3b8;
            line-height: 1.6;
        }

        .footer-meta-row {
            display: flex;
            align-items: flex-start;
            gap: 0.65rem;
        }

        .footer-meta-icon {
            color: #d4af37;
            flex-shrink: 0;
            margin-top: 0.2rem;
        }

        /* Bottom Statutory Strip */
        .nastco-footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.25rem;
            font-size: 0.78rem;
            color: #64748b;
        }

        .footer-fed-legal {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .footer-legal-links {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .footer-legal-links a {
            color: #64748b;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-legal-links a:hover {
            color: #d4af37;
        }
    </style>

    <div class="nastco-footer-container">
        <div class="nastco-footer-grid">
            <!-- 1. Institutional Brand & Socials -->
            <div class="footer-brand-wrap">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-anchor">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nastco1-logo.png' ); ?>" 
                         alt="National Science and Technology Complex (NASTCO) Official Seal" 
                         class="footer-logo-img" 
                         width="50" 
                         height="50" 
                         loading="lazy">
                    <div>
                        <span class="footer-brand-title">NASTCO</span>
                        <span class="footer-brand-sub">National Science and Technology Complex</span>
                    </div>
                </a>
                <p class="footer-mission-text">
                    Nigeria's premier science, technology, and applied research complex, accepted by the Federal Ministry of Innovation, Science & Technology and proceeding through statutory Senate enactment. Advancing sovereign industrial sovereignty and certified technology transfer.
                </p>
                <div class="footer-statutory-pill">
                    <span>Statutory Split:</span>
                    <strong>40% Inventors • 35% Centres • 25% NASTCO</strong>
                </div>

                <div class="footer-social-wrap">
                    <span class="footer-social-label">Follow @nastcogovng</span>
                    <div class="footer-social-icons">
                        <a href="https://x.com/nastcogovng" class="footer-social-btn" target="_blank" rel="noopener noreferrer" title="X / Twitter (@nastcogovng)" aria-label="X (Twitter)">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://linkedin.com/company/nastcogovng" class="footer-social-btn" target="_blank" rel="noopener noreferrer" title="LinkedIn" aria-label="LinkedIn">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="https://youtube.com/@nastcogovng" class="footer-social-btn" target="_blank" rel="noopener noreferrer" title="YouTube Channel" aria-label="YouTube">
                            <svg width="15" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://facebook.com/nastcogovng" class="footer-social-btn" target="_blank" rel="noopener noreferrer" title="Facebook Page" aria-label="Facebook">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Specialized Research Centres Directory -->
            <div>
                <h4 class="footer-col-title">Research Centres</h4>
                <ul class="footer-links-list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>">
                            <span class="footer-centre-abbr">AMSARC</span> Applied Mathematics & Simulation
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>">
                            <span class="footer-centre-abbr">BARC</span> Biotechnology Research
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>">
                            <span class="footer-centre-abbr">CARC</span> Chemistry Advanced Research
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>">
                            <span class="footer-centre-abbr">PARC</span> Physics Advanced Research
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/aepc/' ) ); ?>">
                            <span class="footer-centre-abbr">AEPC</span> Advanced Engineering & Prototype
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>">
                            <span class="footer-centre-abbr">NTC</span> Nuclear Technology Centre
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 3. Commercialization & Governance -->
            <div>
                <h4 class="footer-col-title">Commercialization</h4>
                <ul class="footer-links-list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="color: #d4af37; font-weight: 700;">
                            Ventures & Royalty Ledger
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/innovations/' ) ); ?>">
                            Patents & Intellectual Property
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/notap-accreditation/' ) ); ?>">
                            NOTAP Industrial Transfer
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/statutory-mandate/' ) ); ?>">
                            Federal STI Mandate
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>">
                            Federal Procurement Tenders
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/portal/' ) ); ?>">
                            Scientific Staff Intranet
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 4. Liaison Secretariat & Official Inquiries -->
            <div>
                <h4 class="footer-col-title">Liaison Secretariat</h4>
                <div class="footer-meta-block">
                    <div class="footer-meta-row">
                        <span class="footer-meta-icon">📍</span>
                        <span>
                            National Science and Technology Complex (NASTCO)<br>
                            Federal Capital Territory, Abuja, Nigeria
                        </span>
                    </div>
                    <div class="footer-meta-row">
                        <span class="footer-meta-icon">🏛️</span>
                        <span>Federal Ministry of Innovation, Science & Technology</span>
                    </div>
                    <div class="footer-meta-row">
                        <span class="footer-meta-icon">✉️</span>
                        <span>commercialization@nastco.gov.ng</span>
                    </div>
                    <div class="footer-meta-row">
                        <span class="footer-meta-icon">🌐</span>
                        <span>www.nastco.gov.ng</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statutory Bottom Strip -->
        <div class="nastco-footer-bottom">
            <div class="footer-fed-legal">
                <span>© <?php echo date( 'Y' ); ?> National Science and Technology Complex (NASTCO). All Rights Reserved.</span>
            </div>
            <div class="footer-legal-links">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
                <span>•</span>
                <a href="<?php echo esc_url( home_url( '/terms-of-covenant/' ) ); ?>">Commercial Terms</a>
                <span>•</span>
                <a href="<?php echo esc_url( home_url( '/statutory-disclosure/' ) ); ?>">FOI Disclosure</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
