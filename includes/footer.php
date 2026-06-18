<section class="evlated-section">
    <div class="container">
       <p>Elevate your projects with our premium imagery. <a href="#">Start now.</a></p>
    </div>
</section>
<footer class="footer-bg">
      <div class="container">
        <div class="col">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="footer-logo">
                  <div class="f-logo-img">
                    <img src="./img/f-logo.svg" alt="" class="img-fluid d-none d-lg-block d-md-block">
                    <img src="./img/f-logo-mo.svg" alt="" class="img-fluid d-block d-lg-none d-md-none">
                  </div>
                  <div class="footer-menu-list">
                     <ul>
                       <li>
                         <a href="search.php">Browse</a>
                       </li>
                       <li>
                         <a href="pricing.php">Pricing & Perks</a>
                       </li>
                       <li>
                         <a href="about.php">About Us</a>
                       </li>
                       <li>
                         <a href="faq.php">FAQ’s</a>
                       </li>
                       <li>
                         <a href="contact_us.php">Contact Us</a>
                       </li>
                     </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="footer-right">
                  <img src="./img/Mastercard.png" alt="" class="img-fluid">
                  <p>
                    Address <br>
                  Email, Phone Number
                  </p>
              </div>
            </div>
          </div>
          <div class="row  footer-divider">
             <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-0 order-1">
                  <p>© 2026 Light Frame Collective. All rights reserved.</p>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul>
                    <li>
                      <a href="tc.php">Terms</a>
                    </li>
                    <li>
                      <a href="pp.php">Privacy</a>
                    </li>
                    <li>
                      <a href="cookies.php">Cookies</a>
                    </li>
                  </ul>
             </div>
          </div>
        </div>
      </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <script>
      $(document).ready(function () {
        $(".Categories-btn").click(function(){
          $(".Categories-main").toggleClass("add-white-space");
        });
      });
    </script>
  
    
    <script>
      window.addEventListener('scroll', function() {
          var content = document.querySelector('header');
          var scrollPosition = window.scrollY;
          if (scrollPosition > 10) {
              content.classList.add("header-scroll")
          } else {
              content.classList.remove("header-scroll")
          }
      });
    </script>
    <script>
      AOS.init();
    </script>
</body>
</html>
