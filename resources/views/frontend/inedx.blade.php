@extends('frontend.main_master')
@section('main')
<body>
  <!-- ======= Hero Section ======= -->
  
  


  <section id="hero">
    <div class="hero-container">
      <div class="typewriter-container">
        <h3>
          {{  __('messages.hero_welcome')}}  <span class="typed-text" id="typewriter"></span><span class="cursor">|</span>
        </h3>
      </div>
      {{-- <h3>{{  __('messages.hero_welcome')}} <span class="text-info">{{ __('messages.company')}}</span></h3> --}}
      <h1>{{ __('messages.hero_title')}}</h1>
      <h2>{{ __('messages.hero_subtitle')}}</h2>
      <a href="#about" class="btn-get-started scrollto"> {{ __('messages.hero_button')}}</a>
    </div>
  </section>
  <!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{ __('messages.about_title')}}</h2>
          <h3>{{ __('messages.about_heading')}} <span>{{ __('messages.About_Us')}}</span></h3>
          <p>{{ __('messages.about_description')}}</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>{{ __('messages.about_p1')}}</p>
            <ul>
              <li><i class="ri-check-double-line"></i> {{ __('messages.about_li1')}}</li>
              <li><i class="ri-check-double-line"></i> {{ __('messages.about_li2')}}</li>
              <li><i class="ri-check-double-line"></i> {{ __('messages.about_li3')}}</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>{{ __('messages.about_p2')}}</p>
            <a href="#" class="btn-learn-more">{{ __('messages.about_button')}}</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ========== -->
    @include('backend.services.all_services')
    <!-- ======= End Services Section ======= -->

    <!-- ======= Features Section ======= -->
     <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">{{ __('messages.feature12')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">{{ __('messages.feature1')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">{{ __('messages.feature2')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4 mt-md-6">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">{{ __('messages.feature3')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">{{ __('messages.feature4')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">{{ __('messages.feature5')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">{{ __('messages.feature6')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">{{ __('messages.feature7')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">{{ __('messages.feature8')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">{{ __('messages.feature9')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">{{ __('messages.feature10')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">{{ __('messages.feature11')}}</a></h3>
            </div>
          </div>
        </div>

      </div> 
    
    </section><!-- End Features Section --> 

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="text-center">
          <h3>{{ __('messages.cta_title')}}</h3>
          <p>{{ __('messages.cta_description')}}</p>
          <a class="cta-btn" href="#">{{ __('messages.cta_button')}}</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>{{ __('messages.portfolio_title')}}</h2>
          <h3>{{ __('messages.portfolio_heading')}}<span> {{ __('messages.portfolio_span')}}</span></h3>
          <p>{{ __('messages.portfolio_description')}}</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{ __('messages.filter_all')}}</li>
              <li data-filter=".filter-web">{{ __('messages.filter_web')}}</li>
              <li data-filter=".filter-app">{{ __('messages.filter_app')}}</li>
              <li data-filter=".filter-card">{{ __('messages.filter_card')}}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 1</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    @include('backend.our_team.all_team') 
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
     {{-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Our Competing <span>Prices</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Pricing Section --> 

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>{{ __('messages.faq_title')}}</h2>
          <h3>{{ __('messages.faq_heading')}} <span>{{ __('messages.faq_span')}}</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">{{ __('messages.question1')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>{{ __('messages.answer1')}}</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">{{ __('messages.question2')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>{{ __('messages.answer2')}}</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">{{ __('messages.question3')}}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p> {{ __('messages.answer3')}}</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">{{ __('messages.question4')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>{{ __('messages.answer4')}}</p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
   @include('Contact_us.create')
    <!-- End Contact Section -->

    <!-- ======= post Section ======= -->
    {{-- @include('posts.all_posts'); --}}
    <!-- ======= post Section ======= -->
  {{-- </main> --}}
  <!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @endsection