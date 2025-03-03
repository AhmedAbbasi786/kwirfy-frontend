<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/css.php') ?>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

</head>

<body>
    <!-- header  -->
    <?php include('includes/dark-header.php') ?>
    <!-- header  -->
    <div class="container">

    </div>
    <div class="clearfix"></div>
    
    <section class="shop-by-category">
        <div class="container">
            <!-- Section Title -->
            <div class="mb-4">
                <h2 class="section-title">SHOP BY CATEGORY</h2>
                <p class="section-subtitle">Explore our curated categories and find the perfect pieces for any occasion.</p>
            </div>

            <div class="mt-5 row">
                <!-- Category 1: Dresses -->
                <div class="col-md-6">
                    <div class="category-card" style="background-image: url('./images/dresses-bg.png');">
                        <div class="category-content">
                            <h3>DRESSES</h3>
                            <p>The perfect finishing touch.</p>
                            <a href="#" class="category-link">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5376 21.3774L22.4624 12.6225" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.6226 11.5375L22.4624 12.6224L21.3775 22.4623" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4 row">
                <!-- Category 1: Dresses -->
                <div class="col-md-4">
                    <div class="category-card" style="background-image: url('./images/pants.png');">
                        <div class="category-content">
                            <h3>Pents</h3>
                            <p>The perfect finishing touch.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-5 timeline-favourite">
            <!-- Section Title -->

            <div class="container">
                <div class="mb-4">
                    <span>Timeless Favorites</span>
                    <h2 class="section-title">Our Best Sellers</h2>
                </div>
                <div class="mt-4 row">
                    <!-- Category 1: Dresses -->
                    <div class="col-md-3">
                        <div class="best-seller-card" style="background-image: url('./images/timeline-fvrt.jpg');">
                            <div class="timeline-content">
                                <h3>DRESSES</h3>
                                <p>The perfect finishing touch.</p>
                                <a href="#" class="best-seller-cta">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.1665 10H15.8332" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 4.1665V15.8332" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                        <div class="pricing d-flex flex-column">
                            <span class="prod-name">Seoul Sleek</span>
                            <span class="prod-price">$79.9</span>
                        </div>
                        <div class="shop-now-cta tex-center">
                            <a href="">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="page-nav">
                    <div class="d-flex gap-3 justify-content-end">
                        <div class="left-icon">
                            <svg width="26" height="26" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6665 8H3.33317" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 3.3335L3.33333 8.00016L8 12.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div class="right-icon">
                            <svg width="26" height="26" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.3335 8H12.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 3.3335L12.6667 8.00016L8 12.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-section">
        <div class="container text-center">
            <small>OUR BRAND STORY</small>
            <h2 class="slider-title">WHERE EAST MEETS WEST IN STYLE</h2>
        </div>

        <div class="container">
            <div class="slick-slider">
                <div><img src="images/1st-slide.png" alt="Slide 1"></div>
                <div><img src="images/2nd-slide.png" alt="Slide 2"></div>
                <div><img src="images/3rd-slide.png" alt="Slide 3"></div>
                <div><img src="images/2nd-slide.png" alt="Slide 4"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="start-shopping my-4">
            <div class="h-100 container">
                <div class="h-100 cta-section">
                    <div class="row h-100">
                        <div class="col-md-6 h-100">

                        </div>
                        <div class="d-flex align-items-center col-md-6 h-100">
                            <div class="content-box">
                                <div class="content">
                                    <h5>AI Recommendations</h5>
                                    <h3>Your Style, Personalized!</h3>
                                    <p>Let our smart AI-powered recommendations guide you to your next favorite look. Start exploring today and uncover pieces you'll love.</p>
                                    <button class="btn">Start Shopping</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="testemonial-section">
                <div class="row row gy-4">
                    <div class="col-md-4">
                        <div class="testemonial-card">

                            <div class="verified-customer-badge">
                                <span>Verified Customer</span>
                            </div>

                            <div class="d-flex flex-column main-wrapper">
                                <div class="star-wrapper">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <p>
                                    “The designs are stunning, and the quality is unmatched! I’ve never felt more stylish.
                                    Kwirfy’s blend of Korean aesthetics with North American vibes is genius.”
                                </p>
                            </div>

                            <div class="d-flex customer-name gap-3">
                                <div class="profile-img">
                                    <img src="/images/customer-profile.png" />
                                </div>
                                <div class="user-name">
                                    <h5>Jason Kenter</h5>
                                    <p>Jason Kenter
                                        Happy Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testemonial-card">

                            <div class="verified-customer-badge">
                                <span>Verified Customer</span>
                            </div>

                            <div class="d-flex flex-column main-wrapper">
                                <div class="star-wrapper">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <p>
                                    “The designs are stunning, and the quality is unmatched! I’ve never felt more stylish.
                                    Kwirfy’s blend of Korean aesthetics with North American vibes is genius.”
                                </p>
                            </div>

                            <div class="d-flex customer-name gap-3">
                                <div class="profile-img">
                                    <img src="/images/customer-profile.png" />
                                </div>
                                <div class="user-name">
                                    <h5>Jason Kenter</h5>
                                    <p>Jason Kenter
                                        Happy Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="testemonial-card">

                            <div class="verified-customer-badge">
                                <span>Verified Customer</span>
                            </div>

                            <div class="d-flex flex-column main-wrapper">
                                <div class="star-wrapper">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <p>
                                    “The designs are stunning, and the quality is unmatched! I’ve never felt more stylish.
                                    Kwirfy’s blend of Korean aesthetics with North American vibes is genius.”
                                </p>
                            </div>

                            <div class="d-flex customer-name gap-3">
                                <div class="profile-img">
                                    <img src="/images/customer-profile.png" />
                                </div>
                                <div class="user-name">
                                    <h5>Jason Kenter</h5>
                                    <p>Jason Kenter
                                        Happy Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testemonial-card">

                            <div class="verified-customer-badge">
                                <span>Verified Customer</span>
                            </div>

                            <div class="d-flex flex-column main-wrapper">
                                <div class="star-wrapper">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <p>
                                    “The designs are stunning, and the quality is unmatched! I’ve never felt more stylish.
                                    Kwirfy’s blend of Korean aesthetics with North American vibes is genius.”
                                </p>
                            </div>

                            <div class="d-flex customer-name gap-3">
                                <div class="profile-img">
                                    <img src="/images/customer-profile.png" />
                                </div>
                                <div class="user-name">
                                    <h5>Jason Kenter</h5>
                                    <p>Jason Kenter
                                        Happy Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="signup my-4">
            <div class="h-100 container d-flex align-items-center">
                <div class="cta-section">
                    <div class="">
                        <div class="w-50">
                            <div class="content">
                                <h5>Newsletter Signup</h5>
                                <h3>Stay in the Loop...</h3>
                                <p>Be the first to know about exclusive launches, special promotions, and the latest trends in Korean-inspired fashion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <?php include('includes/footer.php') ?>


    <?php include('includes/js.php') ?>
    <!-- jQuery -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>



    <script>
        $(document).ready(function() {
            $('.slick-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: false,
                variableWidth: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>