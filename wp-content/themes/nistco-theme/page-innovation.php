<?php
/**
 * Template Name: Innovation Pipeline Terminal
 * Template Post Type: page
 */
get_header(); ?>

<style>
/* ==========================================================================
   INNOVATION PIPELINE TERMINAL (INLINE CACHE-BYPASS)
   ========================================================================== */
.innovation-container { max-width: 1400px; margin: 0 auto; padding: 3rem 2rem 8rem 2rem; }
.innovation-header { margin-bottom: 4rem; border-bottom: 1px solid rgba(0, 210, 133, 0.2); padding-bottom: 2rem; text-align: center; }
.telemetry-tag { font-family: 'Courier New', monospace; font-size: 0.85rem; color: #38bdf8; letter-spacing: 2px; margin-bottom: 1rem; display: block; }
.innovation-title { font-size: 3rem; font-weight: 900; color: #ffffff; letter-spacing: 2px; text-transform: uppercase; margin: 0 0 1rem 0; }
.innovation-subtitle { color: #94a3b8; font-size: 1.05rem; max-width: 800px; line-height: 1.6; margin: 0 auto; }

/* The Glowing Circuit Track */
.pipeline-track {
    position: relative;
    max-width: 1100px;
    margin: 0 auto;
    padding: 2rem 0;
}

.pipeline-track::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(180deg, rgba(56, 189, 248, 0.1) 0%, rgba(0, 210, 133, 0.6) 50%, rgba(56, 189, 248, 0.1) 100%);
    transform: translateX(-50%);
    box-shadow: 0 0 15px rgba(0, 210, 133, 0.3);
}

.pipeline-node {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4rem;
    position: relative;
    width: 100%;
}

.pipeline-node:nth-child(even) { flex-direction: row-reverse; }

.pipeline-content {
    width: 45%;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.7) 0%, rgba(2, 6, 23, 0.9) 100%);
    border: 1px solid rgba(255, 255, 255, 0.05);
    padding: 2.5rem;
    border-radius: 8px;
    backdrop-filter: blur(15px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    position: relative;
}

.pipeline-node:nth-child(odd) .pipeline-content {
    border-right: 3px solid #38bdf8;
    text-align: right;
}

.pipeline-node:nth-child(even) .pipeline-content {
    border-left: 3px solid #00d285;
    text-align: left;
}

.pipeline-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.7), inset 0 0 20px rgba(255, 255, 255, 0.02);
}

.pipeline-node:nth-child(odd) .pipeline-content:hover { border-right-color: #00d285; }
.pipeline-node:nth-child(even) .pipeline-content:hover { border-left-color: #38bdf8; }

/* The Core Nodes */
.pipeline-marker {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #020617;
    border: 4px solid #38bdf8;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.8);
    transition: all 0.3s ease;
}

.pipeline-node:nth-child(even) .pipeline-marker {
    border-color: #00d285;
    box-shadow: 0 0 20px rgba(0, 210, 133, 0.8);
}

.pipeline-node:hover .pipeline-marker {
    transform: translateX(-50%) scale(1.3);
    background: #ffffff;
}

/* Typography inside Nodes */
.phase-tag {
    font-family: 'Courier New', monospace;
    font-size: 0.8rem;
    color: #64748b;
    letter-spacing: 2px;
    text-transform: uppercase;
    display: block;
    margin-bottom: 0.5rem;
}

.node-title {
    font-size: 1.8rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 1rem 0;
    line-height: 1.2;
}

.node-desc {
    color: #94a3b8;
    font-size: 1rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
}

.node-meta {
    display: inline-flex;
    gap: 1rem;
    font-family: 'Courier New', monospace;
    font-size: 0.75rem;
    border-top: 1px solid rgba(255,255,255,0.06);
    padding-top: 1rem;
}

.pipeline-node:nth-child(odd) .node-meta { justify-content: flex-end; }
.pipeline-node:nth-child(even) .node-meta { justify-content: flex-start; }

.meta-trl { color: #38bdf8; font-weight: 700; background: rgba(56, 189, 248, 0.1); padding: 0.2rem 0.6rem; border-radius: 4px; }
.meta-dir { color: #00d285; font-weight: 700; background: rgba(0, 210, 133, 0.1); padding: 0.2rem 0.6rem; border-radius: 4px; }

/* Mobile Adaptation */
@media (max-width: 960px) {
    .pipeline-track::before { left: 30px; }
    .pipeline-node, .pipeline-node:nth-child(even) { flex-direction: column; align-items: flex-end; }
    .pipeline-content { width: calc(100% - 70px); text-align: left !important; border-left: 3px solid #38bdf8 !important; border-right: none !important; }
    .pipeline-node:nth-child(even) .pipeline-content { border-left-color: #00d285 !important; }
    .pipeline-marker { left: 30px; }
    .node-meta { justify-content: flex-start !important; }
}
</style>

<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px;">
    <div class="innovation-container">
        
        <header class="innovation-header">
            <span class="telemetry-tag">[SECTOR_04: PIPELINE_UPLINK]</span>
            <h1 class="innovation-title">Sovereign Innovation Pipeline</h1>
            <p class="innovation-subtitle">
                Tracking the lifecycle of indigenous technological development from theoretical modeling to classified operational deployment across NASTCO directorates.
            </p>
        </header>

        <div class="pipeline-track">
            
            <!-- Node 1 -->
            <div class="pipeline-node">
                <div class="pipeline-marker"></div>
                <div class="pipeline-content">
                    <span class="phase-tag">PHASE 01 // DISCOVERY</span>
                    <h2 class="node-title">Algorithmic Simulation & Modeling</h2>
                    <p class="node-desc">Theoretical framework construction using high-performance cluster computing to model quantum states and genomic sequencing without physical resource expenditure.</p>
                    <div class="node-meta">
                        <span class="meta-trl">TRL: 1-3</span>
                        <span class="meta-dir">AMSARC / PARC</span>
                    </div>
                </div>
            </div>

            <!-- Node 2 -->
            <div class="pipeline-node">
                <div class="pipeline-marker"></div>
                <div class="pipeline-content">
                    <span class="phase-tag">PHASE 02 // SYNTHESIS</span>
                    <h2 class="node-title">Material & Bio-Chemical Prototyping</h2>
                    <p class="node-desc">Translating mathematical models into physical polymers, advanced alloys, and drought-resistant biological structures in secure laboratory environments.</p>
                    <div class="node-meta">
                        <span class="meta-trl">TRL: 4-6</span>
                        <span class="meta-dir">CARC / BARC</span>
                    </div>
                </div>
            </div>

            <!-- Node 3 -->
            <div class="pipeline-node">
                <div class="pipeline-marker"></div>
                <div class="pipeline-content">
                    <span class="phase-tag">PHASE 03 // FABRICATION</span>
                    <h2 class="node-title">Precision Hardware Engineering</h2>
                    <p class="node-desc">Computer-aided automated manufacturing and micro-mechanics applied to scale validated prototypes into field-ready hardware architectures.</p>
                    <div class="node-meta">
                        <span class="meta-trl">TRL: 7-8</span>
                        <span class="meta-dir">AEPC</span>
                    </div>
                </div>
            </div>

            <!-- Node 4 -->
            <div class="pipeline-node">
                <div class="pipeline-marker"></div>
                <div class="pipeline-content">
                    <span class="phase-tag">PHASE 04 // DEPLOYMENT</span>
                    <h2 class="node-title">Sovereign Operational Matrix</h2>
                    <p class="node-desc">Full integration of technology into the national grid, secured by radiological monitoring and continuous cryptographic verification.</p>
                    <div class="node-meta">
                        <span class="meta-trl">TRL: 9</span>
                        <span class="meta-dir">NTC / ALL_SECTORS</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
