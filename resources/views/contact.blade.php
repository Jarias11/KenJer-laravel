<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">


</head>

<body>
    @include('partials.navbar')
    @include('partials.modal')

    <section id="contact-row" style="padding-top: 7vh;">
        <div class="container">
            <div class="row dark-bg">
                <div class="col-md-6">
                    <section id="additional-info">
                        <div class="container" style="padding:0;margin:0;">
                            <h2>Who is Ken-Jer?</h2>
                            <p>Ken-Jer is a family-owned and operated business dedicated to transforming houses into dream homes. With over two decades of experience in the industry, we take pride in our legacy of excellence and customer satisfaction. Our team of professional experts brings a wealth of knowledge and expertise to every project, ensuring meticulous attention to detail and superior craftsmanship.</p>
                            <p>We understand that your home is your sanctuary, which is why we work tirelessly to exceed your expectations and bring your vision to life. From concept to completion, we are committed to providing personalized service tailored to your unique needs and preferences. Whether you're looking to renovate, remodel, or build from the ground up, Ken-Jer is here to make your dream home a reality.</p>
                            <p>As a trusted name in the industry, we prioritize integrity, transparency, and open communication throughout the entire construction process. We strive to foster lasting relationships with our clients built on trust, reliability, and exceptional service. Let Ken-Jer be your partner in creating the home of your dreams, where comfort, style, and quality converge.</p>
                        </div>
                    </section>
                </div>
                <div class="col-md-6">
                    <img src="images/contact/Who.jpg" class="img-fluid" alt="Ken-Jer">

                </div>
            </div>

            <div class="row light-bg">
                <div class="col-md-6">
                    <section id="opening-hours">
                        <h2>Operating Hours</h2>
                        <p>Our operating hours:</p>
                        <ul class="list-unstyled">
                            <li>Weekdays: 7:00 AM - 5:00 PM EST</li>
                            <li>Weekends: 8:00 AM - 4:00 PM EST</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-6">
                    <section id="social-media">
                        <h2>Social Media</h2>
                        <p>Connect with us on social media:</p>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/ken-jer" target="_blank">Facebook</a></li>
                            <li>Instagram - Coming Soon</li>
                            <li>TikTok - Coming Soon</li>
                        </ul>
                    </section>
                </div>
            </div>
            <div class="row dark-bg">
                <div class="col-md-6">
                    <section id="contact-info">
                        <h2>Contact Information</h2>
                        <p>Here's how you can reach us:</p>
                        <div class="contact-info">
                            <div class="card">
                                <i class="icon fas fa-envelope"></i>
                                <div class="card-content">
                                    <h3>Email</h3>
                                    <span>contact@ken-jer.com</span>
                                </div>
                            </div>

                            <div class="card">
                                <i class="icon fas fa-phone"></i>
                                <div class="card-content">
                                    <h3>Phone Number</h3>
                                    <span>+6099778713</span>
                                </div>
                            </div>

                            <div class="card">
                                <i class="icon fas fa-map-marker-alt"></i>
                                <div class="card-content">
                                    <h3>Location</h3>
                                    <span>Hightstown, NJ</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-6 text-align-center">
                    <section id="contact-form">
                        <h2>Contact Us</h2>
                        <p>Get in touch with us using the form below:</p>
                        <div id="ShowForm">
                            <span><a href="#"></a></span>
                        </div>
                        @include('partials.form')
                        <!-- Contact form HTML goes here -->
                    </section>
                </div>
            </div>


        </div>

    </section>








</body>




</html>

</html>
