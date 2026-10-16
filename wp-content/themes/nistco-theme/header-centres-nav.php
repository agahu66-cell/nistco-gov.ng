<?php
/**
 * Header Navigation Partial with Dynamic Research Centres Dropdown
 * File: header-centres-nav.php
 */
$theme_uri = get_template_directory_uri();
?>
<header class="site-header" style="position: sticky; top: 0; z-index: 9999; background: #042416; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 0.75rem 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.2);">
    <div style="max-width: 1440px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        
        <!-- Logo / Brand -->
        <div style="display: flex; align-items: center; gap: 1rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #ffffff; text-decoration: none; font-weight: 800; font-size: 1.15rem; display: flex; align-items: center; gap: 0.5rem;">
                <span style="font-size: 1.5rem;">🏛️</span>
                <span>NISTCO <span style="color: #34d399; font-size: 0.75rem; display: block; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Innovation &amp; Science</span></span>
            </a>
        </div>

        <!-- Main Navigation Links -->
        <nav style="display: flex; align-items: center; gap: 1.5rem; font-size: 0.95rem; font-weight: 600;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #ffffff; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#34d399'" onmouseout="this.style.color='#ffffff'">Home</a>
            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" style="color: #ffffff; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#34d399'" onmouseout="this.style.color='#ffffff'">About Us</a>
            
            <!-- Research Centres Dropdown -->
            <div class="nav-dropdown-wrapper" style="position: relative; display: inline-block;">
                <a href="<?php echo esc_url( home_url( '/about-us/#centres-section' ) ); ?>" style="color: #34d399; text-decoration: none; display: inline-flex; align-items: center; gap: 0.3rem; padding: 0.5rem 0;">
                    <span>Research Centres</span>
                    <span style="font-size: 0.75rem;">▼</span>
                </a>
                
                <div class="nav-dropdown-menu" style="position: absolute; top: 100%; left: 0; background: #021a10; border: 1px solid rgba(52,211,153,0.3); border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.5); padding: 0.75rem 0; min-width: 280px; display: none; z-index: 10000;">
                    <div style="padding: 0.5rem 1.25rem; font-size: 0.7rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #38bdf8; border-bottom: 1px solid rgba(255,255,255,0.08); margin-bottom: 0.35rem;">Apex Laboratories</div>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/amsarc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        ⚡ AMSARC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Applied Math &amp; Simulation</span>
                    </a>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/barc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        🧬 BARC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Biotechnology Advanced Research</span>
                    </a>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/carc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        ⚗️ CARC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Chemistry Advanced Research</span>
                    </a>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/parc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        ⚛️ PARC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Physics &amp; Advanced Materials</span>
                    </a>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/ntc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        ☢️ NTC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Nuclear Technology Centre</span>
                    </a>
                    
                    <a href="<?php echo esc_url( home_url( '/research-centres/aepc/' ) ); ?>" style="display: block; padding: 0.5rem 1.25rem; color: #ffffff; text-decoration: none; font-size: 0.88rem; transition: background 0.15s;" onmouseover="this.style.background='rgba(52,211,153,0.15)'" onmouseout="this.style.background='transparent'">
                        🔧 AEPC <span style="display: block; font-size: 0.72rem; color: #94a3b8;">Advanced Engineering &amp; Prototype</span>
                    </a>
                </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" style="color: #ffffff; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#34d399'" onmouseout="this.style.color='#ffffff'">News &amp; Media</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" style="color: #ffffff; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#34d399'" onmouseout="this.style.color='#ffffff'">Procurement</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" class="mc-btn mc-btn-primary" style="background: #008751; color: #ffffff; padding: 0.5rem 1.2rem; border-radius: 6px; text-decoration: none; font-size: 0.88rem;">📊 Dashboard</a>
        </nav>
    </div>
</header>

<script>
/* Simple CSS hover dropdown trigger */
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.nav-dropdown-wrapper');
    const menu = document.querySelector('.nav-dropdown-menu');
    if (dropdown && menu) {
        dropdown.addEventListener('mouseenter', () => { menu.style.display = 'block'; });
        dropdown.addEventListener('mouseleave', () => { menu.style.display = 'none'; });
    }
});
</script>
