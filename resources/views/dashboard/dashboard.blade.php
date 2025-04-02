@extends('layout.app')

@section('content')
    <!-- banner 2 -->
    <div class="banner">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img_wrapper">
                        <img src="images/banner_bg.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption">
                        <div class="banner_content">
                            <h5>Real Estate Agency</h5>
                            <h1 class="title">Find Your Dream House By Us</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <a href="#" class="main-btn" id="banner-btn"><span>Make An Enquiry <i
                                        class="fa-regular fa-paper-plane"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_wrapper">
                        <img src="images/banner_bg3.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption">
                        <div class="banner_content">
                            <h5>Real Estate Agency</h5>
                            <h1 class="title">Live The Quality Life With Us</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <a href="#" class="main-btn" id="banner-btn"><span>Make An Enquiry <i
                                        class="fa-regular fa-paper-plane"></i></span></a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_wrapper">
                        <img src="images/banner_bg2.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption">
                        <div class="banner_content">
                            <h5>Real Estate Agency</h5>
                            <h1 class="title">All the Comfort Meet With Luxaries</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <a href="#" class="main-btn" id="banner-btn"><span>Make An Enquiry <i
                                        class="fa-regular fa-paper-plane"></i></span></a>

                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- banner 2 -->


    <!-- start features -->
    <div class="feature section_gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="feature_img">
                        <img src="images/properties.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature_con">

                        <h2>Properties in <strong>Birbhum</strong></h2>
                        <p class="mb-4">Houzez allow you to design unlimited panels and real estate custom forms to
                            capture leads and
                            keep record of all information</p>
                        <ul class="feature_list">
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Our SecretIsland Boat Tour is Just for You</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                        </ul>
                        <ul class="feature_aminities">
                            <li>
                                <h5>3 <i class="fa-solid fa-bed"></i></h5>
                                <p>Bedroom</p>
                            </li>
                            <li>
                                <h5>2 <i class="fa-solid fa-bath"></i></h5>
                                <p>Bathrooms</p>
                            </li>
                            <li>
                                <h5>2 <i class="fa-solid fa-car"></i></h5>
                                <p>Car Parking</p>
                            </li>
                            <li>
                                <h5>3450 <i class="fa-solid fa-crop-simple"></i></h5>
                                <p>Square Ft</p>
                            </li>
                        </ul>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <a href="images/properties1.webp" data-fancybox="img">
                                    <img src="images/properties1.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="images/properties2.webp" data-fancybox="img">
                                    <img src="images/properties2.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="images/properties3.webp" data-fancybox="img">
                                    <img src="images/properties3.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="feature_con">

                        <h2>Properties in <strong>Bardhaman</strong></h2>
                        <p class="mb-4">Houzez allow you to design unlimited panels and real estate custom forms to
                            capture leads and
                            keep record of all information</p>
                        <ul class="feature_list">
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Our SecretIsland Boat Tour is Just for You</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                            <li>Live Music Cocerts at Luviana</li>
                        </ul>
                        <ul class="feature_aminities">
                            <li>
                                <h5>3 <i class="fa-solid fa-bed"></i></h5>
                                <p>Bedroom</p>
                            </li>
                            <li>
                                <h5>2 <i class="fa-solid fa-bath"></i></h5>
                                <p>Bathrooms</p>
                            </li>
                            <li>
                                <h5>2 <i class="fa-solid fa-car"></i></h5>
                                <p>Car Parking</p>
                            </li>
                            <li>
                                <h5>3450 <i class="fa-solid fa-crop-simple"></i></h5>
                                <p>Square Ft</p>
                            </li>
                        </ul>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <a href="images/properties1.webp" data-fancybox="img">
                                    <img src="images/properties1.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="images/properties2.webp" data-fancybox="img">
                                    <img src="images/properties2.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="images/properties3.webp" data-fancybox="img">
                                    <img src="images/properties3.webp" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature_img">
                        <img src="images/properties.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end features -->

    <!-- start services -->
    <div class="services section_gap">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-12 text-center mb-2">
                    <span class="top_text">Our Services</span>
                    <h2 class="mt-3">Our Main Focus</h2>
                </div>
                <div class="col-lg-4">
                    <div class="services_box services_box1 card text-center h-100">
                        <div class="service_box_con">
                            <img src="images/service_icon2.png" alt="">
                            <h3>Completed Projects</h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house
                                you
                                will want to call home.</p>
                            <a href="#">Find A Home <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_box services_box2 card text-center h-100">
                        <div class="service_box_con">
                            <img src="images/service_icon3.png" alt="">
                            <h3>Current Projects</h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house
                                you
                                will want to call home.</p>
                            <a href="#">Find A Home <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_box services_box3 card text-center h-100">
                        <div class="service_box_con">
                            <img src="images/service_icon.png" alt="" class="service_icon3">
                            <h3>Upcoming Projects</h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house
                                you
                                will want to call home.</p>
                            <a href="#">Find A Home <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end services -->

    <!-- start second banner -->
    <div class="second_banner">
        <div class="container-fluid p-0 m-0">
            <img src="images/second-banner.webp" alt="" class="img-fluid">
        </div>
    </div>
    <!-- end second banner -->

    <!-- start properties -->
    <div class="properties section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <span class="top_text">Properties</span>
                    <h2 class="mt-3">Featured Listings</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme proerties-carousel">

                <div class="item properties_box card">
                    <div class="properties_img">
                        <img src="images/home1.jpg" alt="" class="img-fluid">
                        <div class="gradient-overlay"></div>
                        <div class="properties_img_con">
                            <ul>
                                <li><a href="#" class="properties_img_con_loc"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="sale-btn">FOR SALE</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury villa in Rego Park</h5>
                        <p class="card-text">Beautiful Huge 1 Family House In Heart Of
                            Westbury. Newly Renovated With New Wood
                        </p>
                        <ul class="feature_aminities" id="properties_aminities">
                            <li>
                                <h5><i class="fa-solid fa-building"></i> G+3</h5>
                            </li>
                            <li>
                                <h5><span>₹</span> 20 Lac Starting Price</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="property-btn"><span>View More</span></a>
                        <a href="#" class="property-btn property-btn2"><span>Enquire Now <i
                                    class="fa-regular fa-paper-plane"></i></span></a>
                    </div>
                </div>
                <div class="item properties_box card">
                    <div class="properties_img">
                        <img src="images/home2.jpg" alt="" class="img-fluid">
                        <div class="gradient-overlay"></div>
                        <div class="properties_img_con">
                            <ul>
                                <li><a href="#" class="properties_img_con_loc"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Belmont Gardens, Chicago</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#" class="rent-btn">FOR RENT</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury villa in Rego Park</h5>
                        <p class="card-text">Beautiful Huge 1 Family House In Heart Of
                            Westbury. Newly Renovated With New Wood
                        </p>
                        <ul class="feature_aminities" id="properties_aminities">
                            <li>
                                <h5><i class="fa-solid fa-building"></i> G+3</h5>
                            </li>
                            <li>
                                <h5><span>₹</span> 20 Lac Starting Price</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="property-btn"><span>View More</span></a>
                        <a href="#" class="property-btn property-btn2"><span>Enquire Now <i
                                    class="fa-regular fa-paper-plane"></i></span></a>
                    </div>
                </div>

                <div class="item properties_box card">
                    <div class="properties_img">
                        <img src="images/home3.jpg" alt="" class="img-fluid">
                        <div class="gradient-overlay"></div>
                        <div class="properties_img_con">
                            <ul>
                                <li><a href="#" class="properties_img_con_loc"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Belmont Gardens, Chicago</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#" class="sale-btn">FOR SALE</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury villa in Rego Park</h5>
                        <p class="card-text">Beautiful Huge 1 Family House In Heart Of
                            Westbury. Newly Renovated With New Wood
                        </p>
                        <ul class="feature_aminities" id="properties_aminities">
                            <li>
                                <h5><i class="fa-solid fa-building"></i> G+3</h5>
                            </li>
                            <li>
                                <h5><span>₹</span> 20 Lac Starting Price</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="property-btn"><span>View More</span></a>
                        <a href="#" class="property-btn property-btn2"><span>Enquire Now <i
                                    class="fa-regular fa-paper-plane"></i></span></a>
                    </div>
                </div>

                <div class="item properties_box card">
                    <div class="properties_img">
                        <img src="images/home4.jpg" alt="" class="img-fluid">
                        <div class="gradient-overlay"></div>
                        <div class="properties_img_con">
                            <ul>
                                <li><a href="#" class="properties_img_con_loc"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Belmont Gardens, Chicago</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#" class="rent-btn">FOR RENT</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury villa in Rego Park</h5>
                        <p class="card-text">Beautiful Huge 1 Family House In Heart Of
                            Westbury. Newly Renovated With New Wood
                        </p>
                        <ul class="feature_aminities" id="properties_aminities">
                            <li>
                                <h5><i class="fa-solid fa-building"></i> G+3</h5>
                            </li>
                            <li>
                                <h5><span>₹</span> 20 Lac Starting Price</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="property-btn"><span>View More</span></a>
                        <a href="#" class="property-btn property-btn2"><span>Enquire Now <i
                                    class="fa-regular fa-paper-plane"></i></span></a>
                    </div>
                </div>

                <div class="item properties_box card">
                    <div class="properties_img">
                        <img src="images/home5.jpg" alt="" class="img-fluid">
                        <div class="gradient-overlay"></div>
                        <div class="properties_img_con">
                            <ul>
                                <li><a href="#" class="properties_img_con_loc"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Belmont Gardens, Chicago</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#" class="sale-btn">FOR SALE</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury villa in Rego Park</h5>
                        <p class="card-text">Beautiful Huge 1 Family House In Heart Of
                            Westbury. Newly Renovated With New Wood
                        </p>
                        <ul class="feature_aminities" id="properties_aminities">
                            <li>
                                <h5><i class="fa-solid fa-building"></i> G+3</h5>
                            </li>
                            <li>
                                <h5><span>₹</span> 20 Lac Starting Price</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="property-btn"><span>View More</span></a>
                        <a href="#" class="property-btn property-btn2"><span>Enquire Now <i
                                    class="fa-regular fa-paper-plane"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end properties -->


    <!-- start counter -->
    <div class="counter_section section_gap">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_box">
                        <img src="images/counter_icon1.png" alt="">
                        <h2><span class="counter">560</span>+</h2>
                        <h5>Total Area Sq</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_box">
                        <img src="images/counter_icon2.png" alt="">
                        <h2><span class="counter">197</span>k+</h2>
                        <h5>Apartments Sold</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_box">
                        <img src="images/counter_icon3.png" alt="">
                        <h2><span class="counter">268</span>+</h2>
                        <h5>Total Constructions</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_box">
                        <img src="images/counter_icon4.png" alt="">
                        <h2><span class="counter">340</span>+</h2>
                        <h5>Apartio Rooms</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end counter -->

    <!-- start about us -->
    <div class="about_us section_gap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="images/about_us_img.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_con">
                        <span class="top_text">About Us</span>
                        <h2>The Leading Real Estate Rental Marketplace</h2>
                        <p>Over 39,000 people work for us in more than 70 countries all over the This breadth of global
                            coverage, combined with specialist services</p>
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-6">
                                <div class="about_feature">
                                    <img src="images/about_icon1.png" alt="">
                                    <p>Smart Home Design</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about_feature">
                                    <img src="images/about_icon2.png" alt="">
                                    <p>Beautiful Scene Around</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about_feature">
                                    <img src="images/about_icon3.png" alt="">
                                    <p>Exceptional Lifestyle</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about_feature">
                                    <img src="images/about_icon4.png" alt="">
                                    <p>Complete 24/7 Security</p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="about_text_box">
                                    <p>"Enimad minim veniam quis nostrud exercitation<br>
                                        llamco laboris. Lorem ipsum dolor sit amet"</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="main-btn"><span>Our Services</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about us -->

    <!-- start video section -->
    <div class="video_section">
        <div class="container-fluid">
            <a href="https://youtu.be/XnT6vaLwGPw?si=0O1JlijxLZDTan0w" data-fancybox="img">
                <div class="play_btn">
                    <i class="fa-solid fa-play"></i>
                </div>
            </a>
        </div>
    </div>
    <!-- end video section -->

    <!-- start gallery -->
    <div class="gallery section_gap">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-12 text-center mb-2">
                    <span class="top_text">Gallery</span>
                    <h2 class="mt-3">Our Gallery</h2>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-12.jpg" data-fancybox="img"><img src="images/portfolio-12.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-2.jpg" data-fancybox="img"><img src="images/portfolio-2.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-7.jpg" data-fancybox="img"><img src="images/portfolio-7.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-9.jpg" data-fancybox="img"><img src="images/portfolio-9.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-10.jpg" data-fancybox="img"><img src="images/portfolio-10.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-11.jpg" data-fancybox="img"><img src="images/portfolio-11.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-5.jpg" data-fancybox="img"><img src="images/portfolio-5.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_img">
                        <a href="images/portfolio-3.jpg" data-fancybox="img"><img src="images/portfolio-3.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
@endsection
