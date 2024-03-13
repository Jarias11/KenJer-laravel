<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    @include('partials.navbar')
    @include('partials.modal')

    <section id="contact-row" style="padding-top: 7vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section id="contact-info">
                        <h2>Contact Information</h2>
                        <p>Here's how you can reach us:</p>
                        <!-- Contact information HTML goes here -->
                    </section>
                </div>
                <div class="col-md-6">
                    <section id="contact-form">
                        <h2>Contact Us</h2>
                        <p>Get in touch with us using the form below:</p>
                        <!-- Contact form HTML goes here -->
                    </section>
                </div>
            </div>
            <div class="row">
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
