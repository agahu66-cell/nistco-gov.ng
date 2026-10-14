<?php
/**
 * Template Name: NISTCO Central Instrumentation & Services Booking
 * Description: Analytical services and laboratory equipment reservation portal for HPC clusters, NMR spectrometers, SEM, and pilot plants.
 * File: page-instrumentation.php
 *
 * @package NistcoTheme
 * @version 1.0.0
 */

get_header();
?>

<style>
.nistco-sub-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }

/* Hero Section */
.instrument-hero {
    background: linear-gradient(135deg, #021a10 0%, #032d3c 50%, #04353a 100%);
    color: #ffffff;
    padding: 6rem 2rem 7rem 2rem;
    position: relative;
    overflow: hidden;
}
.instrument-hero-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.instrument-badge { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; background: #0ea5e9; color: #fff; letter-spacing: 1px; display: inline-block; margin-bottom: 1.25rem; box-shadow: 0 4px 14px rgba(0,0,0,0.3); }
.instrument-title { font-size: clamp(2.25rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #fff; }
.instrument-subtitle { font-size: 1.15rem; color: #cbd5e1; max-width: 750px; line-height: 1.7; margin-bottom: 2.5rem; }

/* Sections */
.instrument-section { padding: 5rem 2rem; max-width: 1440px; margin: 0 auto; }
.section-header { text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto; }
.section-kicker { color: #0ea5e9; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem; }
.section-heading { font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0; }
.section-lead { color: #64748b; font-size: 1.05rem; line-height: 1.6; }

/* Equipment Catalog Grid */
.equipment-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 2rem; }
.equipment-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.25rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #0ea5e9; transition: transform 0.2s; }
.equipment-card:hover { transform: translateY(-4px); }

/* Booking Modal & Form Wrapper */
.booking-wrapper { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 3.5rem; max-width: 800px; margin: 0 auto; box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
.form-group { margin-bottom: 1.5rem; }
.form-label { display: block; font-size: 0.9rem; font-weight: 700; color: #334155; margin-bottom: 0.5rem; }
.form-control { width: 100%; padding: 0.85rem 1rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 1rem; box-sizing: border-box; background: #f8fafc; transition: border-color 0.2s; }
.form-control:focus { outline: none; border-color: #0ea5e9; background: #ffffff; box-shadow: 0 0 0 3px rgba(14,165,233,0.15); }
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="instrument-hero">
        <div class="instrument-hero-container">
            <span class="instrument-badge">Central Analytical Laboratories</span>
            <h1 class="instrument-title">Instrumentation &amp; Analytical Services</h1>
            <p class="instrument-subtitle">State-of-the-art scientific infrastructure available for academic research residencies, industrial quality assays, and collaborative computation.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#catalog" class="nistco-btn nistco-btn-primary" style="background: #0ea5e9;">Explore Equipment Catalog &rarr;</a>
                <a href="#booking-form" class="nistco-btn nistco-btn-secondary">Book Equipment Time</a>
            </div>
        </div>
    </section>

    <!-- 1. EQUIPMENT CATALOG & RATES -->
    <section id="catalog" class="instrument-section">
        <div class="section-header">
            <span class="section-kicker">Available Infrastructure</span>
            <h2 class="section-heading">Laboratory Facilities &amp; Service Rates</h2>
            <p class="section-lead">Certified testing suites operated by expert NISTCO metrologists and analytical scientists.</p>
        </div>

        <div class="equipment-grid">
            
            <!-- Equipment 1 -->
            <div class="equipment-card">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 50px;">AMSARC HPC</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦15,000 / Node-Hr</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">256 TeraFLOPs HPC Cluster</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Parallel GPU computing nodes dedicated to complex computational fluid dynamics, smart grid AI simulations, and seismic modeling.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● 99.9% Operational</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('256 TeraFLOPs HPC Cluster')" style="font-weight: 700; color: #0ea5e9; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

            <!-- Equipment 2 -->
            <div class="equipment-card" style="border-top-color: #f59e0b;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #fef3c7; color: #92400e; padding: 0.25rem 0.75rem; border-radius: 50px;">CARC Metrology</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦25,000 / Sample</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">GC-MS &amp; NMR Spectrometers</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">High-precision molecular structure identification, purity assay, and organic compound profiling for pharmaceutical and chemical industries.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● Ready for Assay</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('GC-MS & NMR Spectrometers')" style="font-weight: 700; color: #f59e0b; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

            <!-- Equipment 3 -->
            <div class="equipment-card" style="border-top-color: #10b981;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #d1fae5; color: #065f46; padding: 0.25rem 0.75rem; border-radius: 50px;">BARC Biotech</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦45,000 / Batch</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Fermentation Pilot Plant (100L)</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Automated bioreactor vessels for submerged fermentation, bio-fertilizer scaling, and biopharmaceutical enzyme synthesis trials.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● Pilot Verified</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('Fermentation Pilot Plant (100L)')" style="font-weight: 700; color: #10b981; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

            <!-- Equipment 4 -->
            <div class="equipment-card" style="border-top-color: #8b5cf6;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #ede9fe; color: #5b21b6; padding: 0.25rem 0.75rem; border-radius: 50px;">PARC Nanotech</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦30,000 / Scan</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Scanning Electron Microscope (SEM)</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">High-resolution surface topography, microstructural imaging, and elemental microanalysis for materials science research.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● Operational</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('Scanning Electron Microscope (SEM)')" style="font-weight: 700; color: #8b5cf6; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

            <!-- Equipment 5 -->
            <div class="equipment-card" style="border-top-color: #06b6d4;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #cffafe; color: #155e75; padding: 0.25rem 0.75rem; border-radius: 50px;">ATP Prototyping</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦20,000 / Hr</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">5-Axis CNC &amp; SLM Metal 3D Printer</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Sub-micron precision milling and direct metal laser sintering (DMLS) for complex metallic components and aerospace tooling.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● Ready for Machining</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('5-Axis CNC & SLM Metal 3D Printer')" style="font-weight: 700; color: #06b6d4; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

            <!-- Equipment 6 -->
            <div class="equipment-card" style="border-top-color: #e11d48;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #ffe4e6; color: #9f1239; padding: 0.25rem 0.75rem; border-radius: 50px;">NTC Dosimetry</span>
                        <span style="font-size: 0.85rem; font-weight: 800; color: #0f172a;">₦18,000 / Badge</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">HPGe Gamma Spectrometer &amp; SSDL</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Ultra-sensitive environmental radionuclide assay, radiation survey meter calibration, and thermoluminescent dosimeter (TLD) testing.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #059669; font-weight: 700; font-size: 0.85rem;">● IAEA Certified</span>
                    <a href="javascript:void(0)" onclick="selectEquipment('HPGe Gamma Spectrometer & SSDL')" style="font-weight: 700; color: #e11d48; text-decoration: none; font-size: 0.9rem;">Book Slot &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. INTERACTIVE BOOKING REQUISITION FORM -->
    <section id="booking-form" class="instrument-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div class="booking-wrapper">
            <div style="text-align: center; margin-bottom: 2.5rem;">
                <span style="color: #0ea5e9; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">Requisition Desk</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;">Book Analytical Equipment Time</h2>
                <p style="color: #64748b; font-size: 0.95rem;">Submit your sample analysis or HPC compute job details to receive an official reservation token.</p>
            </div>

            <form id="bookingForm" onsubmit="submitBooking(event)">
                <div class="form-group">
                    <label class="form-label">Select Equipment / Facility *</label>
                    <select id="bookEquipment" required class="form-control">
                        <option value="">-- Choose Laboratory Facility --</option>
                        <option value="256 TeraFLOPs HPC Cluster">256 TeraFLOPs HPC Cluster (AMSARC)</option>
                        <option value="GC-MS & NMR Spectrometers">GC-MS &amp; NMR Spectrometers (CARC)</option>
                        <option value="Fermentation Pilot Plant (100L)">Fermentation Pilot Plant (100L) (BARC)</option>
                        <option value="Scanning Electron Microscope (SEM)">Scanning Electron Microscope (SEM) (PARC)</option>
                        <option value="5-Axis CNC & SLM Metal 3D Printer">5-Axis CNC &amp; SLM Metal 3D Printer (ATP)</option>
                        <option value="HPGe Gamma Spectrometer & SSDL">HPGe Gamma Spectrometer &amp; SSDL (NTC)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Full Name *</label>
                    <input type="text" id="bookName" required class="form-control" placeholder="Dr. / Prof. / Engr. Full Name">
                </div>
                <div class="form-group">
                    <label class="form-label">Official Email Address *</label>
                    <input type="email" id="bookEmail" required class="form-control" placeholder="researcher@institution.edu.ng">
                </div>
                <div class="form-group">
                    <label class="form-label">University / Company / Institution *</label>
                    <input type="text" id="bookInstitution" required class="form-control" placeholder="e.g. University of Abuja / Corporate R&D">
                </div>
                <div class="form-group">
                    <label class="form-label">Proposed Reservation Date *</label>
                    <input type="date" id="bookDate" required class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Sample Parameters / Compute Job Specifications *</label>
                    <textarea id="bookDetails" required rows="4" class="form-control" placeholder="Provide chemical matrix, sample state, hazard classification, or HPC job runtime requirements..."></textarea>
                </div>
                <button type="submit" id="bookSubmitBtn" class="nistco-btn nistco-btn-primary" style="width: 100%; justify-content: center; background: #0ea5e9; border: none; cursor: pointer; padding: 1rem; color: #fff;">Submit Reservation Requisition &rarr;</button>
            </form>

            <div id="bookingResultBox" style="display:none; margin-top: 2rem; padding: 1.5rem; border-radius: 8px; text-align: center;"></div>
        </div>
    </section>

</main>

<script>
function selectEquipment(eqName) {
    const selectElem = document.getElementById('bookEquipment');
    for (let i = 0; i < selectElem.options.length; i++) {
        if (selectElem.options[i].value === eqName) {
            selectElem.selectedIndex = i;
            break;
        }
    }
    window.location.hash = '#booking-form';
}

function submitBooking(e) {
    e.preventDefault();
    const btn = document.getElementById('bookSubmitBtn');
    const resultBox = document.getElementById('bookingResultBox');

    btn.disabled = true;
    btn.textContent = 'Transmitting Reservation Request...';
    resultBox.style.display = 'none';

    const formData = new URLSearchParams();
    formData.append('action', 'nistco_submit_booking');
    formData.append('security', '<?php echo wp_create_nonce( "nistco_booking_nonce" ); ?>');
    formData.append('equipment_name', document.getElementById('bookEquipment').value);
    formData.append('full_name', document.getElementById('bookName').value);
    formData.append('email', document.getElementById('bookEmail').value);
    formData.append('institution', document.getElementById('bookInstitution').value);
    formData.append('booking_date', document.getElementById('bookDate').value);
    formData.append('sample_details', document.getElementById('bookDetails').value);

    fetch('<?php echo admin_url( "admin-ajax.php" ); ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        btn.disabled = false;
        btn.textContent = 'Submit Reservation Requisition →';
        resultBox.style.display = 'block';

        if(data.success) {
            resultBox.style.background = '#d1fae5';
            resultBox.style.border = '1px solid #10b981';
            resultBox.style.color = '#065f46';
            resultBox.innerHTML = `<strong>Success!</strong> ${data.data.message}<br>Booking Reference Token: <code style="background:#fff; padding:0.2rem 0.5rem; border-radius:4px; font-weight:bold; color:#0ea5e9;">${data.data.booking_ref}</code><br><span style="font-size:0.85rem; color:#047857;">A confirmation email with sample intake guidelines has been dispatched.</span>`;
            document.getElementById('bookingForm').reset();
        } else {
            resultBox.style.background = '#fee2e2';
            resultBox.style.border = '1px solid #ef4444';
            resultBox.style.color = '#991b1b';
            resultBox.innerHTML = `<strong>Error:</strong> ${data.data.message || 'Submission failed. Please try again.'}`;
        }
    })
    .catch(err => {
        btn.disabled = false;
        btn.textContent = 'Submit Reservation Requisition →';
        resultBox.style.display = 'block';
        resultBox.style.background = '#fee2e2';
        resultBox.style.border = '1px solid #ef4444';
        resultBox.style.color = '#991b1b';
        resultBox.innerHTML = `<strong>Network Error:</strong> Please check your connection and try again.`;
    });
}
</script>

<?php get_footer(); ?>
