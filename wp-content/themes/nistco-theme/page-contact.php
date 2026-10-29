<?php
/**
 * Template Name: Secure Comms Terminal
 * Template Post Type: page
 */
get_header(); ?>

<style>
/* ==========================================================================
   SECURE COMMS TERMINAL (3D COLORFUL EDITION - REFINED SHADOWS)
   ========================================================================== */
.comms-container { 
    max-width: 1100px; 
    margin: 0 auto; 
    padding: 4rem 2rem 8rem 2rem; 
    min-height: 75vh; 
    perspective: 1500px; 
}

.comms-header { 
    margin-bottom: 4rem; 
    border-bottom: 2px solid rgba(56, 189, 248, 0.3); 
    padding-bottom: 2rem; 
    text-align: center;
}

.contact-main-logo {
    max-width: 180px;
    margin-bottom: 1.5rem;
    filter: drop-shadow(0 10px 15px rgba(0, 210, 133, 0.3)); /* Softened Shadow */
    transform: translateZ(20px);
    transition: transform 0.4s ease, filter 0.4s ease;
}
.contact-main-logo:hover { 
    transform: translateZ(40px) scale(1.05); 
    filter: drop-shadow(0 15px 25px rgba(0, 210, 133, 0.4));
}

.telemetry-tag { 
    font-family: 'Courier New', monospace; 
    font-size: 0.9rem; 
    font-weight: 900;
    letter-spacing: 2px; 
    display: block; 
    margin-bottom: 1rem;
    background: linear-gradient(90deg, #f43f5e, #f59e0b, #00d285);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5); /* Softened Shadow */
}

.comms-title { 
    font-size: 3.5rem; 
    font-weight: 900; 
    letter-spacing: 2px; 
    text-transform: uppercase; 
    margin: 0 0 1rem 0;
    background: linear-gradient(to right, #00d285, #38bdf8, #8b5cf6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 0px rgba(0,0,0,0.8), 4px 4px 10px rgba(56,189,248,0.3); /* Softened */
}

.comms-subtitle { 
    color: #cbd5e1; 
    font-size: 1.1rem; 
    max-width: 750px; 
    line-height: 1.7; 
    margin: 0 auto; 
    text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
}

.comms-matrix { display: grid; grid-template-columns: 1fr 1.5fr; gap: 3.5rem; }

/* Base 3D Colorful Card (Used for Right Form Panel) */
.tactical-3d-card {
    background: linear-gradient(135deg, rgba(30, 41, 59, 0.85) 0%, rgba(15, 23, 42, 0.95) 100%);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-top: 4px solid #38bdf8;
    border-bottom: 4px solid #8b5cf6;
    border-radius: 16px;
    /* Reduced Box Shadow */
    box-shadow: 
        0 10px 20px rgba(0,0,0,0.4), 
        inset 0 1px 10px rgba(255,255,255,0.05), 
        inset 0 -1px 10px rgba(139, 92, 246, 0.15);
    backdrop-filter: blur(20px);
    transform: rotateX(2deg) rotateY(-2deg) translateZ(0);
    transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.5s ease;
}

.tactical-3d-card:hover {
    transform: rotateX(0deg) rotateY(0deg) translateY(-8px) translateZ(15px);
    box-shadow: 
        0 15px 30px rgba(0,0,0,0.5), 
        inset 0 2px 15px rgba(255,255,255,0.1), 
        inset 0 -2px 15px rgba(139, 92, 246, 0.25);
}

/* === PRESTIGE UPLINK CARD (Left Panel) === */
.tactical-3d-card.status-panel {
    background: linear-gradient(135deg, rgba(40, 30, 10, 0.85) 0%, rgba(15, 10, 2, 0.95) 100%);
    border: 1px solid rgba(191, 149, 63, 0.3);
    border-top: 4px solid #bf953f; 
    border-bottom: 4px solid #aa771c; 
    /* Reduced Prestige Box Shadow */
    box-shadow: 
        0 10px 25px rgba(0,0,0,0.5), 
        inset 0 1px 10px rgba(252, 246, 186, 0.1), 
        inset 0 -1px 10px rgba(191, 149, 63, 0.15);
    padding: 2.5rem; 
    height: fit-content; 
    font-family: 'Courier New', monospace; 
    display: flex; 
    flex-direction: column; 
    gap: 2rem; 
}
.tactical-3d-card.status-panel:hover {
    box-shadow: 
        0 15px 35px rgba(0,0,0,0.6), 
        0 0 20px rgba(191, 149, 63, 0.15),
        inset 0 2px 15px rgba(252, 246, 186, 0.15), 
        inset 0 -2px 15px rgba(191, 149, 63, 0.25);
}

/* Prestige Typography & Pulse */
.status-indicator { 
    display: flex; 
    align-items: center; 
    gap: 1rem; 
    font-size: 1.2rem;
    font-weight: 900; 
    letter-spacing: 2px; 
    background: linear-gradient(90deg, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0px 2px 5px rgba(191, 149, 63, 0.3); /* Softened */
    animation: gold-shimmer 4s linear infinite;
}
@keyframes gold-shimmer { to { background-position: 200% center; } }

.pulse-ring { 
    width: 14px; 
    height: 14px; 
    border-radius: 50%; 
    background: #fcf6ba; 
    box-shadow: 0 0 15px #bf953f; 
    animation: pulse-prestige 2s infinite; 
}
@keyframes pulse-prestige { 
    0% { box-shadow: 0 0 0 0 rgba(191, 149, 63, 0.6); } 
    70% { box-shadow: 0 0 0 10px rgba(191, 149, 63, 0); } 
    100% { box-shadow: 0 0 0 0 rgba(191, 149, 63, 0); } 
}

.log-feed { 
    font-size: 0.85rem; 
    color: #cbd5e1; 
    line-height: 2; 
    background: rgba(0,0,0,0.3); /* Lighter background */
    padding: 1rem; 
    border-radius: 8px; 
    border-left: 3px solid #bf953f; 
    box-shadow: inset 0 3px 10px rgba(0,0,0,0.3); /* Softened */
}
.log-line span { color: #fcf6ba; margin-right: 0.5rem; font-weight: bold; } 
.log-line.warn span { color: #f59e0b; }

/* Sub Logo matches Gold/Prestige theme */
.contact-sub-logo { 
    width: 100%; 
    border-radius: 12px; 
    filter: drop-shadow(0 10px 15px rgba(191, 149, 63, 0.3)); /* Softened Shadow */
    transform: translateZ(10px); 
    transition: filter 0.3s ease; 
}
.contact-sub-logo:hover { filter: drop-shadow(0 15px 25px rgba(191, 149, 63, 0.5)); }

.tactical-form-box { padding: 3.5rem 3rem; }
.input-group { margin-bottom: 2.2rem; position: relative; }
.input-label { display: block; font-family: 'Courier New', monospace; font-size: 0.9rem; color: #38bdf8; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.6); }
.input-label span { color: #f43f5e; }

.tactical-input { width: 100%; background: rgba(2, 6, 23, 0.6); border: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 2px solid #38bdf8; border-radius: 8px; color: #ffffff; font-family: 'Inter', sans-serif; font-size: 1.1rem; padding: 1rem 1.2rem; box-sizing: border-box; box-shadow: inset 0 3px 8px rgba(0,0,0,0.3), 0 3px 8px rgba(0,0,0,0.2); transition: all 0.3s ease; }
.tactical-input:focus { border-color: #00d285; border-bottom-color: #00d285; box-shadow: inset 0 3px 8px rgba(0,0,0,0.3), 0 5px 15px rgba(0, 210, 133, 0.3); outline: none; background: rgba(2, 6, 23, 0.8); transform: translateZ(10px); }
textarea.tactical-input { min-height: 160px; resize: vertical; }

.tactical-input.is-invalid { border-color: #f43f5e; border-bottom-color: #f43f5e; box-shadow: inset 0 3px 8px rgba(0,0,0,0.3), 0 5px 15px rgba(244, 63, 94, 0.3); }
.validation-msg { display: none; font-family: 'Courier New', monospace; font-size: 0.85rem; color: #f43f5e; margin-top: 0.8rem; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.6); }
.input-group.error .validation-msg { display: block; }

.submit-btn { width: 100%; background: linear-gradient(90deg, #00d285, #38bdf8); border: none; color: #020617; font-family: 'Inter', sans-serif; font-size: 1.2rem; font-weight: 900; letter-spacing: 2px; text-transform: uppercase; padding: 1.2rem; border-radius: 8px; cursor: pointer; box-shadow: 0 5px 15px rgba(0, 210, 133, 0.3), inset 0 2px 5px rgba(255,255,255,0.2); transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1); margin-top: 1.5rem; transform: translateZ(10px); }
.submit-btn:hover { background: linear-gradient(90deg, #38bdf8, #8b5cf6); color: #ffffff; box-shadow: 0 10px 20px rgba(56, 189, 248, 0.4), inset 0 2px 10px rgba(255,255,255,0.3); transform: translateZ(20px) translateY(-2px); }
.submit-btn.processing { background: linear-gradient(90deg, #f59e0b, #f43f5e); color: #ffffff; cursor: not-allowed; transform: translateZ(5px); box-shadow: 0 5px 15px rgba(245, 158, 11, 0.3); }

@media (max-width: 960px) { .comms-matrix { grid-template-columns: 1fr; gap: 2rem; } .tactical-3d-card { transform: none; } .tactical-3d-card:hover { transform: translateY(-3px); } }
</style>

<main id="main-content" style="background-color: #020617; background-image: linear-gradient(rgba(0, 210, 133, 0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.04) 1px, transparent 1px); background-size: 40px 40px;">
    <div class="comms-container">
        
        <header class="comms-header">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nastco-logo.png' ); ?>" alt="NASTCO Official Brand" class="contact-main-logo" onerror="this.style.display='none'">
            <span class="telemetry-tag">SECTOR 07: SECURE UPLINK</span>
            <h1 class="comms-title">Secure Communications Node</h1>
            <p class="comms-subtitle">Establish a direct, encrypted pipeline to NASTCO command. All payloads are sanitized, validated, and logged prior to dispatch.</p>
        </header>

        <div class="comms-matrix">
            
            <aside class="tactical-3d-card status-panel">
                <div class="status-indicator">
                    <div class="pulse-ring"></div>
                    <span>UPLINK STABLE</span>
                </div>
                
                <div class="log-feed" id="liveTerminalLog">
                    <div class="log-line"><span><?php echo date('H:i:s'); ?></span> INITIALIZING HANDSHAKE</div>
                    <div class="log-line"><span><?php echo date('H:i:s', strtotime('+1 second')); ?></span> ENCRYPTION KEYS VERIFIED</div>
                    <div class="log-line"><span><?php echo date('H:i:s', strtotime('+2 seconds')); ?></span> AWAITING OPERATIVE PAYLOAD</div>
                </div>

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nastco1-logo.png' ); ?>" alt="NASTCO Secondary Brand" class="contact-sub-logo" onerror="this.style.display='none'">
            </aside>

            <div class="tactical-3d-card tactical-form-box">
                <form id="nastcoSecureForm" novalidate>
                    
                    <div class="input-group" id="group-callsign">
                        <label class="input-label" for="callsign">Operative Callsign / Name <span>*</span></label>
                        <input type="text" id="callsign" class="tactical-input" placeholder="e.g. Dr. A. Ibrahim" required>
                        <div class="validation-msg">ERROR: Callsign must exceed 2 characters.</div>
                    </div>

                    <div class="input-group" id="group-clearance">
                        <label class="input-label" for="clearance">Clearance Code / Email <span>*</span></label>
                        <input type="email" id="clearance" class="tactical-input" placeholder="operative@nastco.gov.ng" required>
                        <div class="validation-msg">ERROR: Invalid email clearance format.</div>
                    </div>

                    <div class="input-group" id="group-routing">
                        <label class="input-label" for="routing">Destination Routing Node <span>*</span></label>
                        <select id="routing" class="tactical-input" required>
                            <option value="" disabled selected>SELECT DIRECTORATE</option>
                            <option value="CMD">Central Command HQ</option>
                            <option value="AMSARC">AMSARC - Applied Math</option>
                            <option value="BARC">BARC - Bio Research</option>
                            <option value="CARC">CARC - Chemistry</option>
                            <option value="PARC">PARC - Physics</option>
                            <option value="AEPC">AEPC - Advanced Engineering</option>
                            <option value="NTC">NTC - Nuclear Tech</option>
                        </select>
                        <div class="validation-msg">ERROR: Destination node must be specified.</div>
                    </div>

                    <div class="input-group" id="group-payload">
                        <label class="input-label" for="payload">Encrypted Payload / Message <span>*</span></label>
                        <textarea id="payload" class="tactical-input" placeholder="Enter transmission data..." required></textarea>
                        <div class="validation-msg">ERROR: Payload must contain at least 15 characters.</div>
                    </div>

                    <button type="submit" id="submitBtn" class="submit-btn">INITIATE TRANSMISSION</button>
                </form>
            </div>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('nastcoSecureForm');
    const terminalLog = document.getElementById('liveTerminalLog');
    
    function appendLog(message, isWarn = false) {
        const time = new Date().toLocaleTimeString('en-US', { hour12: false });
        const div = document.createElement('div');
        div.className = 'log-line' + (isWarn ? ' warn' : '');
        div.innerHTML = `<span>${time}</span> ${message}`;
        terminalLog.appendChild(div);
        terminalLog.scrollTop = terminalLog.scrollHeight;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault(); 
        
        let isValid = true;
        const callsign = document.getElementById('callsign');
        const clearance = document.getElementById('clearance');
        const routing = document.getElementById('routing');
        const payload = document.getElementById('payload');
        const btn = document.getElementById('submitBtn');

        document.querySelectorAll('.input-group').forEach(el => el.classList.remove('error'));
        document.querySelectorAll('.tactical-input').forEach(el => el.classList.remove('is-invalid'));

        if (callsign.value.trim().length < 3) {
            document.getElementById('group-callsign').classList.add('error');
            callsign.classList.add('is-invalid');
            isValid = false;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(clearance.value.trim())) {
            document.getElementById('group-clearance').classList.add('error');
            clearance.classList.add('is-invalid');
            isValid = false;
        }

        if (routing.value === "") {
            document.getElementById('group-routing').classList.add('error');
            routing.classList.add('is-invalid');
            isValid = false;
        }

        if (payload.value.trim().length < 15) {
            document.getElementById('group-payload').classList.add('error');
            payload.classList.add('is-invalid');
            isValid = false;
        }

        if (!isValid) {
            appendLog('PAYLOAD REJECTED: VALIDATION FAILURE', true);
            return;
        }

        appendLog('VALIDATION CLEARED. ENCRYPTING PAYLOAD...');
        btn.classList.add('processing');
        btn.textContent = 'ENCRYPTING...';
        btn.disabled = true;

                const formData = new FormData();
        formData.append('action', 'nastco_send_secure_sms');
        formData.append('callsign', callsign.value.trim());
        formData.append('routing', routing.value);
        formData.append('payload', payload.value.trim());

        fetch('/wp-admin/admin-ajax.php', { method: 'POST', body: formData })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                appendLog('TRANSMISSION SUCCESS: ' + data.data.message);
                btn.textContent = 'TRANSMISSION COMPLETE';
                btn.classList.remove('processing');
                btn.style.background = 'linear-gradient(90deg, #00d285, #059669)';
                btn.style.color = '#ffffff';
                form.reset();
            } else {
                appendLog('TRANSMISSION FAILED: ' + data.data.message, true);
                btn.textContent = 'RETRY TRANSMISSION';
                btn.classList.remove('processing');
                btn.disabled = false;
            }
        })
        .catch(err => {
            appendLog('CRITICAL ERROR: SERVER UPLINK SEVERED', true);
            btn.textContent = 'RETRY TRANSMISSION';
            btn.classList.remove('processing');
            btn.disabled = false;
        });
    });
});
</script>

<?php get_footer(); ?>
