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

                    <a href="#projects" class="btn brands-primary-btn">
                        View All Projects <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="brands-hero-visual">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="brands-stats-section">
        <div class="container-fluid px-4 px-lg-5">
            <div class="brands-stats-bar">
                <div class="brands-stat-item">
                    <div class="brands-stat-icon"><i class="bi bi-rocket-takeoff"></i></div>
                    <div>
                        <h3 class="brands-stat-number">800+</h3>
                        <p class="brands-stat-label">Projects Completed</p>
                    </div>
                </div>

                <div class="brands-stat-item">
                    <div class="brands-stat-icon"><i class="bi bi-emoji-smile"></i></div>
                    <div>
                        <h3 class="brands-stat-number">250+</h3>
                        <p class="brands-stat-label">Happy Clients</p>
                    </div>
                </div>

                <div class="brands-stat-item">
                    <div class="brands-stat-icon"><i class="bi bi-award"></i></div>
                    <div>
                        <h3 class="brands-stat-number">6+</h3>
                        <p class="brands-stat-label">Years of Experience</p>
                    </div>
                </div>

                <div class="brands-stat-item">
                    <div class="brands-stat-icon"><i class="bi bi-hand-thumbs-up"></i></div>
                    <div>
                        <h3 class="brands-stat-number">98%</h3>
                        <p class="brands-stat-label">Client Satisfaction</p>
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
                        <h3>Aurora Skincare</h3>
                        <p class="brands-project-meta">Beauty &amp; Skincare</p>
                        <p class="brands-project-desc">Crafted a premium brand identity that reflects elegance and builds trust.</p>

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
                        <h3>Fintek Financial</h3>
                        <p class="brands-project-meta">Fintech</p>
                        <p class="brands-project-desc">Designed a modern, user-friendly website that simplifies finance for everyone.</p>

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
                        <span class="brands-project-badge">Branding</span>
                        <img src="assets/img/1.png" alt="Mountain Brew" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Mountain Brew</h3>
                        <p class="brands-project-meta">Food &amp; Beverages</p>
                        <p class="brands-project-desc">Developed a warm and inviting brand identity that brews connection.</p>

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
                        <span class="brands-project-badge">Hoarding</span>
                        <img src="assets/img/index_1.png" alt="Elite Living" class="brands-project-image img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="brands-project-content">
                        <h3>Elite Living</h3>
                        <p class="brands-project-meta">Real Estate</p>
                        <p class="brands-project-desc">Premium outdoor campaigns that positioned the brand as a true market leader.</p>

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
                        <h3>Urban Bites</h3>
                        <p class="brands-project-meta">Restaurant</p>
                        <p class="brands-project-desc">Creative social media strategy that turned followers into loyal customers.</p>

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
                        <h3>NextGen Solutions</h3>
                        <p class="brands-project-meta">Technology</p>
                        <p class="brands-project-desc">High-impact corporate videos that communicate innovation and drive conversions.</p>

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

                <a href="#" class="btn brands-cta-btn">
                    Let's Talk <i class="bi bi-arrow-up-right"></i>
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
