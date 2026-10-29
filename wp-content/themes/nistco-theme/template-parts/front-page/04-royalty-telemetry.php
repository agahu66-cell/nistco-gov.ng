<?php
/**
 * Front Page Partial 04: 40/35/25 Royalty Distribution & Governance
 */
defined( 'ABSPATH' ) || exit;

$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<section class="fp-section fp-royalty-section">
    <div class="fp-container">
        <div class="fp-royalty-banner-3d color-theme-gold">
            <div class="royalty-copy">
                <span class="fp-eyebrow">DIRECTORATE OF INNOVATION &amp; COMMERCIALISATION</span>
                <h2 class="fp-section-title text-3d-extrude">The Statutory 40 / 35 / 25 Royalty Framework</h2>
                <p class="text-3d-relief">
                    Every licensed NASTCO patent and commercial venture is governed by an automated, transparent revenue-sharing ledger aligned with NOTAP and PPA 2007 statutory mandates.
                </p>
                <a href="<?php echo esc_url( $ventures_url ); ?>" class="btn-3d-primary">Launch Interactive Royalty Simulator →</a>
            </div>

            <div class="royalty-tiers-3d">
                <div class="tier-pill-3d color-theme-gold">
                    <span class="tier-pct text-3d-number-gold">40%</span>
                    <div>
                        <strong>Inventing Research Team &amp; Originators</strong>
                        <small>Direct financial incentive to principal investigators &amp; lab scientists.</small>
                    </div>
                </div>
                <div class="tier-pill-3d color-theme-cyan">
                    <span class="tier-pct text-3d-number-cyan">35%</span>
                    <div>
                        <strong>Originating Research Centre R&amp;D Fund</strong>
                        <small>Reinvested directly into laboratory reagents, equipment, and TRL scaling.</small>
                    </div>
                </div>
                <div class="tier-pill-3d color-theme-emerald">
                    <span class="tier-pct text-3d-number-emerald">25%</span>
                    <div>
                        <strong>NASTCO Central Sovereign Reserve</strong>
                        <small>Institutional infrastructure, IP legal protection, and statutory remittance.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
