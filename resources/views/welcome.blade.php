<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ROLEX</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../landing-page/assets/img/favicon.png" rel="icon">
  <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../landing-page/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceRestaurant
  * Template URL: https://bootstrapmade.com/nice-restaurant-bootstrap-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">ROLEX</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Dashboard</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#book an appointment">Book an Appointment</a></li>
          <li><a href="#owner">Owner</a></li>
         
            
          </li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="#book an appointment">Book an Appointment</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
              <h2>"Experience Timeless Elegance with Rolex"</h2>
              <p>Discover our curated collection of authentic Rolex timepieces — precision, luxury, and legacy in every tick.</p>

              
            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/restaurant/misc-square-1.webp" alt="Restaurant Ambience">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/restaurant/misc-square-3.webp" alt="Signature Dish">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/restaurant/misc-square-2.webp" alt="Expert Chefs">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>Timeless Excellence</h3>
              <p class="fst-italic">Welcome to ROLEX, your trusted destination for authentic ROLEX timepieces.</p>
              <p>Founded with a passion for precision, heritage, and elegance, our store is dedicated to delivering not just a watch—but a legacy. We specialize in Rolex watches, known globally for their unparalleled craftsmanship, iconic design, and enduring value.</p>

              <div class="chef-signature mt-4">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="../../../landing-page/assets/img/restaurant/chef-1.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
                  </div>
                  <div class="col">
                    <p class="chef-message mb-2">"Our passion lies in precision, prestige, and preserving timeless elegance."</p>
                    <p class="chef-name">OWNER</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
              <img src="../../../landing-page/assets/img/restaurant/showcase-4.webp" class="img-fluid main-image shadow" alt="Restaurant Interior">
              <img src="../../../landing-page/assets/img/restaurant/showcase-2.webp" class="img-fluid accent-image shadow" alt="Chef Preparing Food">
              <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 1905</span>
            </div>
          </div>
        </div>

        

      </div>

    </section><!-- /About Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ALL ROLEX</h2>
        <p>Classic, understated, and versatile. A symbol of Rolex heritage with unmatched precision and timeless style.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="menu-filters isotope-filters mb-5">
            <ul>
              <li data-filter="*" class="filter-active">All</li>
             
            </ul>
          </div>

          <div class="menu-container isotope-container row gy-4">

            <!-- Regular Menu Items -->
            <div class="col-lg-6 isotope-item filter-starters">
              <div class="menu-item d-flex align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/starter-2.webp" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5> Rolex Daytona “Paul Newman” <span class="menu-tag">Ref. 6239</span></h5>
                  <p>This exact watch was worn by actor Paul Newman himself. It's the most expensive Rolex ever sold at auction.</p>
                  <div class="price">₱ 542 Million </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-starters">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/starter-5.webp" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5> Rolex Daytona “The Unicorn” <span class="menu-tag">Ref. 6265</span></h5>
                  <p>The only known white gold manual-winding Daytona, made in 1970. Nicknamed “The Unicorn.”</p>
                  <div class="price">₱ 511 Million </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/main-1.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Rolex Bao Dai<span class="menu-tag">Ref. 6062</span></h5>
                  <p> Owned by the last emperor of Vietnam, Bao Dai. Features a rare black dial with diamond markers..</p>
                  <div class="price">₱ 499 Million</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/main-4.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Rolex GMT-Master II Ice<span class="menu-tag">Ref. 6257</span></h5>
                  <p>Modern Rolex completely covered in diamonds—case, bracelet, dial. One of the most expensive new Rolex models you can buy from Rolex itself.</p>
                  <div class="price">₱ 497 Million</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/dessert-2.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Rolex Antimagnetique <span class="menu-tag">Ref. 4113</span></h5>
                  <p>Made in 1942, only 12 pieces exist. Not sold to the public—meant for racing team managers.</p>
                  <div class="price">₱ 479 Million</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/dessert-7.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Rolex Daytona “Oyster Albino” <span class="menu-tag"> Ref. 6263</span></h5>
                  <p>Extremely rare silver (albino) dial, only 4 known in the world. Eric Clapton owned one.</p>
                  <div class="price">₱ 468 Million</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/drink-3.webp" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Rolex Deep Sea Special<span class="menu-tag">Ref. 6289</span></h5>
                  <p> One of the first watches to reach the bottom of the Mariana Trench in the 1960s. Historic prototype.</p>
                  <div class="price">₱ 460 Million </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/restaurant/drink-8.webp" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5> Rolex Submariner “James Bond” <span class="menu-tag"> Ref. 6538</span></h5>
                  <p> Worn by Sean Connery in the first James Bond films. Large crown, no crown guards. Super collectible.</p>
                  <div class="price">₱ 457 Million </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      

        <!-- Chef's Specials -->
        <div class="col-12 mt-5" data-aos="fade-up">
          <div class="specials-badge">
            <span><i class="bi bi-award"></i>Most Expensive </span>
          </div>
          <div class="specials-container">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="../../../landing-page/assets/img/restaurant/main-3.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Only One in the world</span>
                      <span class="badge-vegan">limited</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4> Rolex Cosmograph Daytona “Rainbow”</h4>
                    <p> Covered with multi-colored sapphires on bezel and indexes. Celebrities love this piece — worn by Post Malone, Mark Wahlberg.</p>
                    <div class="menu-item-price">₱ 15 Billion</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="../../../landing-page/assets/img/restaurant/main-7.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Only One in the world</span>
                      <span class="badge-spicy">limited</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4>Rolex Pearlmaster 39</h4>
                    <p> 18k yellow diamond, diamond-paved dial, green sapphire bezel. One of the most expensive ladies’ Rolexes.</p>
                    <div class="menu-item-price">₱ 17 Billion</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>RATINGS</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                I waited 8 months for my Rolex Datejust—but it was worth it. The team updated me regularly. Gorgeous boutique, highly recommend!”
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                  <h3>Elon Musk</h3>
                  <h4> SpaceX,Tesla,xAI, and XCorp</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
               “Flawless experience from the moment I walked in. The staff knew every detail about the Daytona I bought. True luxury.”
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                  <h3>Mark Zuckerberg</h3>
                  <h4>Meta Platforms</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “I love my Submariner, but I had to wait longer than expected. Still, their professionalism made up for it.”
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                  <h3>Larry Ellisonis</h3>
                  <h4>Oracle Corporation</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “The ambiance is top-class, but they didn’t have the exact model I wanted in stock. Had to pre-order.”
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
                  <h3>	Jeff Bezos</h3>
                  <h4>Amazon, Blue Origin</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
               “Walked in without an appointment and wasn’t assisted quickly. Would return only with a booking.”
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
                  <h3>Bernard Arnault</h3>
                  <h4>LVMH (luxury goods)</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Chefs Section -->
    <section id="owner" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>OWNER</h2>
        <p>A Passion for Precision. A Legacy of Luxury.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5">
            <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
              <figure class="chef-image">
                <img src="../../../landing-page/assets/img/restaurant/chef-1.webp" class="img-fluid" alt="Executive Chef">
              </figure>
              <div class="chef-details">
                <h3>OWNER</h3>
                <h2>ALBERT BAUTISTA</h2>
                <p>As the proud owner of a premier luxury watch boutique, I am driven by a deep appreciation for timeless craftsmanship, precision engineering, and sophisticated design. With years of experience in the high-end timepiece industry, I have curated a collection that reflects not just status—but legacy.</p>
                <div class="chef-signature">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="team-container" data-aos="fade-left" data-aos-delay="300">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/restaurant/chef-2.webp" class="img-fluid" alt="Chef Portrait">
                      
                    </div>
                    <div class="chef-info">
                      <h4>JUDY DURANO</h4>
                      <p class="role">Store Manager</p>
                      <p class="details">I am responsible for overseeing the daily operations of the store, ensuring that every aspect runs smoothly and efficiently. I lead the team with a focus on customer satisfaction, staff development, and sales performance.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/restaurant/chef-3.webp" class="img-fluid" alt="Chef Portrait">
                     
                    </div>
                    <div class="chef-info">
                      <h4>LUNA REDOBLE</h4>
                      <p class="role">Sales Manager </p>
                      <p class="details"> I lead with strategy, energy, and precision to drive business growth and maximize revenue. I oversee the sales team, set clear performance goals, and implement effective sales strategies that align with the company's vision.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/restaurant/chef-4.webp" class="img-fluid" alt="Chef Portrait">
                      
                    </div>
                    <div class="chef-info">
                      <h4>RINEL UROT</h4>
                      <p class="role">Rolex-Certified Watch Technician</p>
                      <p class="details">I specialize in the precision service, restoration, and maintenance of Rolex timepieces, upholding the brand’s world-renowned standards of craftsmanship and excellence.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/restaurant/chef-5.webp" class="img-fluid" alt="Chef Portrait">
                      
                    </div>
                    <div class="chef-info">
                      <h4>NIEL RESABA</h4>
                      <p class="role">Customer Service / Front Desk</p>
                      <p class="details"> I am the first point of contact for every guest who enters our store, ensuring each experience begins with warmth, professionalism, and efficiency.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book an appointment" class="book an appointment">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="reservation-info">
              <div class="text-content">
                <h3>Book an Appointment</h3>
                <p>Complimentary refreshments in a relaxed and elegant environment</p>

                <div class="reservation-details mt-4">
                  <div class="detail-item">
                    <i class="bi bi-clock"></i>
                    <div>
                      <h5>Opening Hours</h5>
                      <p>Monday - Friday: 11:00 AM - 11:00 PM<br>
                        Saturday - Sunday: 10:00 AM - 12:00 AM</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h5>Location</h5>
                      <p>CITY OF NAGA<br>
                        SOUTH POBLACION</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h5>Call Us</h5>
                      <p>0956 456 123</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="reservation-image">
              <img src="../../../landing-page/assets/img/restaurant/showcase-7.webp" alt="Restaurant interior" class="img-fluid rounded">
            </div>
          </div>
        </div>

       
        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Contact Section -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.6778300137407!2d123.75457197400989!3d10.206796469444315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9785205269c2d%3A0xa554994d49b45f64!2sRizal%20St%2C%20Naga%2C%20Cebu!5e0!3m2!1sen!2sph!4v1753831134342!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                  <p>Rizal Street,South Pob</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Contact us</h3>
                  <p>0956 456 123</p>
                  <p class="small-text">We recommend making reservations at least 48 hours in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                  <div class="hours-grid">
                    <div class="day">Monday - Thursday</div>
                    <div class="time">11:00 AM - 10:00 PM</div>

                    <div class="day">Friday - Saturday</div>
                    <div class="time">11:00 AM - 11:30 PM</div>

                    <div class="day">Sunday</div>
                    <div class="time">10:00 AM - 9:00 PM</div>

                    
                  </div>
                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
              </div>
        </div>

      </div>

   
    </section><!-- /Events Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>Rizal Street,South Pob</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>albert@gmail.com</p>
                <p>albert bautista fb.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Sunday-Fri: 8:00 AM - 12:00PM</p>
                <p>Saturday: 9:00AM - 4:00PM</p>
              </div>
            </div>
          </div>
        </div>

      </div>

     

      
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">ROLEX</span>
          </a>
          <p>"Experience Timeless Elegance with Rolex"
Discover our curated collection of authentic Rolex timepieces — precision, luxury, and legacy in every tick.</p>
          
        </div>

       

        <div class="col-lg-2 col-6 footer-links">
          
          <ul>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Rizal Street,South Pob</p>
          <p>CITY OF NAGA</p>
          <p>philippines</p>
          <p class="mt-4"><strong>Phone:</strong> <span>0956 456 123</span></p>
          <p><strong>Email:</strong> <span>albert@gmail.com</span></p>
        </div>

      </div>
    </div>

    

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../landing-page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../landing-page/assets/js/main.js"></script>

</body>

</html>