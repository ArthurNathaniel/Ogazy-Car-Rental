<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <title>Home - Ogazy Car Rental</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="hero_all">
        <div class="hero_text">
            <div class="hero_top">
                <p>Car Rental Service</p>
            </div>
            <div class="hero_middle">
                <h1>Welcome to Ogazy G. Car Rental</h1>
            </div>
            <div class="hero_bottom">
                <button>
                    <a href="">MAKE A RESERVATION</a>
                </button>
            </div>
        </div>
        <div class="hero_cars_slide">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://www.cnet.com/a/img/resize/eeab2172c867951f7ef115b48836e1e691de3660/hub/2022/05/11/d5e39b3e-cca2-4355-9c8b-5c1b7ff331a0/ogi-2023-toyota-highlander-turbo-002-scaled.jpg?auto=webp&fit=crop&height=900&width=1200" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://di-uploads-pod9.dealerinspire.com/paulytoyota/uploads/2023/01/Screenshot_2.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="reservation_boking_all">
            <div class="reservation_bg">
                <?php include 'booking.php' ?>
            </div>

            <div class="about_us_all">
                <div class="about_text">
                    <h1>About us - <span>Ogazy G. Car Rentals</span></h1>
                </div>
                <div class="about_p">
                    <p>
                        Located conveniently at the Kumasi Airport Roundabout near the DVLA Office, Ogazy G. Car Rental is your premier destination for reliable and efficient car rental services in Kumasi and its surroundings. With a commitment to excellence and a passion for delivering exceptional customer experiences, Ogazy G. Car Rental has established itself as a trusted name in the industry.
                    </p>
                </div>
                <div class="about_p">
                    <p>
                        At Ogazy G. Car Rental, we understand that every journey is unique, and we strive to cater to the diverse needs and preferences of our customers. Whether you're a business traveler in need of a sleek sedan for your corporate meetings, a family embarking on a memorable vacation, or an adventurer seeking to explore the scenic landscapes of Kumasi, our extensive fleet has the perfect vehicle for you.
                    </p>
                </div>
                <div class="about_p">
                    <p>

                    </p>
                </div>
                <div class="about_btn">
                    <button>
                        <a href="about.php">Read more</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="explore_our_cars_all">
            <div class="explore_title">
                <h1>VEHICLE CATEGORIES</h1>
            </div>
            <div class="explore_grid">
                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(https://pbs.twimg.com/media/GI-OO7tWMAAHMl-?format=jpg&name=large);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Landcruiser V8</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(https://pbs.twimg.com/media/GI-dik4WwAAam5r?format=jpg&name=medium);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>2017 Honda CR-V </h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>


                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(https://pbs.twimg.com/media/GJgIRgcWEAAk4eS?format=jpg&name=medium);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Range Rover Vogue HSE 2016</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>
                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(https://pbs.twimg.com/media/GJfy4o-WEAEMr5k?format=jpg&name=900x900);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Land Rover Discovery 4</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>

                <div class="explore_card">
                    <div class="explore_car_image" style="background-image: url(https://pbs.twimg.com/media/GJREbhLWMAAvHeN?format=jpg&name=medium);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Mercedes Benz G63</h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>


                <div class="explore_card">
                    <div class="explore_car_image" style="background-image:url(https://pbs.twimg.com/media/GJcienfXUAAbfhy?format=jpg&name=medium);">

                    </div>
                    <div class="explore_details">
                        <div class="explore_car_title">
                            <h3>Mercedes-Benz GLK350 </h3>
                        </div>
                        <div class="explore_price">
                            <h2>GHC 1000 <span>/day</span></h2>
                        </div>
                        <div class="explore_car_info">

                            <div class="transmission">
                                <p>Auto</p>
                            </div>
                            <div class="transmission">
                                <p>Petrol</p>
                            </div>
                        </div>
                        <div class="explore_book">
                            <button>
                                <a href="reservation.php">MAKE RESERVATION</a>

                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <section>
        <div class="contact_all">
            <div class="contact_title">
                <h1>CONTACT US </h1>
            </div>
            <div class="contact_boxes">
                <div class="box">
                    <h1>Call</h1>
                    <p>+233 24 910 3331 </p>

                </div>
                <div class="box">
                    <h1>Mail</h1>
                    <p>info@ogazycarrental.com</p>
                </div>
                <div class="box">
                    <h1>Location</h1>
                    <p>Kumasi Airport Roundabout near DVLA Office</p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5160626235197!2d-1.6009069899668775!3d6.706691320980494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb970d301f4127%3A0xcabaa124128180d5!2sOGAZY%20G%20CAR%20RENTALS!5e0!3m2!1sen!2sgh!4v1710765771161!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="./js/testimonial.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>