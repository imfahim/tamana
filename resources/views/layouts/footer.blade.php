<!-- Children Care List  _________________________________ -->
<section class="Children-Care-list-margin margin-top-0" style="padding-top: 20px, padding-bottom: 20px">
  <div class="container">
    <div class="Children-Care-list">
      <div id="Children-Care-List-Slider" class="owl-carousel owl-theme">
        <div class="item">
          <div class="text-center list-item">
            <i class="fa fa-shopping-cart"></i>
            <h6><a href="{{route('Shop.Index')}}">Shop</a></h6>
          </div> <!-- /.list-item -->
        </div> <!-- /.item -->
        <div class="item">
          <div class="text-center list-item">
            <i class="flaticon-donation-1"></i>
            <h6><a href="{{route('donate.page')}}">Donate</a></h6>
          </div> <!-- /.list-item -->
        </div> <!-- /.item -->
        <div class="item">
          <div class="text-center list-item">
            <i class="fa fa-hand-paper-o"></i>
            <h6><a href="{{route('pages.volunteer')}}">Volunteer</a></h6>
          </div> <!-- /.list-item -->
        </div> <!-- /.item -->
        <div class="item">
          <div class="text-center list-item">
            <i class="fa fa-envelope-o"></i>
            <h6><a href="{{asset('http://mail.tamana.org/bizmail/login')}}">Mail</a></h6>
          </div> <!-- /.list-item -->
        </div> <!-- /.item -->
      </div> <!-- / #Children-Care-List-Slider -->
    </div> <!-- /.Children-Care-list -->
  </div> <!-- /.container -->
</section> <!-- /.Children-Care-list-margin -->

<!-- them-main-footer-section _________________________________ -->
<!-- <footer class="them-main-footer-section">
  <div class="main-footer-top-section">
    <div class="container">
      <div class="footer-top-item">
        <h3>In 2017 donations from the UK transformed <br>the lives of more than</h3>
        <div class="Subscribe-footer-form">
          <p>Latest news delivered right to your inbox!</p>
          <form action="#">
            <input type="text">
            <button class="tran3s hvr-bounce-to-right">Subscribe</button>
          </form> -->
      <!--  </div> --><!-- /.Subscribe-footer-form -->
    <!--  </div>--> <!-- /.footer-top-item -->
    <!--</div>--> <!-- /.container -->
  <!--</div>--> <!-- /.main-footer-top-section -->

  <div class="them-main-footer-containt-item">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xs-12">
          <div class="footer-containt-item-text-and-logo">
            <div class="footer-logo"><a href="#"><img src="{{ asset('images/logo/theme-main-logo-2.png')}}" alt="logo"></a></div>
            <p>Tamana is a non-profit voluntary organization registered in March 1984, created solely with the purpose of helping the cause of mentally challenged, multiply disabled and autistic.</p>
          </div> <!-- /.footer-containt-item-text-and-logo -->
        </div> <!-- /.col -->
        <div class="col-md-7 col-xs-12">
          <div class="row">
            <div class="col-xs-4 footer-containt-width">
              <div class="footer-containt-item">
                <ul>
                  <li class="dropdown-holder"><a href="{{route('index')}}/#sec-centres">Centres</a></li>
                  <li><a href="{{route('training.index')}}">Training</a></li>
                  <li><a href="{{route('research.index')}}">Research</a></li>
                  <li class="dropdown-holder"><a href="{{ route('index') }}/#sec-services">Services</a></li>
                  <li><a href="#">Achievements</a></li>
                  <li class="dropdown-holder"><a href="{{route('index')}}/#sec-events">Events</a></li>
                </ul>
              </div> <!-- /.footer-containt-item -->
            </div> <!-- /.col -->
            <div class="col-xs-4 footer-containt-width">
              <div class="footer-containt-item">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Vacancies</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="{{asset('http://mail.tamana.org/bizmail/login')}}">Mail Box</a></li>
                </ul>
              </div> <!-- /.footer-containt-item -->
            </div> <!-- /.col -->
            <div class="col-xs-4 footer-containt-width">
              <div class="footer-containt-item">
                <ul>
                  <li><a href="{{route('pages.contact')}}">Contact Us</a></li>
                  <li><p style="color: white; font-size: 12px">Head office <br>
                    C-10/8, Vasant Vihar
                    New Delhi - 57<br>
                    Phone: +91-11-26148269/<br>26151587<br>
                    Telefax: +91-11-26148269<br>
                    Email:info@tamana.org</p></li>
                </ul>
              </div> <!-- /.footer-containt-item -->
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </div> <!-- /.col -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.them-main-footer-containt-item -->

  <div class="main-footer-bottom-section">
    <div class="container">
      <div class="clear-fix">
        <ul class="footer-bottom-left-said">
          <li><span>Made By Love <a href="#">Tamana IT</a> &copy;<script>document.write(new Date().getFullYear())</script>,</span></li>
          <li><span><a href="{{ route('index') }}">Tamana</a> All Rights Reserved</span></li>
        </ul> <!-- /.footer-bottom-left-said -->
        <ul class="footer-bottom-right-said">
          <li><a href="https://www.facebook.com/tamana.ngo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/tamanango"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCZY4IlUaKXwTZ7BHIWwNQQA"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul> <!-- /.footer-bottom-right-said -->
      </div> <!-- /.clear-fix -->
    </div> <!-- /.container -->
  </div> <!-- /.main-footer-bottom-section -->
</footer> <!-- /.them-main-footer-section -->
<!--  PAGE===END  _________________________________ -->
</div> <!-- /.main-page-wrapper -->


<!-- Scroll Top Button -->
<button class="scroll-top tran7s p-color-bg">
<i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<!-- pre loader  -->
<div id="loader-wrapper">
<div id="loader"></div>
</div>



<!-- js file -->
<!-- Main js file/jquery -->
<script src="{{ asset('vendor/jquery-2.2.3.min.js')}}"></script>
<!-- bootstrap-select.min.js -->
<script src="{{ asset('vendor/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- camera js -->
<script src="{{ asset('vendor/Camera-master/scripts/camera.min.js')}}"></script>
<script src="{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
<!-- Owl carousel -->
<script src="{{ asset('vendor/OwlCarousel2/dist/owl.carousel.min.js')}}"></script>
<!-- appear & countTo -->
<script src="{{ asset('vendor/jquery.appear.js')}}"></script>
<script src="{{ asset('vendor/jquery.countTo.js')}}"></script>
<!-- fancybox -->
<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script> <!-- video -->
<!--   <script src="vendor/fancybox/jquery.fancybox.pack.js"></script>   img -->
<!-- Gallery - isotop -->
<script type="text/javascript" src="{{ asset('vendor/isotope.pkgd.min.js')}}"></script>
<!-- WOW js -->
<script type="text/javascript" src="{{ asset('vendor/WOW-master/dist/wow.min.js')}}"></script>
<!-- Circle Progress -->
<script type="text/javascript" src="{{ asset('vendor/circle-progress.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/parsley.min.js')}}"></script>

<!-- Style js -->
<script src="{{ asset('js/custom.js')}}"></script>

</body>

<!-- Mirrored from themazine.com/html/chcharity/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2018 04:59:52 GMT -->
</html>
