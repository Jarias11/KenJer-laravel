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
                    <section id="contact-info">
                        <h2>Contact Information</h2>
                        <p>Here's how you can reach us:</p>
                        <div class="contact-info">
                            <div class="card">
                                <i class="icon fas fa-envelope"></i>
                                <div class="card-content">
                                    <h3>Email</h3>
                                    <span>email@address.com</span>
                                </div>
                            </div>

                            <div class="card">
                                <i class="icon fas fa-phone"></i>
                                <div class="card-content">
                                    <h3>Phone Number</h3>
                                    <span>+00000000000</span>
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
            <div class="row light-bg">
                <div class="col-md-6">
                    <section id="opening-hours">
                        <h2>Opening Hours</h2>
                        <p>Our opening hours:</p>
                        <!-- Opening hours HTML goes here -->
                    </section>
                </div>
                <div class="col-md-6">
                    <section id="social-media">
                        <h2>Social Media</h2>
                        <p>Connect with us on social media:</p>
                        <!-- Social media links HTML goes here -->
                    </section>
                </div>
            </div>
            <section id="additional-info">
                <div class="container">
                    <h2>Additional Information</h2>
                    <p>Any additional information goes here:</p>
                    <!-- Additional information HTML goes here -->
                </div>
            </section>
        </div>
    </section>



</body>




</html>

</html>
