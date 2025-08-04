<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}" dir="{{ config('app.direction')}}">

  <head>


     <!-- مثال على خط Cairo -->

    <meta charset="UTF-8">
    {{-- <meta name="vieport" content="width=device-width, initial-scale=1.0"> --}}
  
    <title>Alpha4Tech</title>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Template Main CSS File -->
    @if (config('app.direction') == 'rtl')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/style_rtl.css')}}">

    @else
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" >
    @endif
    
    <!-- Favicons -->
    <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
    {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
  
    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vend/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vend/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vend/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vend/remixicon/remixicon.css')}}" rel="stylesheet">

  
    
  </head>
<body class="locale-{{ app()->getLocale()}}">
  <!-- =======Start Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      {{-- <h1 class="logo"><a href="#hero">Alpha4Tech</a></h1> --}}
     <a href="#hero"><img class="logo" width="70px" height="70px" src="{{asset('assets/img/alphalogo2.png')}}" alt="logo"></a>

      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">{{ __('messages.home')}}</a></li>
            <li><a class="nav-link scrollto" href="#about">{{ __('messages.about')}}</a></li>
            <li><a class="nav-link scrollto" href="#services">{{ __('messages.services')}}</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">{{ __('messages.portfolio')}}</a></li>
            <li><a class="nav-link scrollto" href="#team">{{ __('messages.team')}}</a></li>
            <li><a class="nav-link scrollto" href="#contact">{{ __('messages.contact')}}</a></li>

            <li class="language-switcher-mobile">
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" onclick="event.stopPropagation()" href="#" id="langSwitcherMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  🌐 {{ strtoupper(app()->getLocale()) }}
               </a >
              <ul class="dropdown-menu dropdown-menu-end language-submenu" aria-labelledby="langDropdown">
                  <li>
                      <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                         href="{{ route('lang.switch', 'en')}}">
                          🇺🇸 English
                      </a>
                  </li>
                  <li>
                      <a class="dropdown-item {{ app()->getLocale() == 'ar' ? 'active' : '' }}" 
                        href="{{ route('lang.switch', 'ar')}}">
                          🇸🇦 العربية
                      </a>
                  </li>
              </ul>
           </div>
         </li>
      </ul>
   </nav>
    
       <!-- Language Dropdown -->
   <div class="nav-item dropdown language-switcher-desktop">
        <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      🌐 {{ strtoupper(app()->getLocale()) }}
    </a >
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
          <li>
              <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                 href="{{ route('lang.switch', 'en')}}">
                  🇺🇸 English
              </a>
          </li>
          <li>
              <a class="dropdown-item {{ app()->getLocale() == 'ar' ? 'active' : '' }}" 
                href="{{ route('lang.switch', 'ar')}}">
                  🇸🇦 العربية
              </a>
          </li>
      </ul>
   </div>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
  </header>

  <!-- =======End Header ======= -->
  @yield('main')

   <!-- =======Start Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ __('messages.footer_title')}}</h3>
            <p>
              {{ __('messages.footer_prograph')}}
               <br><br>
              <strong>{{ __('messages.footer_phone')}}:</strong> +1 5589 55488 55<br>
              <strong>{{ __('messages.footer_email')}}:</strong> alpha@tech.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{ __('messages.footer_link')}}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">{{ __('messages.home')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">{{ __('messages.about')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ __('messages.services')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">{{ __('messages.portfolio')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">{{ __('messages.team')}}</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Alpha4Tech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">Alpha4Tech</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">

        {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}

        <a href="https://www.facebook.com/profile.php?id=100075422817973" class="facebook" aria-label="Instagram" target="_blank"><i class="bx bxl-facebook"></i></a>

        <a href="https://www.facebook.com/profile.php?id=100075422817973" class="Instagram" aria-label="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>

        <a href="https://www.facebook.com/profile.php?id=100075422817973" class="twitter" aria-label="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>

        <a href="https://www.instagram.com/shreefomerhessen" class="linkedin" aria-label="Instagram" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

   <!-- =======End Footer ======= -->
   <!-- Vendor JS Files -->
   <script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

   <script src="{{asset('assets/js/main.js')}}"></script>
   <script src="{{asset('assets/vend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/vend/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{asset('assets/vend/isotope-layout/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('assets/vend/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('assets/vend/php-email-form/validate.js')}}"></script>

 
   <!-- js for Toastar flash Msge-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 {{-- <script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;
 
     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;
 
     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;
 
     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break; 
  }
  @endif 
 </script> --}}
 </body>
 
 </html>
</footer>