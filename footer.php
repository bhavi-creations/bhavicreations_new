<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



<style>
    .neurostar-footer-section {
  /* Dark Blue Gradient matching the image */
  background: linear-gradient(135deg, #023877 0%, #084c94 50%, #00224d 100%);
  overflow: hidden;
}

/* Right side Floating Buttons Styles */
.floating-side-menu .floating-btn {
  width: 50px;
  height: 50px;
  background: rgba(255, 255, 255, 0.2);
  border: 2px solid rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(5px);
  transition: all 0.3s ease;
}

.floating-side-menu .floating-btn:hover {
  background: #ffffff;
  color: #023877 !important;
  transform: scale(1.1);
}
</style>
<!-- Footer Section Start -->
<footer class="neurostar-footer-section py-5 position-relative text-white">
  <div class="container py-3">
    <div class="row align-items-center text-center">
      
      <!-- Left Column: Contact Us -->
      <div class="col-lg-4 mb-4 mb-lg-0 text-lg-center d-none d-lg-block ">
        <h3 class="fw-bold mb-4">Contact Us</h3>
        
        <!-- Phone Number -->
        <div class="d-flex align-items-center justify-content-center mb-3">
          <i class="fa-solid fa-phone fs-4 me-2"></i>
          <span class="fs-5 fw-semibold">: : +91 9642343434</span>
        </div>
        
        <!-- Email Box -->
        <div class="d-flex align-items-center justify-content-center mb-4">
          <div class="bg-light text-dark rounded px-2 py-1 me-2 d-inline-flex align-items-center justify-content-center shadow-sm" style="width: 40px; height: 32px;">
            <i class="fa-regular fa-envelope fs-5"></i>
          </div>
          <a href="mailto:admin@bhavicreations.com" class="text-white text-decoration-none fs-5 fw-semibold"> 
admin@bhavicreations.com</a>
        </div>
        
        <!-- Social Icons -->
        <div class="d-flex justify-content-center gap-3 fs-5">
          <a href="https://www.facebook.com/BhavicreationsPvtLtd/" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/bhavicreations_pvtltd/" class="text-white"><i class="fa-brands fa-instagram"></i></a>
          <!-- <a href="#" class="text-white"><i class="fa-brands fa-x-twitter"></i></a> -->
          <a href="https://www.youtube.com/@bhavicreationspvtltd" class="text-white"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" class="text-white"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="https://in.pinterest.com/bhavicreations/" class="text-white"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
      </div>

      <!-- Center Column: Logo -->
               <!-- <img src="assets/img/111.png" alt="Neurostar Logo" > -->

      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 d-flex justify-content-center" stylel>
        <img src="./assets/img/logo.webp" alt="BHAVI CREATIONS PVT LTD" class="img-fluid" style="max-width: 280px;">
     
     
    </div>

      <!-- Right Column: Address -->
      <div class="col-lg-4 col-md-6 text-lg-center">
        <h3 class="fw-bold mb-4">Address</h3>
        <p class="mb-0 fs-5 lh-base px-xl-4">
Behind J.N.T.U Engineering College Play Ground, Ranga Rao Nagar, Kakinada, Andhra Pradesh 533003      </p>
      </div>

    </div>
  </div>

  <!-- Right Floating Action Buttons -->
 
</footer>

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