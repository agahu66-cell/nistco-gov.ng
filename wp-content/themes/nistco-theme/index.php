<?php
/**
 * NASTCO Operations Command Dashboard (Front Page)
 */
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/home.css' ); ?>">

<style>
/* ==========================================================================
   RESEARCH CENTRES ANCHOR TARGET MATRIX & ACTION BUTTONS
   ========================================================================== */
.directorates-container { max-width: 1400px; margin: 0 auto; padding: 0 2rem 6rem 2rem; }
.section-tag { font-family: 'Courier New', monospace; font-size: 0.8rem; color: #00d285; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 0.5rem; display: inline-block; }
.section-heading { font-size: 2.2rem; font-weight: 900; color: #ffffff; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 3rem; border-bottom: 1px solid rgba(0, 210, 133, 0.2); padding-bottom: 1rem; }
.directorates-grid { display: flex; flex-direction: column; gap: 2rem; }

.directorate-target-node {
    scroll-margin-top: 90px;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.7) 0%, rgba(2, 6, 23, 0.85) 100%);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-left: 3px solid #00d285;
    border-radius: 8px;
    padding: 2.2rem;
    backdrop-filter: blur(15px);
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}
.directorate-target-node:target, .directorate-target-node.highlight-node {
    border-color: #38bdf8; border-left-color: #38bdf8; box-shadow: 0 0 25px rgba(56, 189, 248, 0.25), inset 0 0 15px rgba(56, 189, 248, 0.05);
}
.dir-node-header { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255, 255, 255, 0.06); padding-bottom: 1rem; margin-bottom: 1.2rem; }
.dir-title-wrap { display: flex; align-items: center; gap: 1rem; }
.dir-icon-badge { font-size: 1.8rem; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); padding: 0.5rem; border-radius: 6px; }
.dir-abbr { font-size: 1.3rem; font-weight: 800; color: #ffffff; letter-spacing: 1.5px; }
.dir-status-tag { font-family: 'Courier New', monospace; font-size: 0.75rem; color: #00d285; background: rgba(0, 210, 133, 0.08); border: 1px solid rgba(0, 210, 133, 0.3); padding: 0.25rem 0.6rem; border-radius: 4px; }
.dir-full-name { color: #38bdf8; font-size: 0.95rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 0.8rem; }
.dir-mandate-text { color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0 0 1.5rem 0; }

.dir-action-strip { display: flex; align-items: center; flex-wrap: wrap; gap: 1rem; padding-top: 1.2rem; border-top: 1px solid rgba(255, 255, 255, 0.04); }
.dir-btn-download { display: inline-flex; align-items: center; gap: 0.6rem; background: rgba(0, 210, 133, 0.1); border: 1px solid rgba(0, 210, 133, 0.4); color: #00d285; padding: 0.65rem 1.2rem; font-family: 'Courier New', monospace; font-size: 0.8rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; text-decoration: none; border-radius: 4px; transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1); }
.dir-btn-download:hover { background: #00d285; color: #020617; box-shadow: 0 0 15px rgba(0, 210, 133, 0.4); transform: translateY(-2px); }
.dir-btn-archive { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.1); color: #94a3b8; padding: 0.65rem 1.2rem; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; }
.dir-btn-archive:hover { color: #ffffff; border-color: #38bdf8; background: rgba(56, 189, 248, 0.08); transform: translateY(-2px); }
</style>

<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px; overflow: hidden;">

    <section class="ops-hero">
        <h1 class="ops-title">Operations Command</h1>
        <div class="ops-subtitle">NATIONAL SCIENCE AND TECHNOLOGY COMPLEX</div>
    </section>

    <section class="ops-dashboard-grid">
        
        <div class="ops-panel">
            <div class="panel-header">
                <span class="panel-icon">⎈</span>
                <h2 class="panel-title">Directorate Matrix</h2>
            </div>
            <ul class="dir-matrix">
                <li><a href="#amsarc">Applied Math & Simulation <span class="code">AMSARC</span></a></li>
                <li><a href="#barc">Biological Advanced Research <span class="code">BARC</span></a></li>
                <li><a href="#carc">Chemistry Advanced Research <span class="code">CARC</span></a></li>
                <li><a href="#parc">Physics Advanced Research <span class="code">PARC</span></a></li>
                <li><a href="#aepc">Advanced Engineering <span class="code">AEPC</span></a></li>
                <li><a href="#ntc">Nuclear Technology Centre <span class="code">NTC</span></a></li>
            </ul>
        </div>

        <div class="ops-panel">
            <div class="panel-header">
                <span class="panel-icon">⚡</span>
                <h2 class="panel-title">Active Telemetry</h2>
            </div>
            <div class="terminal-feed">
                <?php
                $telemetry_query = new WP_Query( array( 'post_type' => 'nastco_resource', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' ) );
                $delay = 0.2;
                if ( $telemetry_query->have_posts() ) :
                    while ( $telemetry_query->have_posts() ) : $telemetry_query->the_post();
                        $time_stamp = get_the_time('H:i:s');
                        $title      = wp_trim_words( get_the_title(), 4, '...' );
                        ?>
                        <div class="terminal-line" style="animation-delay: <?php echo esc_attr( $delay ); ?>s;">
                            <span class="timestamp">[<?php echo esc_html( $time_stamp ); ?>]</span> DATA_SYNC: <?php echo esc_html( strtoupper( $title ) ); ?>
                        </div>
                        <?php $delay += 0.3;
                    endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="terminal-line" style="animation-delay: 0.2s;"><span class="timestamp">[<?php echo date('H:i:s'); ?>]</span> NO_ASSETS_FOUND</div>
                <?php endif; ?>
                <div class="terminal-line" style="animation-delay: <?php echo esc_attr( $delay + 0.3 ); ?>s; margin-top: 0.5rem;">
                    <span class="timestamp">[<?php echo date('H:i:s'); ?>]</span> AWAITING OPERATIVE INPUT_
                </div>
            </div>
        </div>

        <div class="ops-panel">
            <div class="panel-header"><span class="panel-icon">🗄️</span><h2 class="panel-title">Strategic Resources</h2></div>
            <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; flex-grow: 1;">Access classified publications, structural datasets, and standard operating protocols across all active research sectors.</p>
            <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="panel-action">Access Database</a>
        </div>

        <div class="ops-panel">
            <div class="panel-header"><span class="panel-icon">📡</span><h2 class="panel-title">Secure Comms</h2></div>
            <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; flex-grow: 1;">Establish an encrypted line to the central command desk. Payloads are strictly monitored and validated prior to transmission.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="panel-action">Initiate Link</a>
        </div>

    </section>

    <!-- 3. RESEARCH CENTRES ANCHOR DESTINATIONS WITH DYNAMIC RESOURCE HOOKS -->
    <section class="directorates-container" id="directorates">
        <span class="section-tag">[NODE_SECTORS_06]</span>
        <h2 class="section-heading">Operational Research Directorates</h2>

        <div class="directorates-grid">
            
            <?php
            $directorates = array(
                'amsarc' => array( 'abbr' => 'AMSARC', 'icon' => '🖥️', 'name' => 'Applied Mathematics and Simulation Advanced Research Centre', 'status' => 'OPERATIONAL', 'desc' => 'Core high-performance computing, mathematical modeling, high-throughput cryptographic verification, and complex algorithmic simulation protocols.' ),
                'barc'   => array( 'abbr' => 'BARC', 'icon' => '🧬', 'name' => 'Biological Advanced Research Centre', 'status' => 'OPERATIONAL', 'desc' => 'Genomic sequencing, synthetic biology, agricultural biotechnology, and sovereign bio-security protocols.' ),
                'carc'   => array( 'abbr' => 'CARC', 'icon' => '🧪', 'name' => 'Chemistry Advanced Research Centre', 'status' => 'OPERATIONAL', 'desc' => 'Synthesis of advanced polymers, catalyst optimization, electrochemical analysis, and strategic material lifecycle security.' ),
                'parc'   => array( 'abbr' => 'PARC', 'icon' => '⚛️', 'name' => 'Physics Advanced Research Centre', 'status' => 'OPERATIONAL', 'desc' => 'Quantum phenomena, applied laser telemetry, condensed matter physics, and energy capture technologies.' ),
                'aepc'   => array( 'abbr' => 'AEPC', 'icon' => '⚙️', 'name' => 'Advanced Engineering & Production Centre', 'status' => 'OPERATIONAL', 'desc' => 'Precision prototyping, computer-aided automated manufacturing, micro-mechanics, and sovereign hardware fabrication.' ),
                'ntc'    => array( 'abbr' => 'NTC', 'icon' => '☢️', 'name' => 'Nuclear Technology Centre', 'status' => 'ACTIVE_MONITORING', 'desc' => 'Isotope development for industrial and medical applications, sovereign radiological safety standards, and instrumentation monitoring.' ),
            );

            foreach ( $directorates as $slug => $data ) :
                $latest_res = new WP_Query( array(
                    'post_type' => 'nastco_resource', 'posts_per_page' => 1,
                    'tax_query' => array( array( 'taxonomy' => 'directorate', 'field' => 'slug', 'terms' => $slug ) ),
                ) );

                $download_url = ''; $res_title = '';
                if ( $latest_res->have_posts() ) {
                    $latest_res->the_post();
                    $res_title    = get_the_title();
                    $custom_url   = get_post_meta( get_the_ID(), '_nastco_download_url', true );
                    $download_url = $custom_url ? $custom_url : get_permalink();
                    wp_reset_postdata();
                }

                $archive_url = add_query_arg( 'directorate', $slug, home_url( '/resources/' ) );
                ?>
                <article class="directorate-target-node" id="<?php echo esc_attr( $slug ); ?>">
                    <div class="dir-node-header">
                        <div class="dir-title-wrap">
                            <div class="dir-icon-badge"><?php echo esc_html( $data['icon'] ); ?></div>
                            <span class="dir-abbr"><?php echo esc_html( $data['abbr'] ); ?></span>
                        </div>
                        <span class="dir-status-tag">STATUS: <?php echo esc_html( $data['status'] ); ?></span>
                    </div>
                    <div class="dir-full-name"><?php echo esc_html( $data['name'] ); ?></div>
                    <p class="dir-mandate-text"><?php echo esc_html( $data['desc'] ); ?></p>

                    <div class="dir-action-strip">
                        <?php if ( $download_url ) : ?>
                            <a href="<?php echo esc_url( $download_url ); ?>" class="dir-btn-download" title="<?php echo esc_attr( $res_title ); ?>">
                                <span>📥</span> Download Latest (<?php echo esc_html( wp_trim_words( $res_title, 3, '...' ) ); ?>)
                            </a>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( $archive_url ); ?>" class="dir-btn-archive">
                            <span>📂</span> Browse <?php echo esc_html( $data['abbr'] ); ?> Repositories →
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
