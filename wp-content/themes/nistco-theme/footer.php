<footer class="site-footer"
    style="background: var(--primary-dark, #073B24); color: #ffffff; padding: 4rem 0 1.5rem; margin-top: 4rem; border-top: 3px solid var(--accent-gold, #c59b27);">

    <!-- Top Footer Columns -->
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; box-sizing: border-box;">
        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2.5rem; margin-bottom: 3rem;">

            <!-- Column 1: Complex Headquarters -->
            <div>
                <h4
                    style="color: var(--accent-gold, #c59b27); margin-top: 0; margin-bottom: 1rem; font-size: 1.15rem; font-weight: 700; letter-spacing: 0.3px;">
                    Complex Headquarters
                </h4>
                <p style="font-size: 0.92rem; line-height: 1.75; color: #d1d5db; margin: 0 0 1rem 0;">
                    <strong style="color: #ffffff;"><?php bloginfo( 'name' ); ?></strong><br>
                    10km from Gwagwalada, along Abuja-Lokoja Expressway,<br>
                    Kwali Area Council, P.M.B. 186, Garki, Abuja, F.C.T., Nigeria.
                </p>
                <div style="font-size: 0.85rem; color: #9ca3af;">
                    <span>Official Desk: </span>
                    <a href="mailto:info@shestco.gov.ng"
                        style="color: var(--accent-gold, #c59b27); text-decoration: none;">info@shestco.gov.ng</a>
                </div>
            </div>

            <!-- Column 2: Departments & Portals -->
            <div>
                <h4
                    style="color: var(--accent-gold, #c59b27); margin-top: 0; margin-bottom: 1rem; font-size: 1.15rem; font-weight: 700; letter-spacing: 0.3px;">
                    Departments & Portals
                </h4>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.92rem; line-height: 2.1;">
                    <li>
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'research_centre' ) ); ?>"
                            style="color: #d1d5db; text-decoration: none; transition: color 0.2s;">
                            &rsaquo; Advanced Research Centres
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'publication' ) ); ?>"
                            style="color: #d1d5db; text-decoration: none; transition: color 0.2s;">
                            &rsaquo; Research Papers & Scientific Repositories
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/tenders/' ) ); ?>"
                            style="color: #d1d5db; text-decoration: none; transition: color 0.2s;">
                            &rsaquo; Procurement & Public Tenders
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"
                            style="color: #d1d5db; text-decoration: none; transition: color 0.2s;">
                            &rsaquo; News, Circulars & Media Statements
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/staff-login/' ) ); ?>"
                            style="color: var(--accent-gold, #c59b27); font-weight: 600; text-decoration: none; transition: color 0.2s;">
                            &rsaquo; Staff Intranet Portal
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Supervising Body -->
            <div>
                <h4
                    style="color: var(--accent-gold, #c59b27); margin-top: 0; margin-bottom: 1rem; font-size: 1.15rem; font-weight: 700; letter-spacing: 0.3px;">
                    Supervising Body
                </h4>
                <p style="font-size: 0.92rem; line-height: 1.75; color: #d1d5db; margin: 0 0 1rem 0;">
                    <strong style="color: #ffffff;">Federal Ministry of Innovation, Science and Technology
                        (FMIST)</strong><br>
                    Federal Secretariat Complex, Phase I, Shehu Shagari Way, Central Business District, Abuja, Nigeria.
                </p>
                <div
                    style="font-size: 0.85rem; color: #9ca3af; border-left: 2px solid var(--accent-gold, #c59b27); padding-left: 0.65rem;">
                    Statutory parastatal executing basic and applied scientific research and technology incubation.
                </div>
            </div>

        </div>

        <!-- Sub-Footer: Copyright & Compliance -->
        <div
            style="border-top: 1px solid rgba(255, 255, 255, 0.12); padding-top: 1.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; font-size: 0.85rem; color: #9ca3af;">
            <div>
                &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
            </div>
            <div style="display: flex; gap: 1.5rem; align-items: center;">
                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"
                    style="color: #9ca3af; text-decoration: none;">Mandate</a>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"
                    style="color: #9ca3af; text-decoration: none;">Privacy Policy</a>
                <a href="<?php echo esc_url( home_url( '/tenders/' ) ); ?>"
                    style="color: #9ca3af; text-decoration: none;">Procurement</a>
            </div>
        </div>
    </div>
</footer>

<style>
.site-footer a:hover {
    color: #ffffff !important;
    text-decoration: underline !important;
}
</style>

<!-- =========================================================================
     INTERACTIVE CITATION EXPORT MODAL
     ========================================================================= -->
<div id="citation-export-modal" class="cite-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="cite-modal-container">

        <!-- Header -->
        <div class="cite-modal-header">
            <div class="cite-modal-title-wrap">
                <span class="cite-modal-badge">Citation Export</span>
                <h3 id="cite-modal-paper-title" class="cite-modal-paper-title">Publication Citation</h3>
            </div>
            <button type="button" id="cite-modal-close-btn" class="cite-modal-btn-close"
                aria-label="Close Modal">&times;</button>
        </div>

        <!-- Format Selector Tabs -->
        <div class="cite-modal-tabs">
            <button type="button" class="cite-tab-btn is-active" data-format="bibtex">BibTeX (.bib)</button>
            <button type="button" class="cite-tab-btn" data-format="ris">RIS / EndNote (.ris)</button>
        </div>

        <!-- Code Display Container -->
        <div class="cite-modal-body">
            <pre class="cite-code-pre"><code id="cite-code-display" class="cite-code-display"></code></pre>
        </div>

        <!-- Footer Actions -->
        <div class="cite-modal-footer">
            <div class="cite-toast-msg" id="cite-toast-msg">Copied to clipboard!</div>
            <div class="cite-modal-actions">
                <button type="button" id="btn-copy-citation" class="cite-btn-copy">
                    📋 Copy to Clipboard
                </button>
                <button type="button" id="btn-download-citation" class="cite-btn-download">
                    📥 Download File
                </button>
            </div>
        </div>

    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>