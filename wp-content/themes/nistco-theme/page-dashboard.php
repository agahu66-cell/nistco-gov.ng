<?php
/**
 * Template Name: NISTCO Cadre Dashboard
 * Description: Role-based institutional dashboard for NISTCO staff, researchers, procurement officers, and executives.
 */

get_header();

$current_user = wp_get_current_user();
$is_logged_in = is_user_logged_in();

// Determine user cadre based on roles or meta
$user_roles = $is_logged_in ? $current_user->roles : array();
$cadre_title = 'General Staff / Researcher';

if ( in_array( 'administrator', $user_roles ) || in_array( 'editor', $user_roles ) ) {
    $cadre_title = 'Executive Leadership & Directorate';
} elseif ( in_array( 'author', $user_roles ) || in_array( 'contributor', $user_roles ) ) {
    $cadre_title = 'Principal Researcher / Scientific Cadre';
} else {
    $cadre_title = 'Institutional Cadre Portal';
}
?>

<main id="primary" class="site-main" style="background: #f8fafc; min-height: 80vh; padding: 3rem 0;">
    <div class="nistco-container" style="max-width: 1440px; margin: 0 auto; padding: 0 2rem;">
        
        <?php if ( ! $is_logged_in ) : ?>
            <div style="max-width: 500px; margin: 4rem auto; background: #fff; border-radius: 12px; padding: 3rem; box-shadow: 0 4px 25px rgba(4,36,22,0.08); border-top: 4px solid #042416; text-align: center;">
                <div style="width: 60px; height: 60px; background: #ecfdf5; color: #042416; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin: 0 auto 1.5rem auto;">🔒</div>
                <h2 style="color: #042416; font-size: 1.75rem; margin-bottom: 0.75rem;">Cadre Portal Authentication</h2>
                <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.6; margin-bottom: 2rem;">
                    Please sign in with your official NISTCO credentials to access your designated cadre dashboard, research repository, and statutory telemetry.
                </p>
                <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" style="display: inline-block; background: #042416; color: #fff; padding: 0.85rem 2rem; border-radius: 6px; font-weight: 600; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.background='#0d5c36'" onmouseout="this.style.background='#042416'">
                    Proceed to Login &rarr;
                </a>
            </div>
        <?php else : ?>
            
            <div style="background: linear-gradient(135deg, #042416 0%, #0d5c36 100%); border-radius: 12px; padding: 2.5rem; color: #fff; margin-bottom: 3rem; box-shadow: 0 4px 20px rgba(4,36,22,0.1); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                <div>
                    <span style="background: rgba(217, 119, 6, 0.2); color: #d97706; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; border: 1px solid rgba(217,119,6,0.4);">
                        <?php echo esc_html( $cadre_title ); ?>
                    </span>
                    <h1 style="font-size: 2.25rem; margin-top: 0.5rem; margin-bottom: 0.5rem;">Welcome, <?php echo esc_html( $current_user->display_name ); ?></h1>
                    <p style="color: #d1d5db; font-size: 0.95rem; margin: 0;">
                        Nigeria Innovation Science and Technology Complex (NISTCO) • Abuja, Nigeria
                    </p>
                </div>
                <div>
                    <a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2); padding: 0.6rem 1.25rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
                        Sign Out
                    </a>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                
                <div style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.04); border-top: 4px solid #042416;">
                    <div style="font-size: 1.5rem; margin-bottom: 1rem;">🔬</div>
                    <h3 style="color: #042416; font-size: 1.25rem; margin-bottom: 0.75rem;">Research & Commercial Ventures</h3>
                    <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Manage intellectual property, patents, and commercialized research outputs across AMSARC, BARC, and CARC.
                    </p>
                    <div style="display: flex; gap: 1rem;">
                        <a href="<?php echo esc_url( admin_url('edit.php?post_type=nistco_venture') ); ?>" style="background: #042416; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600;">Manage Ventures</a>
                        <a href="<?php echo esc_url( home_url('/commercial-ventures/') ); ?>" style="background: #f3f4f6; color: #374151; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600;">View Marketplace</a>
                    </div>
                </div>

                <div style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.04); border-top: 4px solid #d97706;">
                    <div style="font-size: 1.5rem; margin-bottom: 1rem;">📋</div>
                    <h3 style="color: #042416; font-size: 1.25rem; margin-bottom: 0.75rem;">Procurement & BPP Desk</h3>
                    <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Access open bidding documentation, tender execution schedules, and Bureau of Public Procurement compliance logs.
                    </p>
                    <a href="<?php echo esc_url( home_url('/procurement/') ); ?>" style="background: #d97706; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600; display: inline-block;">View BPP Desk</a>
                </div>

                <div style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.04); border-top: 4px solid #0284c7;">
                    <div style="font-size: 1.5rem; margin-bottom: 1rem;">📊</div>
                    <h3 style="color: #042416; font-size: 1.25rem; margin-bottom: 0.75rem;">Royalty & Telemetry Feed</h3>
                    <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Inspect live JSON telemetry feeds and access Google Looker Studio reports for commercial royalty tracking.
                    </p>
                    <a href="<?php echo esc_url( rest_url('nistco/v1/telemetry?token=nistco_secure_telemetry_2026') ); ?>" target="_blank" style="background: #0284c7; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600; display: inline-block;">Inspect JSON Feed</a>
                </div>

                <div style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.04); border-top: 4px solid #10b981;">
                    <div style="font-size: 1.5rem; margin-bottom: 1rem;">🏛️</div>
                    <h3 style="color: #042416; font-size: 1.25rem; margin-bottom: 0.75rem;">SERVICOM & Compliance</h3>
                    <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Monitor public service delivery charters, customer feedback tickets, and institutional transparency guidelines.
                    </p>
                    <a href="<?php echo esc_url( home_url('/servicom/') ); ?>" style="background: #10b981; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600; display: inline-block;">SERVICOM Portal</a>
                </div>

            </div>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
