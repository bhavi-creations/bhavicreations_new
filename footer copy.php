<!-- <footer class="footer_section">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row g-4">

            <div class="col-12 col-md-6 col-lg-3 pe-lg-4 footer_col_border">
                <div class="footer_logo">
                    
                    <img src="./assets/img/logo.webp" alt="logo" style="width: 150px; height: auto;">
                </div>
                <p class="footer_about_text">
                    We are a premium branding & creative agency, helping businesses stand out, attract customers and grow.
                </p>


            </div>
            <div class="col-12 col-md-6 col-lg-3 pe-lg-4 footer_col_border">
              
                <div class="footer_social_links">
                    <a href="https://www.facebook.com/BhavicreationsPvtLtd/" target="_blank" class="footer_social_icon"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/bhavicreations_pvtl" target="_blank" class="footer_social_icon"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" target="_blank" class="footer_social_icon"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank" class="footer_social_icon"><i class="bi bi-youtube"></i></a>
                    <a href="https://in.pinterest.com/bhavicreations/" target="_blank" class="footer_social_icon"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>


            <
            <div class="col-12 col-md-6 col-lg-3 footer_col_border footer_contact_responsive">
                <h6 class="footer_heading">Contact Info</h6>
                <ul class="list-unstyled footer_contact_list">
                    <li>
                        <i class="bi bi-telephone"></i>
                        <span>+91 96423 43434</span>
                    </li>
                    <li>
                        <i class="bi bi-envelope"></i>
                        <span class="footer_text_break">admin@bhavicreations.com</span>
                    </li>
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <span> Plot no 28, RTO Office Rd, behind lazza icecream shop, Ranga Rao Nagar, Kakinada, Vakalapudi, Andhra Pradesh 533003</span>
                    </li>
                    <li>
                        <i class="bi bi-clock"></i>
                        <span>Open 6Am to 9pm</span>
                    </li>
                </ul>
            </div>

          
        </div>

        
        <div class="row footer_bottom_row">
            <div class="col-12 text-center">
                <p class="footer_copyright_text">
                    &copy; 2022 Bhavi Creations Pvt Ltd. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer> -->
  <style>
    /* ========== FOOTER NEW SECTION STYLES ========== */
    .footer-new-section {
      background: #0a0a0a;
      padding: 30px 0 0;
      color: #ffffff;
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Column Borders */
    .footer-new-section .footer_col_border {
      position: relative;
      padding-bottom: 30px;
    }

    .footer-new-section .footer_col_border:not(:last-child)::after {
      content: '';
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background: rgba(255, 255, 255, 0.06);
    }

    /* ====== COLUMN 1: LOGO & ABOUT ====== */
    .footer-new-section .footer_logo {
      margin-bottom: 20px;
    }

    .footer-new-section .footer_logo img {
      width: 250px;
      height: auto;
      filter: brightness(0) invert(1);
      transition: transform 0.3s ease;
    }

    .footer-new-section .footer_logo img:hover {
      transform: scale(1.05);
    }

    .footer-new-section .footer_about_text {
      font-size: 14px;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 0;
      max-width: 320px;
    }

    /* ====== COLUMN 2: SOCIAL ICONS (CENTERED) ====== */
    .footer-new-section .footer_social_wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
      min-height: 180px;
      text-align: center;
    }

    .footer-new-section .footer_social_heading {
      font-size: 16px;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 18px;
      letter-spacing: 1px;
      text-transform: uppercase;
      position: relative;
      padding-bottom: 12px;
    }

    .footer-new-section .footer_social_heading::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 40px;
      height: 2px;
      background: #FF6B35;
      border-radius: 2px;
    }

    .footer-new-section .footer_social_links {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .footer-new-section .footer_social_icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.8);
      font-size: 18px;
      text-decoration: none;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .footer-new-section .footer_social_icon:hover {
      background: #FF6B35;
      color: #ffffff;
      transform: translateY(-4px) scale(1.05);
      box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
      border-color: #FF6B35;
    }

    /* ====== COLUMN 3: CONTACT INFO ====== */
    .footer-new-section .footer_heading {
      font-size: 18px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 22px;
      position: relative;
      padding-bottom: 12px;
      letter-spacing: 0.5px;
    }

    .footer-new-section .footer_heading::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: #FF6B35;
      border-radius: 2px;
    }

    .footer-new-section .footer_contact_list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-new-section .footer_contact_list li {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      margin-bottom: 16px;
      color: rgba(255, 255, 255, 0.75);
      font-size: 14px;
      line-height: 1.6;
    }

    .footer-new-section .footer_contact_list li i {
      /* color: #FF6B35; */
      font-size: 18px;
      min-width: 20px;
      margin-top: 2px;
      flex-shrink: 0;
    }

    .footer-new-section .footer_contact_list li span {
      word-break: break-word;
      flex: 1;
    }

    .footer-new-section .footer_text_break {
      word-break: break-all;
    }

    /* ====== COLUMN 4: TAGLINE ====== */
    .footer-new-section .footer_tagline_wrapper {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
      min-height: 180px;
      text-align: right;
    }

    .footer-new-section .footer_tagline {
      font-size: 28px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 8px;
      line-height: 1.2;
    }

    .footer-new-section .footer_tagline .highlight {
      color: #FF6B35;
    }

    .footer-new-section .footer_tagline_sub {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.5);
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    /* ====== BOTTOM COPYRIGHT ====== */
    .footer-new-section .footer_bottom_row {
      margin-top: 40px;
      padding: 20px 0 0;
      border-top: 1px solid rgba(255, 255, 255, 0.06);
    }

    .footer-new-section .footer_copyright_text {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.4);
      margin: 0;
      letter-spacing: 0.3px;
    }

    /* ======================================== */
    /* RESPONSIVE ADJUSTMENTS */
    /* ======================================== */
    @media (max-width: 992px) {
      .footer-new-section .footer_col_border:not(:last-child)::after {
        display: none;
      }

      .footer-new-section .footer_col_border {
        padding-bottom: 30px;
      }

      .footer-new-section .footer_about_text {
        max-width: 100%;
      }

      .footer-new-section .footer_tagline {
        font-size: 24px;
      }

      .footer-new-section .footer_social_wrapper {
        min-height: 140px;
      }

      .footer-new-section .footer_tagline_wrapper {
        min-height: 140px;
        text-align: left;
      }
    }

    @media (max-width: 768px) {
      .footer-new-section {
        padding: 40px 0 0;
      }

      .footer-new-section .footer_col_border {
        text-align: center;
        padding-bottom: 25px;
      }

      .footer-new-section .footer_heading::after {
        left: 50%;
        transform: translateX(-50%);
      }

      .footer-new-section .footer_about_text {
        margin-left: auto;
        margin-right: auto;
      }

      .footer-new-section .footer_social_wrapper {
        min-height: 120px;
      }

      .footer-new-section .footer_contact_list li {
        justify-content: center;
        text-align: left;
      }

      .footer-new-section .footer_contact_list li i {
        min-width: 20px;
      }

      .footer-new-section .footer_tagline_wrapper {
        align-items: center;
        text-align: center;
        min-height: 100px;
      }

      .footer-new-section .footer_tagline {
        font-size: 22px;
      }
    }

    @media (max-width: 576px) {
      .footer-new-section .footer_logo img {
        width: 250px;
      }

      .footer-new-section .footer_social_icon {
        width: 40px;
        height: 40px;
        font-size: 16px;
      }

      .footer-new-section .footer_contact_list li {
        font-size: 13px;
      }

      .footer-new-section .footer_heading {
        font-size: 16px;
      }

      .footer-new-section .footer_copyright_text {
        font-size: 12px;
      }

      .footer-new-section .footer_tagline {
        font-size: 20px;
      }

      .footer-new-section .footer_social_links {
        gap: 10px;
      }
    }

    /* ====== UTILITY ====== */
    .footer-new-section .footer_contact_responsive .footer_heading::after {
      left: 0;
    }

    @media (max-width: 768px) {
      .footer-new-section .footer_contact_responsive .footer_heading::after {
        left: 50%;
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body>
  <section class="footer-new-section ">
    <footer class=" container">
      <div class="container-fluid px-4 px-lg-5">
        <div class="row g-4">

          <!-- Column 1: Logo & About -->
          <div class="col-12 col-md-6 col-lg-6 col-xl-4 pe-lg-4 footer_col_border">
            <div class="footer_logo">
              <img src="./assets/img/logo.webp" alt="logo">
            </div>
            <p class="footer_about_text">
              We are a premium branding & creative agency, helping businesses stand out, attract customers and grow.
            </p>

            
              <!-- <h6 class="footer_social_heading">Connect With Us</h6> -->
              <div class="footer_social_links d-block d-xl-none">
                <a href="https://www.facebook.com/BhavicreationsPvtLtd/" target="_blank" class="footer_social_icon"><i
                    class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bhavicreations_pvtl" target="_blank" class="footer_social_icon"><i
                    class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" target="_blank"
                  class="footer_social_icon"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank" class="footer_social_icon"><i
                    class="bi bi-youtube"></i></a>
                <a href="https://in.pinterest.com/bhavicreations/" target="_blank" class="footer_social_icon"><i
                    class="bi bi-pinterest"></i></a>
              </div>
          
          </div>

          <!-- Column 2: Social Icons (Centered) -->
          <div class="col-12 col-md-6 col-lg-6 col-xl-5 pe-lg-4 footer_col_border d-none d-xl-block">
            <div class="footer_social_wrapper">
              <h6 class="footer_social_heading">Connect With Us</h6>
              <div class="footer_social_links">
                <a href="https://www.facebook.com/BhavicreationsPvtLtd/" target="_blank" class="footer_social_icon"><i
                    class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bhavicreations_pvtl" target="_blank" class="footer_social_icon"><i
                    class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" target="_blank"
                  class="footer_social_icon"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank" class="footer_social_icon"><i
                    class="bi bi-youtube"></i></a>
                <a href="https://in.pinterest.com/bhavicreations/" target="_blank" class="footer_social_icon"><i
                    class="bi bi-pinterest"></i></a>
              </div>
            </div>
          </div>

          <!-- Column 3: Contact Info -->
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer_col_border footer_contact_responsive d-flex justify-content-center ">
            <div class="div">
            <h6 class="footer_heading">Contact Us</h6>
            <ul class="footer_contact_list">
              <li>
                <i class="bi bi-geo-alt"></i>
                <span>Plot no 28, RTO Office Rd, behind Lazza Ice Cream, Ranga Rao Nagar, Kakinada, Andhra Pradesh 533003</span>
              </li>
              <li>
                <i class="bi bi-telephone"></i>
                <span>+91 96423 43434</span>
              </li>
              <li>
                <i class="bi bi-envelope"></i>
                <span class="footer_text_break">admin@bhavicreations.com</span>
              </li>
            </ul>
            </div>
          </div>

        </div>

        <!-- Bottom Copyright Area -->
        <div class="row footer_bottom_row mb-4">
          <div class="col-12 text-center">
            <p class="footer_copyright_text text-white">
              &copy; 2022 Bhavi Creations Pvt Ltd. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
  </section>

 <style>

    
.social-media{
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    z-index: 999;
    background: #fff;
    padding: 8px 8px;
    border-radius: 14px 0 0 14px;
    box-shadow: 0 4px 12px rgba(0,0,0,.12);
}

.social-media a{
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

/* Brochure Image */
.social-media img{
    width: 30px;
    height: 30px;
    border-radius: 8px;
    transition: .3s;
}

/* WhatsApp */
.whatsapp-icon{
    width: 32px !important;
    height: 32px !important;
    background: #25D366;
    color: #fff;
    font-size: 24px;
    border-radius: 50%;
    transition: .3s;
}

.social-media img:hover,
.whatsapp-icon:hover{
    transform: scale(1.08);
}


.scrollBtn{
    display:none;
    position:fixed;
    bottom:25px;
    right:20px;
    width:45px;
    height:45px;
    border:none;
    border-radius:50%;
    background:#01539D;
    color:#fff;
    cursor:pointer;
    z-index:999;
    font-size:22px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.scrollBtn:hover{
    background:#246BFF;
}
</style>

<div class="social-media">

    <!-- Download Brochure -->
    <a href="./assets/img/Bhavi Brochure.pdf"
       download
       title="Download Brochure">
        <img src="./assets/img/download.png"
             alt="Download Brochure"
             style="width:50px;">
    </a>

    <!-- WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=919642343434"
       target="_blank"
       title="Chat on WhatsApp"
       class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>

</div>

<button id="scrollBtn" class="scrollBtn" title="Back to Top">
    <i class="bi bi-arrow-up"></i>
</button>



<script>
const scrollBtn = document.getElementById("scrollBtn");

window.onscroll = function () {
    if (document.documentElement.scrollTop > 200) {
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
};

scrollBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};
</script>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

</body>


</html>