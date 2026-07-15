<?php include 'header.php'; ?>
<!-- ACHIEVEMENTS SECTION START -->
<section class="achievement_section">
  <div class="container px-4 px-lg-5">
    
    <!-- Top Row: Heading Content and Trophy Visual Matrix -->
    <div class="row align-items-center g-5 mb-5 mt-3">
      
      <!-- Left Column: Content Pitch -->
      <div class="col-12 col-lg-5">
        <span class="achievement_subtitle">OUR ACHIEVEMENTS</span>
        <h1 class="achievement_main_title">
          Milestones That <br>
          Define Our <span class="achievement_title_accent">Journey.</span>
        </h1>
        
        <p class="achievement_desc">
          Every project, every partnership and every success has shaped who we are today. Here's a look at the numbers, recognition and trust we've earned along the way.
        </p>
        
        <a href="#" class="btn achievement_cta_btn">
          See Our Work <i class="bi bi-arrow-up-right-short ms-1"></i>
        </a>
      </div>
      
      <!-- Right Column: Premium Trophy Mockup Area -->
      <div class="col-12 col-lg-7">
        <div class="achievement_trophy_wrapper position-relative text-center">
          
          <!-- Neon Radial Ring Light behind Trophy -->
          <div class="achievement_neon_ring_glow"></div>
          
          <!-- Trophy Stand Mockup Object -->
          <div class="achievement_trophy_mock">
            <div class="achievement_trophy_icon_gold"><i class="bi bi-trophy-fill"></i></div>
            <div class="achievement_trophy_badge">
              <span class="d-block fw-bold small text-uppercase tracking-wider">Success</span>
              <span class="achievement_trophy_sublabel">Through Strategy & Creativity</span>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>

    <!-- Bottom Row: 5-Column Stats Grid Banner Container -->
    <div class="achievement_stats_banner">
      <div class="row g-4 text-center justify-content-center align-items-center">
        
        <!-- Metric 1: Projects -->
        <div class="col-6 col-md-4 col-lg-2-4 achievement_stat_divider">
          <div class="achievement_stat_box">
            <div class="achievement_stat_icon"><i class="bi bi-trophy"></i></div>
            <div>
              <h3 class="achievement_stat_counter">800+</h3>
              <p class="achievement_stat_label">Projects Completed</p>
            </div>
          </div>
        </div>

        <!-- Metric 2: Happy Clients -->
        <div class="col-6 col-md-4 col-lg-2-4 achievement_stat_divider">
          <div class="achievement_stat_box">
            <div class="achievement_stat_icon"><i class="bi bi-emoji-smile"></i></div>
            <div>
              <h3 class="achievement_stat_counter">250+</h3>
              <p class="achievement_stat_label">Happy Clients</p>
            </div>
          </div>
        </div>

        <!-- Metric 3: Experience -->
        <div class="col-6 col-md-4 col-lg-2-4 achievement_stat_divider">
          <div class="achievement_stat_box">
            <div class="achievement_stat_icon"><i class="bi bi-award"></i></div>
            <div>
              <h3 class="achievement_stat_counter">6+</h3>
              <p class="achievement_stat_label">Years of Experience</p>
            </div>
          </div>
        </div>

        <!-- Metric 4: Industries Served -->
        <div class="col-6 col-md-6 col-lg-2-4 achievement_stat_divider_md">
          <div class="achievement_stat_box">
            <div class="achievement_stat_icon"><i class="bi bi-people"></i></div>
            <div>
              <h3 class="achievement_stat_counter">40+</h3>
              <p class="achievement_stat_label">Industries Served</p>
            </div>
          </div>
        </div>

        <!-- Metric 5: Satisfaction -->
        <div class="col-12 col-md-6 col-lg-2-4">
          <div class="achievement_stat_box justify-content-md-center">
            <div class="achievement_stat_icon"><i class="bi bi-graph-up-arrow"></i></div>
            <div>
              <h3 class="achievement_stat_counter">98%</h3>
              <p class="achievement_stat_label">Client Satisfaction</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Custom Scoped CSS Stylesheet (No Inline Styles) -->
  <style>
    /* Section Core Setup */
    .achievement_section {
      background-color: #04050a;
      color: #ffffff;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      padding-top: 5rem;
      padding-bottom: 5rem;
      overflow: hidden;
    }

    /* Left Grid Content Elements */
    .achievement_subtitle {
      color: #0d6efd;
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      display: block;
      margin-bottom: 1.25rem;
    }
    .achievement_main_title {
      font-weight: 700;
      font-size: clamp(2rem, 4.5vw, 3rem);
      line-height: 1.2;
      margin-bottom: 1.5rem;
    }
    .achievement_title_accent {
      color: #0d6efd;
    }
    .achievement_desc {
      color: #a9a9b3;
      font-size: 0.95rem;
      line-height: 1.7;
      max-width: 480px;
      margin-bottom: 2.5rem;
    }
    .achievement_cta_btn {
      background-color: #0d6efd;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.9rem;
      padding: 0.8rem 1.85rem;
      border-radius: 6px;
      transition: all 0.3s ease;
    }
    .achievement_cta_btn:hover {
      background-color: #0b5ed7;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(13, 110, 253, 0.3);
    }

    /* Right Grid Premium Visual Components */
    .achievement_trophy_wrapper {
      min-height: 350px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .achievement_neon_ring_glow {
      position: absolute;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      border: 2px solid rgba(13, 110, 253, 0.3);
      box-shadow: 0 0 40px rgba(13, 110, 253, 0.2), inset 0 0 30px rgba(13, 110, 253, 0.1);
      background: radial-gradient(circle, rgba(13, 110, 253, 0.08) 0%, transparent 70%);
      bottom: 10px;
    }
    .achievement_trophy_mock {
      position: relative;
      z-index: 1;
    }
    .achievement_trophy_icon_gold {
      font-size: 8rem;
      background: linear-gradient(135deg, #ffe066 0%, #d4af37 50%, #aa7c11 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 0 25px rgba(212, 175, 55, 0.3));
    }
    .achievement_trophy_badge {
      background-color: #0b0e17;
      border: 1px solid rgba(212, 175, 55, 0.2);
      border-radius: 6px;
      padding: 0.5rem 1.2rem;
      display: inline-block;
      margin-top: -10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }
    .achievement_trophy_badge span {
      color: #d4af37;
      letter-spacing: 1.5px;
      font-size: 0.75rem;
    }
    .achievement_trophy_sublabel {
      color: #8a8b94 !important;
      font-size: 0.6rem !important;
      letter-spacing: 0.5px !important;
      display: block;
    }

    /* Bottom Row Counters Grid Layout Panel */
    .achievement_stats_banner {
      background-color: #060913;
      border: 1px solid rgba(255, 255, 255, 0.04);
      border-radius: 14px;
      padding: 2.2rem 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    .achievement_stat_box {
      display: flex;
      align-items: center;
      gap: 1rem;
      text-align: left;
    }
    .achievement_stat_icon {
      color: #0d6efd;
      font-size: 2.2rem;
      display: flex;
      align-items: center;
    }
    .achievement_stat_counter {
      color: #0d6efd;
      font-weight: 700;
      font-size: 2rem;
      margin: 0;
      line-height: 1.1;
    }
    .achievement_stat_label {
      color: #8a8b94;
      font-size: 0.78rem;
      margin: 0;
      font-weight: 500;
      white-space: nowrap;
    }

    /* Desktop Grid System 5-Column Hack Base Customization */
    @media (min-width: 992px) {
      .col-img-lg-5 { flex: 0 0 41.666667%; max-width: 41.666667%; }
      .col-lg-2-4 {
        flex: 0 0 20%;
        max-width: 20%;
      }
      .achievement_stat_divider {
        border-right: 1px solid rgba(255, 255, 255, 0.05);
      }
    }

    /* Tablet/Mobile Responsive Control Breakpoints */
    @media (max-width: 991.98px) {
      .achievement_trophy_wrapper {
        min-height: 280px;
        margin-top: 1rem;
      }
      .achievement_stat_divider {
        border-right: none;
      }
      .achievement_stat_box {
        justify-content: center;
      }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
      .achievement_stat_divider_md {
        border-right: 1px solid rgba(255, 255, 255, 0.05);
      }
    }
    @media (max-width: 575.98px) {
      .achievement_stats_banner {
        padding: 1.8rem 1rem;
      }
      .achievement_stat_counter {
        font-size: 1.6rem;
      }
      .achievement_stat_box {
        flex-direction: column;
        gap: 0.25rem;
        text-align: center;
      }
    }
  </style>
</section>
<!-- ACHIEVEMENTS SECTION END -->

<!-- JOURNEY TIMELINE SECTION START -->
<section class="achievement_section_our_journey">
  <div class="container-fluid px-4 px-lg-5">
    
    <!-- Section Title Headers -->
    <div class="text-center mb-5">
      <span class="journey_subtitle">OUR JOURNEY</span>
      <h2 class="journey_main_title">Milestones That Matter</h2>
    </div>

    <!-- Timeline Horizontal/Vertical Container Grid -->
    <div class="journey_timeline_wrapper position-relative">
      
      <!-- Connecting Track Line -->
      <div class="journey_timeline_line"></div>
      
      <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-6 position-relative z-1 text-center justify-content-center">
        
        <!-- Node 1: 2018 -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-flag"></i>
            </div>
            <h4 class="journey_year">2018</h4>
            <h5 class="journey_node_title">The Beginning</h5>
            <p class="journey_node_text">Started our journey with a passion for branding and creative design.</p>
          </div>
        </div>

        <!-- Node 2: 2019 -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-people"></i>
            </div>
            <h4 class="journey_year">2019</h4>
            <h5 class="journey_node_title">Growing Together</h5>
            <p class="journey_node_text">Expanded our team and served our first 100+ happy clients.</p>
          </div>
        </div>

        <!-- Node 3: 2020 -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-rocket-takeoff"></i>
            </div>
            <h4 class="journey_year">2020</h4>
            <h5 class="journey_node_title">Going Digital</h5>
            <p class="journey_node_text">Strengthened our digital services and delivered impactful campaigns.</p>
          </div>
        </div>

        <!-- Node 4: 2021 -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-star"></i>
            </div>
            <h4 class="journey_year">2021</h4>
            <h5 class="journey_node_title">Rising Higher</h5>
            <p class="journey_node_text">Achieved 500+ successful projects and multiple industry recognitions.</p>
          </div>
        </div>

        <!-- Node 5: 2022 -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-globe"></i>
            </div>
            <h4 class="journey_year">2022</h4>
            <h5 class="journey_node_title">Wider Impact</h5>
            <p class="journey_node_text">Partnered with global brands and served clients across multiple industries.</p>
          </div>
        </div>

        <!-- Node 6: 2024+ -->
        <div class="col">
          <div class="journey_node_card">
            <div class="journey_icon_glow_circle">
              <i class="bi bi-target"></i>
            </div>
            <h4 class="journey_year">2024+</h4>
            <h5 class="journey_node_title">Future Ready</h5>
            <p class="journey_node_text">Continuing to innovate, create and deliver results that make a difference.</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Custom Scoped CSS Stylesheet (No Inline Styles) -->
  <style>
    /* Section Main Theme Background */
    .achievement_section_our_journey {
      background-color: #04050a;
      padding-top: 4rem;
      padding-bottom: 4rem;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
    }

    /* Heading Text Style setup */
    .journey_subtitle {
      color: #0d6efd;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      display: block;
      margin-bottom: 0.5rem;
    }
    .journey_main_title {
      color: #ffffff;
      font-weight: 600;
      font-size: 2.2rem;
      margin-bottom: 3.5rem;
    }

    /* Timeline Tracking Layout Elements */
    .journey_timeline_wrapper {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    /* Horizontal Track line for Desktop Viewports */
    .journey_timeline_line {
      position: absolute;
      top: 40px;
      left: 8%;
      right: 8%;
      height: 2px;
      background: linear-gradient(90deg, rgba(13, 110, 253, 0.2) 0%, rgba(13, 110, 253, 0.8) 50%, rgba(13, 110, 253, 0.2) 100%);
      z-index: 0;
    }

    /* Node Components Styles configuration */
    .journey_node_card {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 0.5rem;
    }
    
    /* Glowing Neon Blueprint Ring for Node Vector */
    .journey_icon_glow_circle {
      width: 80px;
      height: 80px;
      background-color: #04050a;
      border: 2px solid #0d6efd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 1.6rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 0 20px rgba(13, 110, 253, 0.6), inset 0 0 12px rgba(13, 110, 253, 0.4);
      transition: all 0.3s ease;
    }
    .journey_node_card:hover .journey_icon_glow_circle {
      transform: scale(1.08);
      box-shadow: 0 0 28px rgba(13, 110, 253, 0.8), inset 0 0 16px rgba(13, 110, 253, 0.6);
    }

    /* Inner Node Typography setup */
    .journey_year {
      color: #0d6efd;
      font-weight: 700;
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      letter-spacing: 0.5px;
    }
    .journey_node_title {
      color: #ffffff;
      font-weight: 600;
      font-size: 1.05rem;
      margin-bottom: 0.75rem;
    }
    .journey_node_text {
      color: #8a8b94;
      font-size: 0.82rem;
      line-height: 1.6;
      margin: 0;
      max-width: 200px;
    }

    /* Responsive Adaptation for Mobile / Tablet Viewports */
    @media (max-width: 991.98px) {
      /* Turning horizontal timeline track line into vertical for clean breakdown */
      .journey_timeline_line {
        display: none;
      }
      .journey_node_card {
        padding: 1.5rem 1rem;
        background-color: rgba(6, 9, 19, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        height: 100%;
      }
      .journey_node_text {
        max-width: 100%;
      }
      .journey_main_title {
        margin-bottom: 2rem;
      }
    }
  </style>
</section>
<!-- JOURNEY TIMELINE SECTION END -->


<!-- awards setion  -->
 <!-- RECOGNITION & AWARDS SECTION START -->
<section class="achievement_section_award">
  <div class="container-fluid px-4 px-lg-5">
    
    <!-- Section Header Setup -->
    <div class="text-center mb-5">
      <span class="award_section_subtitle">RECOGNITION & AWARDS</span>
      <h2 class="award_section_main_title">Honored For Our Work</h2>
    </div>

    <!-- 6-Column Premium Badges Row Grid -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 justify-content-center">
      
      <!-- Award Card 1 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">TOP BRANDING AGENCY</span>
              <span class="award_badge_year_gold">2023</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Top Branding Agency<br><span class="text-muted">2023</span>
          </div>
        </div>
      </div>

      <!-- Award Card 2 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">BEST DIGITAL CAMPAIGN</span>
              <span class="award_badge_year_gold">2022</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Best Digital Campaign<br><span class="text-muted">2022</span>
          </div>
        </div>
      </div>

      <!-- Award Card 3 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">EXCELLENCE IN CREATIVE DESIGN</span>
              <span class="award_badge_year_gold">2021</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Excellence In Creative Design 2021
          </div>
        </div>
      </div>

      <!-- Award Card 4 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">MOST INNOVATIVE AGENCY</span>
              <span class="award_badge_year_gold">2021</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Most Innovative Agency 2021
          </div>
        </div>
      </div>

      <!-- Award Card 5 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">CLIENT CHOICE AWARD</span>
              <span class="award_badge_year_gold">2020</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Client Choice Award<br><span class="text-muted">2020</span>
          </div>
        </div>
      </div>

      <!-- Award Card 6 -->
      <div class="col">
        <div class="award_badge_card">
          <div class="award_laurel_wreath">
            <div class="award_inner_badge_content">
              <span class="award_badge_badge_title">EMERGING AGENCY OF THE YEAR</span>
              <span class="award_badge_year_gold">2019</span>
            </div>
          </div>
          <div class="award_card_footer_text">
            Emerging Agency Of The Year 2019
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Custom Scoped CSS Stylesheet (No Inline Styles) -->
  <style>
    /* Section Workspace Wrapper Layout */
    .achievement_section_award {
      background-color: #04050a;
      padding-top: 4rem;
      padding-bottom: 4rem;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Top Core Headings Typography */
    .award_section_subtitle {
      color: #0d6efd;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      display: block;
      margin-bottom: 0.5rem;
    }
    .award_section_main_title {
      color: #ffffff;
      font-weight: 600;
      font-size: 2.2rem;
      margin-bottom: 3rem;
    }

    /* Premium Minimal Dark Card Element */
    .award_badge_card {
      background-color: #060913;
      border: 1px solid rgba(255, 255, 255, 0.03);
      border-radius: 12px;
      padding: 2rem 1rem 1.5rem 1rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .award_badge_card:hover {
      transform: translateY(-5px);
      border-color: rgba(212, 175, 55, 0.2);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
    }

    /* Laurel Wreath Graphic Wrapper Simulated Space */
    .award_laurel_wreath {
      position: relative;
      width: 110px;
      height: 110px;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      /* Built-in pseudo border structure simulating vector wings */
      border: 2px dashed rgba(212, 175, 55, 0.25);
      border-radius: 50%;
      padding: 8px;
    }
    .award_laurel_wreath::before, 
    .award_laurel_wreath::after {
      content: "🌿";
      position: absolute;
      font-size: 1.3rem;
      color: #d4af37;
      opacity: 0.85;
      bottom: 12px;
    }
    .award_laurel_wreath::before { left: -5px; transform: rotate(-35deg); }
    .award_laurel_wreath::after { right: -5px; transform: rotate(35deg) scaleX(-1); }

    /* Internal Core Text Grid within Wreath */
    .award_inner_badge_content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }
    .award_badge_badge_title {
      color: #d4af37;
      font-size: 0.52rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      line-height: 1.3;
      text-transform: uppercase;
      max-width: 80px;
      margin-bottom: 3px;
    }
    .award_badge_year_gold {
      color: #ffe066;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    /* Lower Grid Structural Footer Typography */
    .award_card_footer_text {
      color: #ffffff;
      font-size: 0.8rem;
      font-weight: 500;
      line-height: 1.4;
      margin-top: auto;
    }

    /* Responsive Adaptation System For Smaller Devices */
    @media (max-width: 767.98px) {
      .award_badge_card {
        padding: 1.5rem 0.75rem 1.25rem 0.75rem;
      }
      .award_laurel_wreath {
        width: 100px;
        height: 100px;
        margin-bottom: 1rem;
      }
      .award_badge_badge_title {
        font-size: 0.48rem;
        max-width: 70px;
      }
      .award_card_footer_text {
        font-size: 0.75rem;
      }
    }
  </style>
</section>
<!-- RECOGNITION & AWARDS SECTION END -->

<?php include 'footer.php'; ?>