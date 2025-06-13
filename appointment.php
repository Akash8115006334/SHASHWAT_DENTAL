<?php
include 'config/index.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Appointment - <?php echo APP_NAME; ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>

<body>
    <?php include 'include/header.php'; ?>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Make An</span> Appointment</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Make An Appointment</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
            <div class="book-appointment-form">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">booking</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="appointment-form wow fadeInUp">
                            <!-- Form Start -->
                            <form id="appointmentForm" action="send.php" method="POST">
                                <input type="hidden" value="true" name='sendEnquiry'>
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <select name="services" class="form-control form-select" id="services" required>
                                            <option value="" disabled selected>Select Service</option>
                                            <option value="general_dental_care">General Dental Care</option>
                                            <option value="dental_implants">Dental Implants</option>
                                            <option value="cosmetic_dentistry">Cosmetic Dentistry</option>
                                            <option value="teeth_whitening">Teeth Whitening</option>
                                            <option value="pediatric_dental_care">Pediatric Dental Care</option>
                                            <option value="advanced_oral_care">Advanced Oral Care</option>
                                            <option value="comfort_dentistry">Comfort Dentistry</option>
                                            <option value="smile_renewal">Smile Renewal</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-2">
                                        <input type="date" name="date" class="form-control" id="date" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" id="message" class="form-control" required placeholder="Enter Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default" id="submitButton">
                                            Book Appointment
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                                        </button>
                                    </div>


                                    <!-- Message Display Area -->
                                    <div id="msgSubmit" class="h3 hidden mt-3"></div>
                                </div>
                            </form>
                            <!-- Form End -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Page Appointment End -->

        <!-- Why Choose Us Section Start -->
        <div class="why-choose-us">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Expert Diagnosis of</span> Dental Diseases</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We prioritize patient care and sustainability through eco-friendly dental practices.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 order-1">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-1">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-1.svg" alt="Experienced Doctor">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Experienced Doctors</h3>
                                    <p>Our skilled team of dental professionals brings years of expertise to deliver top-quality care.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-2.svg" alt="Personalized Care">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Personalized Care</h3>
                                    <p>We tailor every treatment plan to suit your unique dental needs, ensuring optimal results.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-3.svg" alt="Flexible Payment Options">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Flexible Payment Options</h3>
                                    <p>Our clinic offers multiple payment options to make your dental care affordable and convenient.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>

                    <div class="col-lg-4 order-lg-1 order-md-2 order-1">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image wow fadeInUp">
                            <figure>
                                <img src="images/why-choose-us-img.png" alt="Why Choose Us">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->
                    </div>

                    <div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-2">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-4.svg" alt="Emergency Services">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Emergency Services</h3>
                                    <p>We are available for emergency dental care, ensuring you're never left in pain or discomfort.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-5.svg" alt="Positive Reviews">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Positive Patient Reviews</h3>
                                    <p>Thousands of happy patients recommend us for our friendly, professional, and effective dental care.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-us-6.svg" alt="Latest Technology">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>Latest Technology</h3>
                                    <p>We utilize state-of-the-art dental technology to deliver precise, efficient, and painless treatments.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>
                </div>
            </div>
            <!-- Icon Start Image Start -->
            <div class="icon-star-image">
                <img src="images/icon-star.svg" alt="Star Icon">
            </div>
            <!-- Icon Start Image End -->
        </div>

        <!-- Why Choose Us Section End -->

        <!-- Our Testiminial Start -->
        <div class="our-testimonials">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">testimonial</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What our</span> Client Say</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly initiatives.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <!-- Testiminial Image Start -->
                        <div class="testimonial-image">
                            <div class="testimonial-img">
                                <figure class="reveal image-anime">
                                    <img src="images/2nd.jpg" alt="">
                                </figure>
                            </div>

                            <!-- Terstimonial Rating Box Start -->
                            <div class="testimonial-rating-box">
                                <!-- Counter Item Start -->
                                <div class="rating-counter-item">
                                    <div class="rating-counter-number">
                                        <h3><span class="counter">4.7</span>/5</h3>
                                    </div>

                                    <div class="rating-counter-content">
                                        <p>This rate is given by user after visiting our location</p>
                                    </div>
                                </div>
                                <!-- Counter Item End -->

                                <!-- Service Rating Start -->
                                <div class="service-rating">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </li>
                                        <li>for excellence services</li>
                                    </ul>
                                </div>
                                <!-- Service Rating End -->
                            </div>
                            <!-- Terstimonial Rating Box End -->
                        </div>
                        <!-- Testiminial Image End -->
                    </div>

                    <div class="col-lg-7">
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-quote-image">
                                                    <img src="images/icon-testimonial-quote.svg" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>"I had an RCT and zirconia crown. It was a painless RCT. The entire process took
                                                        minimal time. Doctor Pooja was also really accommodating with time for the appointment."</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/feedback.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Aniket Mishra</h3>
                                                    <p>Good &amp; Patient</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-quote-image">
                                                    <img src="images/icon-testimonial-quote.svg" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>" I got my smile makeover done from stunning dentistry. The treatment was good and Dr. Pooja is amazing. My overall experience was good , and I would definitely recommend Shashwat dentist in Noida."</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/feedback.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Nikhil sharma</h3>
                                                    <p>Patient</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-quote-image">
                                                    <img src="images/icon-testimonial-quote.svg" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>" I had an unbearable pain in tooth, and got to know about this clinic from one of my friend. Dr.pooja treated me well and done my RCT in single sitting. I experienced this clinic is good dental clinic for everyone."</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/feedback.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Aastha Gaur</h3>
                                                    <!-- <p>designer</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-quote-image">
                                                    <img src="images/icon-testimonial-quote.svg" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>" Pain in my teeth was cured effectively by the doctor.
                                                        Good knowledge and expertise in handling dental issues. Must visit the clinic, in case of need."</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/feedback.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Shashank Srivastava</h3>
                                                    <!-- <p>designer</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Testiminial End -->

        <?php include 'include/footer.php'; ?>

        <!-- Add jQuery and AJAX Script -->
        <script>
            $(document).ready(function() {
                $("#appointmentForm").submit(function(event) {
                    event.preventDefault(); // Prevent the default form submission

                    // Show spinner and disable the button
                    $("#submitButton .spinner-border").show(); // Show spinner
                    $("#submitButton").prop("disabled", true); // Disable button to prevent multiple submissions

                    $.ajax({
                        url: 'send.php', // Your PHP action file
                        type: 'POST',
                        data: $(this).serialize(), // Serialize form data
                        success: function(response) {
                            // Assuming your PHP script returns a success/error message
                            $("#msgSubmit").removeClass("hidden").html(response);
                            $("#appointmentForm")[0].reset(); // Optional: Reset the form fields
                        },
                        error: function() {
                            $("#msgSubmit").removeClass("hidden").html("There was an error submitting your request. Please try again.");
                        },
                        complete: function() {
                            // Hide spinner and enable the button after request is complete
                            $("#submitButton .spinner-border").hide(); // Hide spinner
                            $("#submitButton").prop("disabled", false); // Re-enable button
                        }
                    });
                });
            });
        </script>


</body>


</html>