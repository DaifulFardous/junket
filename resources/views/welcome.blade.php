<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/navber.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/meanmenu.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/img/favicon.png" />
  </head>

  <body>
    <div class="preloader">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="lds-spinner"></div>
        </div>
      </div>
    </div>
    <header class="main_header_arae">
      <div class="topbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <ul class="topbar-list">
                <li>
                  <a href="#!"><i class="fab fa-facebook"></i></a>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#!"><span>+8801734544744</span></a>
                </li>
                <li>
                  <a href="#!"><span>contact@Junket.com</span></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6">
              <ul class="topbar-others-options">
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Sign up</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-area">
        <div class="main-responsive-nav">
          <div class="container">
            <div class="main-responsive-menu">
              <div class="logo">
                <a href="index.html">
                  <img src="{{ asset('frontend') }}/img/logo.png" alt="logo" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="main-navbar">
          <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="index.html">
                <img src="{{ asset('frontend') }}/img/logo_black.png" alt="logo" />
              </a>
              <div
                class="collapse navbar-collapse mean-menu"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="#" class="nav-link active"> Home </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Groups </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      >Tour Plans <i class="fas fa-angle-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact v1</a>
                      </li>
                      <li class="nav-item">
                        <a href="contact-v2.html" class="nav-link"
                          >Contact v2</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Blogs </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Feed</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> About Us </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Contact </a>
                  </li>
                </ul>
                <div class="others-options d-flex align-items-center">
                  <div class="option-item">
                    <a href="#" class="search-box">
                      <i class="bi bi-search"></i>
                    </a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <div class="others-option-for-responsive">
          <div class="container">
            <div class="dot-menu">
              <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
              </div>
            </div>
            <div class="container">
              <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                  <div class="option-item">
                    <a href="#" class="search-box"
                      ><i class="fas fa-search"></i
                    ></a>
                  </div>
                  <div class="option-item">
                    <a href="contact.html" class="btn btn_navber"
                      >Get free quote</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="search-overlay">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-close">
            <span class="search-overlay-close-line"></span>
            <span class="search-overlay-close-line"></span>
          </div>
          <div class="search-overlay-form">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Search here..."
              />
              <button type="button"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section id="home_three_banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_area_three">
              <h3 class="top_banner_three_text">Welcome to Junket</h3>
              <h2>Making Your Travel Choices Easier</h2>
              <h3 class="bottom_banner_three_text">
                Find convinient Tour Plans and Packages
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="choose_destinations_area" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Choose your destinations</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-1.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>London | $13,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>China | $6000</h2>
                    <h3>8 days 7 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-2.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Gangtok | $3,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Gangtok | $3,500</h2>
                    <h3>7 days 6 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-3.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Phuket | $2,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Phuket | $2,500</h2>
                    <h3>7 days 7 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-4.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Sydney | $6,000</h2>
                    <h3>4 days 3 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Sydney | $6,000</h2>
                    <h3>4 days 3 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-5.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Gangtok | $3,500</h2>
                    <h3>9 days 8 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Gangtok | $3,500</h2>
                    <h3>9 days 8 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-6.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Pattaya | $4,200</h2>
                    <h3>5 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Pattaya | $4,200</h2>
                    <h3>5 days 6 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="three_We_area" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="we_offer_area_three">
              <h4 class="three_heading_area">What we offer</h4>
              <h2>Discover all magnificient destinations with us</h2>
              <p>
                Sint est eu sit ipsum enim amet esse sunt incididunt. Occaecat
                aliquip commodo ipsum officia in mollit.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="three_offer_slider owl-theme owl-carousel">
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-1.png" alt="icon" />
                <h3>Adventure Touring</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-2.png" alt="icon" />
                <h3>Wildlife Tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-3.png" alt="icon" />
                <h3>Group tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-4.png" alt="icon" />
                <h3>Family tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-1.png" alt="icon" />
                <h3>Honeymoon Destinations</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="promotional_tours" class="section_padding_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Trending Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Trending_tour_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Upcoming Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Popular Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="width_offer_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/plan.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>70+ Destinations</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/location.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Suitable and Affordable Packages</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/suport.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Top quality customer support</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer_heading_area">
              <h5>Need any help?</h5>
            </div>
            <div class="footer_first_area">
              <div class="footer_inquery_area">
                <h5>Call 24/7 for any help</h5>
                <h3><a href="tel:+00-123-456-789">+8801734544744</a></h3>
              </div>
              <div class="footer_inquery_area">
                <h5>Mail to our support team</h5>
                <h3>
                  <a href="mailto:support@domain.com">support@Junket.com</a>
                </h3>
              </div>
              <div class="footer_inquery_area">
                <h5>Follow us on</h5>
                <ul class="soical_icon_footer">
                  <li>
                    <a href="#!"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#!"><i class="fab fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
            <div class="footer_heading_area">
              <h5>Company</h5>
            </div>
            <div class="footer_link_area">
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="faqs.html">Complain</a></li>
                <li><a href="terms-service.html">Help</a></li>
                <li><a href="tour-guides.html">Group Managers</a></li>
                <li><a href="news.html">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <div class="footer_heading_area">
              <h5>Support</h5>
            </div>
            <div class="footer_link_area">
              <ul>
                <li><a href="dashboard.html">Account</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="testimonials.html">Legal</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="top-destinations.html"> Affiliate Program</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <div class="footer_heading_area">
              <h5>Top Destinations</h5>
            </div>
            <div class="footer_link_area">
              <ul>
                <li><a href="room-details.html">Cox'sBazar</a></li>
                <li><a href="hotel-details.html">Sreemangal</a></li>
                <li><a href="hotel-booking.html">Sylhet</a></li>
                <li><a href="tour-search.html">Sundarbans</a></li>
                <li><a href="tour-booking.html">Rangamati</a></li>
                <li><a href="tour-guides.html">Chittagong</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="co-lg-6 col-md-6 col-sm-12 col-12">
            <div class="copyright_left">
              <p>Copyright © 2022 All Rights Reserved</p>
            </div>
          </div>
          <div class="co-lg-6 col-md-6 col-sm-12 col-12"></div>
        </div>
      </div>
    </div>
    <div class="go-top">
      <i class="fas fa-chevron-up"></i>
      <i class="fas fa-chevron-up"></i>
    </div>

    <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>
  </body>
</html>