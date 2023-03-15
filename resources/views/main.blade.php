<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UbudCare Clinic</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VF3SS120CG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VF3SS120CG');
</script>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png')}}" alt="">
        <span>UbudCare</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome to UbudCare</h1>
          <h2 data-aos="fade-up" data-aos-delay="400"> Located at the heart of scenic and tranquil Ubud area. <br>
            We are available for in-office (clinic) consultations and on-site visits. </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>About Us</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
          {{-- <img src="{{asset('assets/img/hero-img.jpg')}}" class="img-fluid" alt=""> --}}
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-4 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>UbudCare is a group of medical professionals dedicated to provide you a warm and personalised health care like no other.</h2>
              <p>
                “The Art of Caring”
Medicine is both art and science. Ubud is one of Bali’s major arts and cultural centres. We believe that there’s also an art in caring for the unwell. And we use that special art to deliver the best science of healthcare to you.
              </p>
              <div class="text-center text-lg-start">
                <a href="#services" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Here Our Services</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img src="{{asset('assets/img/icon1.png')}}" alt="">
              <h3>Medical Doctor</h3>
              <p>Our well trained, english speaking medical doctors are always ready to give you a comprehensive medical consultation. 
                Because your health and comfort is our priority, we provide 24 hours consultation via email/phone as required beyond the excellent medical treatment and advice at our medical facility.              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <img src="{{asset('assets/img/icon2.png')}}" alt="">
              <h3>Specialist Appointment</h3>
              <p>Our team of medical specialists are always ready to assist you for a more elaborate, specific medical consultation, examination & treatment. 
                With our simple appointment system, you will be able to communicate with a specialist in no time at all.
              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="{{asset('assets/img/icon3.png')}}" alt="">
              <h3>Home Visit/Oncall Doctor
              </h3>
              <p>Our team of doctors & nurses are ready to provide you with a simple & accurate medical assistance right at your homestay, villa or hotel within Ubud area in less than 20 minutes (Guaranteed). Therefore, if you put your time and health as your top priorities, there’s no need to queue waiting at the clinic, just pick up the phone and call us now or drop us an email or fill the online appointment form.

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="{{asset('assets/img/icon4.png')}}" alt="">
              <h3>Homecare
              </h3>
              <p>Our Home Care team provide complete medical consultation, evaluation and treatment for you at your home: post hospitalization, terminal illness, elderly patient care, routine wound care, or even a personal nurse standing by at your side for a whole day. Whenever you find the hospital as too expensive and/or mainstream, we will provide the right personalised care just for you.</p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="{{asset('assets/img/icon5.png')}}" alt="">
              <h3>Pharmacy</h3>
              <p>Our pharmacy team will cater all your prescription and over-the-counter medication needs. If you need something that we don’t readily have, you can rest assured that we will do our best to find them for you. We’ll make sure that you fully understand your medications. And unlike others, our medications won’t cost you an arm and a leg.

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <img src="{{asset('assets/img/icon6.png')}}" alt="">
              <h3>Simple to Moderate Wound Care
              </h3>
              <p>Do not wait until a wound gets infected. We provide a range of simple to extensive medical assistance in dealing with wounds using sterile equipment and procedures.

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
            <div class="service-box blue">
              <img src="{{asset('assets/img/icon7.png')}}" alt="">
              <h3>Vaccination</h3>
              <p>We provide a wide variety of vaccinations. Both for emergency or urgent purposes (Rabies, Tetanus) or new and booster vaccinations (Hepatitis, Typhoid, HPV, etc).

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
            <div class="service-box orange">
              <img src="{{asset('assets/img/icon8.png')}}" alt="">
              <h3>Laboratory</h3>
              <p>Our medical team is backed up with a quick response laboratory check up, from a simple quick check for tropical diseases to a battery of tests for general medical check up.

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
            <div class="service-box green">
              <img src="{{asset('assets/img/icon9.png')}}" alt="">
              <h3>Ground Medical Assistance</h3>
              <p>Our special, one of a kind medical service in Ubud: Medical pick-up & transportation, patient escort & medical liaison services to solve all your medical/health related problems. Let us be your personal concierge today.

              </p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    

    {{-- <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section --> --}}

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery</p>
        </header>

        {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-clinic">Clinic</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              
            </div>
          </div> --}}

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

      

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-13.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-10.jpg')}}" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-12.jpg')}}" class="img-fluid" alt="">
              
            </div>
          </div> --}}

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-14.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-16.jpg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-17.jpeg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-18.jpeg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-clinic">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/portfolio-19.jpeg')}}" class="img-fluid" alt="">
              {{-- <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div> 
              </div>--}}
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>L. Younger</h3>
                  <h4>Australia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Great Clinic in Ubud! My husband had a medical emergency while we were in Ubud.

This medical clinic picked us up from our room, took us to the facility (on a Sunday), treated my husband, showed us videos of his condition, recommended a specialist, wrote a prescription, drove us to the pharmacy, drove us back to our room, sent us documents for our insurance and flight cancellations and followed up with us by phone and email. ALL Of these services for $50 US dollars. I can’t say enough about this health center. Great professional, compassionate medical care. The pick up and drop off are free. You can also have the doctor come to your room for a very reasonable fee.

Thank You, and next time in Ubud we will choose you for any medical needs.
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>S.L. Gikovate</h3>
                  <h4>Brazil</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  The UbudCare Clinic is the absolute BEST!!!!! I can’t tell you how truly wonderful the doctors and staff are at this facility. I was very nervous to visit a local Bali clinic this month while on vacation but I knew I needed medical help as I was very sick with a virus. I would put these 2 wonderful doctors up against any Western Doctor I know. They were very kind, knowledgeable, informative, compassionate, and I felt very safe in their hands! So if you are in the same potion as I was and you are in the Ubud area please don’t hesitate to visit them for any reason. I promise you will have a great experience! Thank you again Ubud Health Care!
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>M. Bangay</h3>
                  <h4>Canada</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I feel so incredibly lucky to have found this clinic online while I was going through a bit of a medical scare in Ubud. The doctor’s and staff at the clinic took such good care of me and made me feel completely at ease while I was so far from home.
Staff picked me up at my hotel, I saw a doctor immediately, they helped me fill my prescriptions and drove me back to my hotel. They even drove to Denpasar to pick up a prescription that wasn’t available in Ubud and dropped it off at my hotel for me.
I would recommend the UbudCare Centre to anyone looking for medical attention in Ubud.
                </p>
                
              </div>
            </div><!-- End testimonial item --> 
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>C. Williams</h3>
                  <h4>Australia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Looked after our friend with the most professional care. Visited the villa and stayed for hours. Minimal charge. And our friend is better now as a result of care. She was so sick she couldn’t get out of bed but now much better. Terimakasih. Recommend to everyone. Better care than in Australia!
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>D. Willemsen</h3>
                  <h4>Dutch</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Amazing clinic. Had to come in a couple of times after a little bike accident, always really friendly people at the desk, every doctor I had was always super nice and took their time with you. Super clean, super sweet people; I prefer this place to my own doctor back home! Highly recommend.
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>P. Evans</h3>
                  <h4>UK</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  All of the staff, without exception, were outstanding. Thanks.
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>J. Batterbee</h3>
                  <h4>Australia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Friendly efficiency of the staff. Genuine knowledge and professionalism of the doctors is why I chose this health facility. I live in Bali and know it isn’t always easy to find medical staff that you are comfortable with!
                </p>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>H. Armin</h3>
                  <h4>German</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I come to Bali since 1993 and UbudCare is the best Clinic with the best Doctor and medical stuff I ever went all this time! Thank you very much for the best service!
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>D. Ridha</h3>
                  <h4>USA</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Best doctors in town! Thorough, caring, honest. Super fast and always available to reach. Honestly, this is the only place to go. Thank you for your professional and personal care!
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <h3>B. Lamb</h3>
                  <h4>Australia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fantastic service. I was a bit nervous at first but UbudCare lived up to the other reviews. Quick, easy and painless. Better than most clinics back in Australia. I was also picked up and dropped off from my hotel free of charge. Now i can continue on with my holiday. Highly recommend!
                </p>
                
              </div>
            </div><!-- End testimonial item --> 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    {{-- <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section --> --}}

    

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>UbudCare Clinic Teges</p>
          
        </header>

        
        <div class="row gy-4">

          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31565.97337144204!2d115.269393!3d-8.523958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc07326ea6f4b0acb!2sUbudCare%20Clinic%20(24%20Hours)!5e0!3m2!1sen!2sid!4v1663569303658!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-12">
            <div class="row gy-4">
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p> Jl. Raya Teges No.8,
                    Peliatan, Ubud, Gianyar, Bali 80571
                    <br>
                    </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62-811-3977-911 <br> &nbsp; </p> 
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>contact@ubudcare.com<br> &nbsp;
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Sunday<br>24 Hours</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <header class="section-header">
          <h2>Contact</h2>
          <p>UbudCare Clinic Tebasaya</p>
          
        </header>
        <div class="row gy-4">
          
          

            <div class="col-lg-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8519240773962!2d115.26565261478291!3d-8.513754593879314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6e438ba6c5%3A0x8fcd87d2ef4bac85!2sUbudCare!5e0!3m2!1sen!2sid!4v1663570025678!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>


            <div class="col-lg-12">
  
              <div class="row gy-4">
                <div class="col-md-3">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address </h3>
                    <p> Jl. Sukma No. 37, Br. Tebasaya,
                      Peliatan, Ubud, Gianyar, Bali 80571
                      <br>
                      </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+62-821-8888-CARE (2273) <br> &nbsp; </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@ubudcare.com <br>&nbsp;</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Sunday<br>07:00AM - 10:00PM</p>
                  </div>
                </div>
              </div>
            </div>
  
          
          {{-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div> --}}

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>UbudCare</span>
            </a>
            <p>UbudCare is a group of medical professionals dedicated to provide you a warm and personalised health care like no other.</p>
            <div class="social-links mt-3">
              {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
              <a href="https://www.facebook.com/ubudcare/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/ubudcare/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
              {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
            </div>
          </div>

          {{-- <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="testimonials">Testimonials</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-6-md 12 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="testimonials">Testimonials</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              UbudCare<br>
              +62-821-8888-CARE (2273) <br>
              +62-811-3977-911 <br>
              info@ubudcare.com <br>
              contact@ubudcare.com
            </p>

          </div>

        </div>
      </div>
    </div>

    {{-- <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> --}}
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>