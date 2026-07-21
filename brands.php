<?php include 'header.php'; ?>

<main class="brands-page">
    <!-- HERO -->
    <section class="brands-hero-section">
        <div class="brands-hero-orb brands-hero-orb-left"></div>
        <div class="brands-hero-orb brands-hero-orb-right"></div>

        <div class="container-fluid px-4 px-lg-5  mt-5 pt-5">
            <div class="row align-items-center g-5  " >
                <div class="col-12 col-lg-5">
                    <span class="brands-kicker">OUR BRAND STORIES</span>
                    <h1 class="brands-hero-title">
                        Real Stories.<br>
                        Real <span>Impact.</span>
                    </h1>

                    <p class="brands-hero-text">
                        Every brand has a story. Here are some we've helped write, design and grow.
                        Explore how we turn ideas into impactful brands and measurable results.
                    </p>

                    <a href="#projects" class="btn brands-primary-btn text-white">
                        View All Projects <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

                <div class="col-12 col-lg-7">
                    <!-- <div class="brands-hero-visual">
                        <div class="brands-hero-glow brands-hero-glow-left"></div>
                        <div class="brands-hero-glow brands-hero-glow-right"></div>

                        <div class="brands-hero-panel">
                            <img
                                src="assets/img/1.png"
                                alt="Brand stories showcase"
                                class="brands-hero-image img-fluid"
                                loading="eager"
                                decoding="async"
                            >
                        </div>
                    </div> -->

                    <img src="./assets/img/branding _img.png" alt="branding_img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="container">

 <div class="about_fourth_section">
            <div class="row g-4 text-center justify-content-center">

                <!-- Metric 1: Projects -->
                <div class="col-6 col-md-3 about_fourth_stat_col">
                    <div class="about_fourth_stat_card">
                        <div class="about_fourth_icon_box">
                            <img src=".\assets\img\project completed.png" style="width: 60px; height:60px;">
                        </div>
                        <h3 class="about_fourth_counter" >800+</h3>
                        <p class="about_fourth_label">Projects Completed</p>
                    </div>
                </div>

                <!-- Metric 2: Happy Clients -->
                <div class="col-6 col-md-3 about_fourth_stat_col">
                    <div class="about_fourth_stat_card">
                        <div class="about_fourth_icon_box" >
                            <img src=".\assets\img\happy-clients-01.png" style="width: 60px; height:60px;">
                        </div>
                        <h3 class="about_fourth_counter">250+</h3>
                        <p class="about_fourth_label">Happy Clients</p>
                    </div>
                </div>

                <!-- Metric 3: Experience -->
                <div class="col-6 col-md-3 about_fourth_stat_col">
                    <div class="about_fourth_stat_card">
                        <div class="about_fourth_icon_box">
                            <img src=".\assets\img\years_of_experience.png" style="width: 60px; height:60px;">
                        </div>
                        <h3 class="about_fourth_counter">6+</h3>
                        <p class="about_fourth_label">Years of Experience</p>
                    </div>
                </div>

                <!-- Metric 4: Satisfaction -->
                <div class="col-6 col-md-3">
                    <div class="about_fourth_stat_card">
                        <div class="about_fourth_icon_box">
                            <img src=".\assets\img\client_satisfaction.png" style="width: 60px; height:60px;">
                        </div>
                        <h3 class="about_fourth_counter">98%</h3>
                        <p class="about_fourth_label">Client Satisfaction</p>
                    </div>
                </div>

            </div>
        </div>
</section>

    
    <!-- FILTER + PROJECTS -->
    <section class="brands-filter-section" id="projects">
        <div class="container-fluid px-4 px-lg-5">
            <div class="brands-filter-row">
                <div class="brands-filter-chips" role="tablist" aria-label="Project filters">
                    <button type="button" class="btn brands-filter-btn is-active " data-filter="all">All Projects</button>
                    <button type="button" class="btn brands-filter-btn text-white" data-filter="branding">Branding</button>
                    <button type="button" class="btn brands-filter-btn text-white" data-filter="digital-marketing">Digital Marketing</button>
                    <button type="button" class="btn brands-filter-btn text-white" data-filter="web-design">Web Design</button>
                    <button type="button" class="btn brands-filter-btn text-white" data-filter="social-media">Social Media</button>
                    <button type="button" class="btn brands-filter-btn text-white" data-filter="video-production">Video Production</button>
                </div>

                <button type="button" class="btn brands-filter-action">
                    Filter <i class="bi bi-funnel"></i>
                </button>
            </div>

            <div class="brands-project-grid">
                <article class="brands-project-card" data-category="branding">
                    <div class="brands-project-media brands-project-media-a">
                        <span class="brands-project-badge">Branding</span>
                        <img src="assets/img/branging_side.png" alt="Aurora Skincare" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Branding</h3>
                        <p class="brands-project-meta">Build a Brand That Lasts</p>
                        <p class="brands-project-desc">Craft a memorable brand identity that builds trust, reflects your vision, and creates a lasting impression.</p>

                       <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>200%</strong>
                                <span>Brand Awareness</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>150%</strong>
                                <span>Growth in Sales</span>
                            </div>
                        </div> 

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>

                <article class="brands-project-card" data-category="web-design">
                    <div class="brands-project-media brands-project-media-b">
                        <span class="brands-project-badge">Website Design</span>
                        <img src="assets/img/index_1.png" alt="Fintek Financial" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Website Design</h3>
                        <p class="brands-project-meta">Design Websites That Inspire</p>
                        <p class="brands-project-desc">Create modern, responsive websites that deliver seamless user experiences and leave a lasting impression.</p>

                        <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>180%</strong>
                                <span>Website Traffic</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>120%</strong>
                                <span>Lead Generation</span>
                            </div>
                        </div>

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>

                <article class="brands-project-card" data-category="branding">
                    <div class="brands-project-media brands-project-media-c">
                        <span class="brands-project-badge">SEO</span>
                        <img src="assets/img/1.png" alt="Mountain Brew" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Seo</h3>
                        <p class="brands-project-meta">Rank Higher on Search</p>
                        <p class="brands-project-desc">Boost your online visibility and attract more organic traffic with effective SEO strategies that improve search rankings.</p>

                        <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>160%</strong>
                                <span>Engagement</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>90%</strong>
                                <span>Repeat Customers</span>
                            </div>
                        </div>

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>

                <article class="brands-project-card" data-category="digital-marketing">
                    <div class="brands-project-media brands-project-media-d">
                        <span class="brands-project-badge">Digital Marketing</span>
                        <img src="assets/img/index_1.png" alt="Elite Living" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Digital Marketing</h3>
                        <p class="brands-project-meta">Grow Your Brand Digitally</p>
                        <p class="brands-project-desc">Reach the right audience, increase engagement, and drive business growth with result-focused digital marketing strategies.</p>

                        <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>250%</strong>
                                <span>Brand Visibility</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>170%</strong>
                                <span>Qualified Leads</span>
                            </div>
                        </div>

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>

                <article class="brands-project-card" data-category="social-media">
                    <div class="brands-project-media brands-project-media-e">
                        <span class="brands-project-badge">Social Media</span>
                        <img src="assets/img/branging_side.png" alt="Urban Bites" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Social Media</h3>
                        <p class="brands-project-meta">Connect. Engage. Grow.</p>
                        <p class="brands-project-desc">Build a strong social media presence with creative content that engages your audience and grows your brand.</p>

                        <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>300%</strong>
                                <span>Followers Growth</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>220%</strong>
                                <span>Engagement Rate</span>
                            </div>
                        </div>

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>

                <article class="brands-project-card" data-category="video-production">
                    <div class="brands-project-media brands-project-media-f">
                        <span class="brands-project-badge">Video Production</span>
                        <img src="assets/img/1.png" alt="NextGen Solutions" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Video Production</h3>
                        <p class="brands-project-meta">Bring Stories to Life</p>
                        <p class="brands-project-desc">Create impactful videos that capture attention, communicate your message, and strengthen your brand.</p>

                        <div class="brands-project-stats">
                            <div class="brands-project-stat">
                                <strong>180%</strong>
                                <span>Video Views</span>
                            </div>
                            <div class="brands-project-stat">
                                <strong>140%</strong>
                                <span>Lead Conversion</span>
                            </div>
                        </div>

                        <a href="#" class="brands-project-link">View Case Study <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="brands-cta-section">
        <div class="container-fluid px-4 px-lg-5">
            <div class="brands-cta-banner">
                <div class="brands-cta-content">
                    <div class="brands-cta-icon">
                        <i class="bi bi-star"></i>
                    </div>

                    <div class="brands-cta-copy">
                        <h3>Your Brand Story Could Be Next.</h3>
                        <p>Let's create something amazing together and make your brand the next success story.</p>
                    </div>
                </div>

                <!-- <a href="#" class="btn brands-cta-btn">
                    Let's Talk <i class="bi bi-arrow-up-right"></i>
                </a> -->


                 <a href="tel:+919642343434" class="talk_btn">
                <i class="bi bi-telephone-fill"></i>    Let's Talk 
                </a>
            </div>
        </div>
    </section>

    <!-- BRANDS STRIP -->
    <section class="about_last_section">
        <div class="container-fluid px-4 px-lg-5">
            <div class="about_last_section_divider_container">
                <div class="about_last_section_line"></div>
                <span class="about_last_section_subtitle">BRANDS WE'VE WORKED WITH</span>
                <div class="about_last_section_line"></div>
            </div>

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
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".brands-filter-btn");
        const projectCards = document.querySelectorAll(".brands-project-card");

        filterButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                filterButtons.forEach(function (btn) {
                    btn.classList.remove("is-active");
                    btn.setAttribute("aria-pressed", "false");
                });

                this.classList.add("is-active");
                this.setAttribute("aria-pressed", "true");

                const selectedFilter = this.getAttribute("data-filter");

                projectCards.forEach(function (card) {
                    const category = card.getAttribute("data-category");

                    if (selectedFilter === "all" || selectedFilter === category) {
                        card.classList.remove("is-hidden");
                    } else {
                        card.classList.add("is-hidden");
                    }
                });
            });
        });
    });
</script>

<?php include 'footer.php'; ?>
