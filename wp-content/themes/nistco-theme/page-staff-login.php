<?php
/**
 * Template Name: Staff Intranet & ERP Single Sign-On
 * Description: Secure multi-factor authentication portal for NISTCO research fellows, technical officers, and administrative personnel.
 * File: page-staff-login.php
 *
 * @package NistcoTheme
 * @version 2.5.0
 */

// If already authenticated, redirect directly to WordPress Dashboard / Staff Portal
if ( is_user_logged_in() ) {
    wp_safe_redirect( admin_url() );
    exit;
}

get_header();

$theme_uri    = get_template_directory_uri();
$login_failed = isset( $_GET['login'] ) && 'failed' === $_GET['login'];
$logged_out   = isset( $_GET['loggedout'] ) && 'true' === $_GET['loggedout'];
?>

<main class="site-main nistco-main">

    <!-- =========================================================================
         AUTHENTICATION GATEWAY: 3D CYBER SHIELD & BIOMETRIC SCANNER
         ========================================================================= -->
    <section class="nistco-hero-section"
        style="min-height: 85vh; display: flex; align-items: center; padding: clamp(3.5rem, 6vw, 5.5rem) 0;">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        <div class="nistco-hero-pattern"></div>

        <div class="nistco-container">
            <div class="nistco-hero-grid" style="align-items: center;">

                <!-- Left Column: Single Sign-On Authentication Form -->
                <div class="mc-form-card reveal-on-scroll" style="max-width: 480px; margin: 0 auto; width: 100%;">

                    <div style="text-align: center; margin-bottom: 1.75rem;">
                        <span class="nistco-pill nistco-pill-green"
                            style="margin-bottom: 0.65rem; display: inline-block;">
                            Authorized Personnel Only
                        </span>
                        <h1
                            style="color: var(--mc-dark); font-size: clamp(1.4rem, 2.5vw, 1.75rem); font-weight: 800; margin: 0 0 0.4rem 0; letter-spacing: -0.3px;">
                            Staff Single Sign-On
                        </h1>
                        <p style="font-size: 0.85rem; color: var(--mc-text-muted); margin: 0; line-height: 1.5;">
                            Enterprise ERP, High-Performance Compute (HPC) &amp; Internal Network Access
                        </p>
                    </div>

                    <?php if ( $login_failed ) : ?>
                    <div class="inno-form-feedback error" style="margin-bottom: 1.35rem; display: block;">
                        ⚠️ Invalid Staff ID or Password. Please verify your credentials or contact ICT support.
                    </div>
                    <?php endif; ?>

                    <?php if ( $logged_out ) : ?>
                    <div class="inno-form-feedback success" style="margin-bottom: 1.35rem; display: block;">
                        ✓ You have been securely logged out of the NISTCO Enterprise Portal.
                    </div>
                    <?php endif; ?>

                    <form name="loginform" id="loginform"
                        action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">

                        <div class="mc-input-group" style="margin-bottom: 1.15rem;">
                            <label for="user_login">Official Staff ID / Corporate Email</label>
                            <input type="text" name="log" id="user_login" required autocomplete="username"
                                placeholder="staff.id@nistco.gov.ng">
                        </div>

                        <div class="mc-input-group" style="margin-bottom: 1.25rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <label for="user_pass">Password</label>
                                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"
                                    style="font-size: 0.78rem; color: var(--mc-green); text-decoration: none; font-weight: 700;">
                                    Reset Password?
                                </a>
                            </div>
                            <input type="password" name="pwd" id="user_pass" required autocomplete="current-password"
                                placeholder="••••••••••••">
                        </div>

                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem;">
                            <label
                                style="display: flex; align-items: center; gap: 8px; font-size: 0.82rem; color: var(--mc-text-muted); cursor: pointer;">
                                <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember
                                session
                            </label>
                            <span style="font-size: 0.75rem; color: #64748b; font-weight: 600;">🔒 TLS 256-Bit
                                Encrypted</span>
                        </div>

                        <input type="hidden" name="redirect_to" value="<?php echo esc_url( admin_url() ); ?>">

                        <button type="submit" name="wp-submit" id="wp-submit" class="nistco-btn nistco-btn-primary"
                            style="width: 100%; justify-content: center; font-size: 0.95rem; padding: 0.85rem;">
                            <span>Authenticate Session &rarr;</span>
                        </button>
                    </form>

                    <div
                        style="border-top: 1px solid var(--mc-border); margin-top: 1.5rem; padding-top: 1.25rem; text-align: center;">
                        <span
                            style="font-size: 0.78rem; color: var(--mc-text-muted); display: block; margin-bottom: 0.35rem;">
                            Authentication Issues or Account Locked?
                        </span>
                        <a href="mailto:ict@nistco.gov.ng"
                            style="font-size: 0.82rem; color: var(--mc-green); font-weight: 700; text-decoration: none;">
                            Contact ICT Directorate &amp; Data Centre (Ext. 204)
                        </a>
                    </div>

                </div>

                <!-- Right Column: ACTIVE MOTION SVG (Biometric Shield & Security Core) -->
                <div class="nistco-3d-viewport">
                    <div class="nistco-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="authShieldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#86efac" />
                                    <stop offset="50%" stop-color="#059669" />
                                    <stop offset="100%" stop-color="#022c22" />
                                </linearGradient>
                            </defs>

                            <!-- Security Polygon Perimeter -->
                            <polygon points="160,25 280,75 280,195 160,295 40,195 40,75" fill="none"
                                stroke="url(#authShieldGrad)" stroke-width="2.5" class="svg-rot-cw-slow" />

                            <!-- Biometric Scanning Lasers -->
                            <g class="svg-scanline-beam">
                                <line x1="60" y1="160" x2="260" y2="160" stroke="#fde047" stroke-width="2.5" />
                                <rect x="70" y="155" width="180" height="10" fill="rgba(253,224,71,0.2)" />
                            </g>

                            <!-- Rotating Cyber Cryptography Ring -->
                            <circle cx="160" cy="160" r="70" fill="none" stroke="#38bdf8" stroke-width="2"
                                stroke-dasharray="12 6" class="svg-rot-ccw-mid" />

                            <!-- Central Security Key Core -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="26" fill="#042416" stroke="#86efac" stroke-width="3" />
                                <text x="160" y="168" text-anchor="middle" font-size="20" fill="#86efac">🔐</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();