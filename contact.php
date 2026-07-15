<?php include 'header.php'; ?>


<style>
    /* Base Style Setup */
.contact_section {
    background-color: #03060e; /* Premium absolute dark theme */
    font-family: 'Inter', sans-serif;
    overflow: hidden;
}

.contact_section .text-primary-blue {
    color: #0052fe !important;
}

.contact_section .tracking-wider {
    letter-spacing: 0.12em;
}

.contact_section .text-muted-gray {
    color: #64748b;
}

.contact_section .main-title {
    letter-spacing: -0.01em;
}

.contact_section .subtitle-text {
    font-size: 0.95rem;
    line-height: 1.6;
}

/* --- Left Column Info Items --- */
.contact_section .info-icon-box {
    width: 48px;
    height: 48px;
    background: rgba(0, 82, 254, 0.04);
    border: 1px solid #142342;
    border-radius: 10px;
    color: #0052fe;
    font-size: 1.1rem;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.contact_section .info-item:hover .info-icon-box {
    background: #0052fe;
    color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 82, 254, 0.3);
}

/* --- Right Column Glassmorphism Card --- */
.contact_section .contact-form-card {
    background: #060b15;
    border: 1px solid #111a2e !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

/* Custom Input Groups & Fields */
.contact_section .input-group-custom {
    display: flex;
    align-items: center;
}

.contact_section .input-icon {
    position: absolute;
    left: 16px;
    color: #475569;
    font-size: 1rem;
    z-index: 5;
    pointer-events: none;
}

.contact_section .textarea-group .input-icon {
    align-self: flex-start;
}

.contact_section .form-control-custom {
    width: 100%;
    background-color: rgba(3, 6, 14, 0.6);
    border: 1px solid #142342;
    border-radius: 8px;
    padding: 12px 16px 12px 46px;
    color: #ffffff;
    font-size: 0.9rem;
    transition: all 0.2s ease;
}

.contact_section .form-control-custom::placeholder {
    color: #475569;
}

.contact_section .form-control-custom:focus {
    outline: none;
    border-color: #0052fe;
    background-color: #03060e;
    box-shadow: 0 0 10px rgba(0, 82, 254, 0.15);
}

/* Modern Submit Button */
.contact_section .btn-submit-custom {
    background-color: #0052fe;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 14px 20px;
    font-size: 0.95rem;
    font-weight: 500;
    transition: all 0.2s ease;
    box-shadow: 0 4px 15px rgba(0, 82, 254, 0.25);
}

.contact_section .btn-submit-custom:hover {
    background-color: #0041cb;
    color: #ffffff;
    transform: translateY(-1px);
}

.contact_section .privacy-text {
    font-size: 0.8rem;
    color: #475569;
}

/* Fallback Check for Standard Font Icons Styling if Bootstrap Icons are missing */
.contact_section .bi::before {
    font-weight: bold !important;
}
</style>


<!-- Contact Us Section -->
<section class="contact_section py-5 position-relative">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            
            <!-- Left Column: Content & Details -->
            <div class="col-lg-5 text-white">
                <span class="text-uppercase fw-semibold tracking-wider text-primary-blue small mb-2 d-inline-block">
                    CONTACT US
                </span>
                <h2 class="display-5 fw-bold lh-sm mb-4 main-title">
                    We'd Love To Hear <br>From <span class="text-primary-blue">You.</span>
                </h2>
                <p class="text-muted-gray mb-5 subtitle-text">
                    Have a project in mind or just want to say hello? We're here to help you create powerful brands and measurable results.
                </p>
                
                <!-- Info List Components -->
                <div class="d-flex flex-column gap-4">
                    <!-- Call Us -->
                    <div class="info-item d-flex align-items-start gap-3">
                        <div class="info-icon-box d-flex align-items-center justify-content-center">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <h4 class="fs-6 fw-semibold text-primary-blue mb-1">Call Us</h4>
                            <p class="mb-0 text-white fw-medium">+91 98765 43210</p>
                            <span class="text-muted-gray small">Mon – Sat: 10 AM – 7 PM</span>
                        </div>
                    </div>

                    <!-- Email Us -->
                    <div class="info-item d-flex align-items-start gap-3">
                        <div class="info-icon-box d-flex align-items-center justify-content-center">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h4 class="fs-6 fw-semibold text-primary-blue mb-1">Email Us</h4>
                            <p class="mb-0 text-white fw-medium">hello@yourdomain.com</p>
                            <span class="text-muted-gray small">We reply within 24 hours</span>
                        </div>
                    </div>

                    <!-- Our Location -->
                    <div class="info-item d-flex align-items-start gap-3">
                        <div class="info-icon-box d-flex align-items-center justify-content-center">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h4 class="fs-6 fw-semibold text-primary-blue mb-1">Our Location</h4>
                            <p class="mb-0 text-white fw-medium">123, Creative Street,</p>
                            <span class="text-muted-gray small">Your City – 500001, India</span>
                        </div>
                    </div>

                    <!-- Chat on WhatsApp -->
                    <div class="info-item d-flex align-items-start gap-3">
                        <div class="info-icon-box d-flex align-items-center justify-content-center">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h4 class="fs-6 fw-semibold text-primary-blue mb-1">Chat on WhatsApp</h4>
                            <p class="mb-0 text-white fw-medium">+91 98765 43210</p>
                            <span class="text-muted-gray small">Quick support on WhatsApp</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Glassmorphism Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-card p-4 p-md-5 rounded-4 border border-dark-custom">
                    <h3 class="h4 text-white fw-bold mb-2">Send Us A Message</h3>
                    <p class="text-muted-gray small mb-4">Fill out the form and we'll get back to you soon.</p>
                    
                    <form action="#" method="POST">
                        <div class="row g-3 mb-3">
                            <!-- Name Field -->
                            <div class="col-md-6">
                                <div class="input-group-custom position-relative">
                                    <span class="input-icon"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control-custom" placeholder="Your Name *" required>
                                </div>
                            </div>
                            <!-- Email Field -->
                            <div class="col-md-6">
                                <div class="input-group-custom position-relative">
                                    <span class="input-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control-custom" placeholder="Your Email *" required>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="mb-3">
                            <div class="input-group-custom position-relative">
                                <span class="input-icon"><i class="bi bi-telephone"></i></span>
                                <input type="tel" class="form-control-custom" placeholder="Phone Number">
                            </div>
                        </div>

                        <!-- Company Field -->
                        <div class="mb-3">
                            <div class="input-group-custom position-relative">
                                <span class="input-icon"><i class="bi bi-briefcase"></i></span>
                                <input type="text" class="form-control-custom" placeholder="Company / Business Name">
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="mb-4">
                            <div class="input-group-custom position-relative textarea-group">
                                <span class="input-icon mt-2"><i class="bi bi-pencil"></i></span>
                                <textarea class="form-control-custom" rows="4" placeholder="How can we help you? *" required></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-submit-custom w-100 d-flex align-items-center justify-content-center gap-2 mb-3">
                            Send Message <i class="bi bi-arrow-up-right"></i>
                        </button>
                    </form>

                    <!-- Form Footer Privacy Text -->
                    <div class="d-flex align-items-center justify-content-center gap-2 text-muted-gray small privacy-text mt-2">
                        <i class="bi bi-lock"></i>
                        <span>We respect your privacy. Your information is safe with us.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- Section 1: Let's Connect Map Section -->
<section class="contact_lets_content py-5">
    <div class="container">
        <div class="connect-wrapper p-4 p-md-5 rounded-4 position-relative overflow-hidden">
            <!-- Background Map Visual Styling Integration -->
            <div class="map-bg-overlay"></div>
            
            <div class="row g-4 position-relative z-index-2">
                <!-- Left Details Info Side -->
                <div class="col-lg-5 text-white">
                    <h2 class="display-6 fw-bold mb-2">Let's <span class="text-primary-blue">Connect</span></h2>
                    <div class="title-line mb-4"></div>
                    <p class="text-muted-gray small-desc mb-5">
                        We are always open to discussing new projects, creative ideas or opportunities to be part of your vision.
                    </p>
                    
                    <div class="d-flex flex-column gap-4">
                        <!-- Quick Response -->
                        <div class="connect-info-item d-flex align-items-start gap-3">
                            <div class="icon-circle-box d-flex align-items-center justify-content-center">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <div>
                                <h4 class="fs-6 fw-semibold text-white mb-1">Quick Response</h4>
                                <p class="text-muted-gray small mb-0">We respond within 24 hours</p>
                            </div>
                        </div>
                        
                        <!-- Free Consultation -->
                        <div class="connect-info-item d-flex align-items-start gap-3">
                            <div class="icon-circle-box d-flex align-items-center justify-content-center">
                                <i class="bi bi-chat-square-heart"></i>
                            </div>
                            <div>
                                <h4 class="fs-6 fw-semibold text-white mb-1">Free Consultation</h4>
                                <p class="text-muted-gray small mb-0">Get expert advice for your business</p>
                            </div>
                        </div>
                        
                        <!-- Custom Solutions -->
                        <div class="connect-info-item d-flex align-items-start gap-3">
                            <div class="icon-circle-box d-flex align-items-center justify-content-center">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h4 class="fs-6 fw-semibold text-white mb-1">Custom Solutions</h4>
                                <p class="text-muted-gray small mb-0">Tailored strategies that drive results</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Center Map Pin Element Area -->
                <div class="col-lg-3 d-flex align-items-center justify-content-center position-relative my-4 my-lg-0">
                    <div class="glowing-map-marker">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span class="pulse-ring"></span>
                    </div>
                </div>

                <!-- Right Office Card Location Component -->
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <div class="office-glass-card p-4 w-100">
                        <h3 class="fs-5 fw-bold text-primary-blue mb-3">Our Office</h3>
                        <p class="text-white small lh-base mb-4">
                            123, Creative Street,<br>
                            Your City – 500001, India
                        </p>
                        <a href="#" class="btn btn-directions w-100 d-flex align-items-center justify-content-center gap-2">
                            Get Directions <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Ready To Start Your Next Project (CTA Banner) -->
<section class="contact_next_project py-4">
    <div class="container">
        <div class="cta-glow-wrapper p-4 p-md-5 rounded-4 d-flex align-items-center justify-content-between position-relative overflow-hidden">
            <!-- Decorative Neo Waves Vector Shape -->
            <div class="neon-wave-shape"></div>
            
            <div class="row w-100 align-items-center g-4 position-relative z-index-2">
                <!-- Chat Glowing Bubble Icon -->
                <div class="col-md-2 col-lg-1 text-center text-md-start">
                    <div class="chat-glow-icon mx-auto mx-md-0 d-flex align-items-center justify-content-center">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                </div>
                
                <!-- Center Content Copy text -->
                <div class="col-md-7 col-lg-8 text-center text-md-start text-white">
                    <h2 class="h3 fw-bold mb-2">Ready To Start Your <span class="text-primary-blue">Next Project?</span></h2>
                    <p class="mb-0 text-secondary-light small-desc">
                        Let's build something amazing together. <br class="d-none d-md-block">Your success is our mission.
                    </p>
                </div>
                
                <!-- Action Interactive Button & Icon Element -->
                <div class="col-md-3 text-center text-md-end position-relative">
                    <a href="#" class="btn btn-talk-custom px-4 py-25 d-inline-flex align-items-center justify-content-center gap-2">
                        Let's Talk <i class="bi bi-arrow-up-right"></i>
                    </a>
                    
                    <!-- Paper Plane Glowing Element Decoration -->
                    <div class="paper-plane-glow d-none d-lg-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Brands Bottom Row Divider Line Indicator -->
        
    </div>
</section>
<style>
    /* Core Styling Rules Setup */
.contact_lets_content, .contact_next_project {
    background-color: #03060e; /* Matches exact visual dark background layout framework styling */
    font-family: 'Inter', sans-serif;
}

.text-primary-blue {
    color: #0052fe !important;
}

.text-muted-gray {
    color: #64748b;
}

.text-secondary-light {
    color: #94a3b8;
}

.z-index-2 {
    position: relative;
    z-index: 2;
}

/* --- 1. Let's Connect Box UI Styles --- */
.connect-wrapper {
    background: #060b15;
    border: 1px solid #111a2e;
}

/* Dynamic Map Background Emulation Overlay styling */
.map-bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at 60% 50%, transparent 10%, #060b15 80%), 
                      url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1000&auto=format&fit=crop'); /* Custom abstract clean slate blueprints dark grid line setup styling map */
    background-size: cover;
    background-position: center;
    opacity: 0.15;
    mix-blend-mode: luminosity;
    z-index: 1;
}

.contact_lets_content .title-line {
    width: 35px;
    height: 2px;
    background-color: #0052fe;
}

.contact_lets_content .small-desc {
    font-size: 0.92rem;
    line-height: 1.6;
}

.icon-circle-box {
    width: 44px;
    height: 44px;
    border: 1px solid #0052fe;
    border-radius: 50%;
    color: #0052fe;
    font-size: 1.1rem;
    background: rgba(0, 82, 254, 0.05);
    flex-shrink: 0;
}

/* Centered Map Pointer Pin Visual styling */
.glowing-map-marker {
    position: relative;
    font-size: 2.5rem;
    color: #0052fe;
    text-shadow: 0 0 20px rgba(0, 82, 254, 0.8);
    z-index: 2;
}

.glowing-map-marker .pulse-ring {
    content: '';
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(0, 82, 254, 0.2);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: markerPulse 2s infinite ease-out;
    z-index: -1;
}

@keyframes markerPulse {
    0% { transform: translate(-50%, -50%) scale(0.5); opacity: 1; }
    100% { transform: translate(-50%, -50%) scale(2); opacity: 0; }
}

/* Glassmorphism Right Card Component Layout */
.office-glass-card {
    background: rgba(6, 11, 21, 0.8);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid #142342;
    border-radius: 12px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
}

.btn-directions {
    background: transparent;
    border: 1px solid #142342;
    color: #0052fe;
    padding: 10px 16px;
    font-size: 0.88rem;
    font-weight: 500;
    border-radius: 8px;
    transition: all 0.2s ease;
}

.btn-directions:hover {
    background: rgba(0, 82, 254, 0.05);
    border-color: #0052fe;
    color: #ffffff;
}

/* --- 2. Ready To Start Project CTA Banner Visual Section styles --- */
.cta-glow-wrapper {
    background: #050a14;
    border: 1px solid #0052fe;
    box-shadow: 0 0 30px rgba(0, 82, 254, 0.15);
}

.chat-glow-icon {
    width: 74px;
    height: 74px;
    border: 2px solid #0052fe;
    border-radius: 50%;
    font-size: 1.8rem;
    color: #ffffff;
    background: #050a14;
    box-shadow: 0 0 20px rgba(0, 82, 254, 0.4);
}

.contact_next_project .small-desc {
    font-size: 0.95rem;
    line-height: 1.5;
}

.btn-talk-custom {
    background-color: #0052fe;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 12px 28px;
    font-weight: 500;
    font-size: 0.95rem;
    box-shadow: 0 4px 15px rgba(0, 82, 254, 0.3);
    transition: background-color 0.2s ease;
}

.btn-talk-custom:hover {
    background-color: #0041cb;
    color: #ffffff;
}

/* Paper Plane Graphic Layer Accent element design layout */
.paper-plane-glow {
    position: absolute;
    right: -40px;
    top: -95px;
    color: rgba(0, 82, 254, 0.4);
    transform: rotate(15deg);
    filter: drop-shadow(0 0 15px rgba(0, 82, 254, 0.6));
}

/* Bottom Brands Typography setup row line indicator alignment rules */
.brands-divider-text {
    position: relative;
}

.brands-divider-text::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 38%;
    height: 1px;
    background-color: #111a2e;
}

.brands-divider-text::after {
    content: '';
    position: absolute;
    top: 50%;
    right: 0;
    width: 38%;
    height: 1px;
    background-color: #111a2e;
}

.brands-divider-text .tracking-widest {
    letter-spacing: 0.18em;
    font-size: 0.75rem;
}
</style>



<!-- BRANDS SECTION START -->
<section class="about_last_section">
    <div class="container-fluid px-4 px-lg-5">

        <!-- Title Divider Area -->
        <div class="about_last_section_divider_container">
            <div class="about_last_section_line"></div>
            <span class="about_last_section_subtitle">BRANDS WE'VE WORKED WITH</span>
            <div class="about_last_section_line"></div>
        </div>

        <!-- Logos Flexbox Grid Grid -->
        <div class="about_last_section_logos_grid">
            <div class="about_last_logo_item"><span class="about_brand_text font_google">Google</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_samsung">SAMSUNG</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_amazon">amazon</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_zomato">zomato</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_swiggy"><i class="bi bi-geo-alt-fill small text-warning me-1"></i>SWIGGY</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_paytm">paytm</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_tata">TATA</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_uber">Uber</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_philips">PHILIPS</span></div>
            <div class="about_last_logo_item"><span class="about_brand_text font_deloitte">Deloitte.</span></div>
        </div>

    </div>

    <!-- Custom Scoped CSS Stylesheet (No Inline Styles) -->
   
</section>


<?php include 'footer.php'; ?>