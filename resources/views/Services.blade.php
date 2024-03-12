<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>
</head>

<body>

    @include('partials.navbar')
    @include('partials.modal')
    <section style="padding-top: 7vh;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Image with title and text overlay -->
                    <div class="position-relative">
                        <img src="images/services/mainImage.jpg" class="img-fluid" alt="Introduction Image" style="width: 100%; max-height: 50vh;">
                        <!-- Dark overlay -->
                        <div class="overlay"></div>
                        <div class="overlay-text" style="font-family: 'Arial'; font-weight: bold; font-size: 24px;">
                            <h2 class="text-xxl" style="font-weight: bold;">Explore Our Services</h2>
                            <p class="text-xl">We specialize in providing top-notch construction services for your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dark-bg container-fluid">
            <div class="row">
                <!-- Left Side: Introduction -->
                <div class="col-md-6 mb-4 mt-4 offset-md-1"> <!-- Added mb-4 for bottom margin -->
                    <h2 class="text-xl mb-3" style="font-weight:bold;">Welcome to Ken-Jer Services</h2>
                    <p class="text-l mb-0">At Ken-Jer Services, we pride ourselves on providing top-notch solutions to meet your needs. With our commitment to excellence and customer satisfaction, we offer a wide range of services tailored to your requirements.</p>
                    <!-- Smaller Title: Contact Us Today -->


                    <!-- Button to Route to Contact Page -->
                    <div class="text-center pt-3 mt-5"> <!-- Center the button horizontally -->
                        <h3 class="text-md mt-6" style="font-weight:bold;">Contact Us Today</h3>
                        <a href="/contact" class="btn btn-secondary mt-2">Contact Page</a>
                    </div>
                </div>

                <!-- Right Side: Button to Show Form -->
                <div class="col-md-5 text-center mt-5"> <!-- Adjusted col-md-6 and added text-center -->
                    <button id="ShowForm" type="button" class="btn btn-primary  mt-5"> <!-- Added mt-4 for top margin -->
                        Request Service
                    </button>
                    @include('partials.form')
                </div>
            </div>
        </div>



        <!-- Services sections -->
        <section class=" light-bg" id="services-offered">
            <h2>Services Offered</h2>
            <p>Here are the construction services offered by Ken-Jer:</p>
            <ul>
                <li>Basement Remodel</li>
                <li>Kitchen Remodel</li>
                <li>Bathroom Remodel</li>
                <!-- Add more services here -->
            </ul>



        </section>



        <section class="dark-bg" id="areas-served">
            <h2>Areas We Serve</h2>
            <p>We proudly offer our construction services in the following areas:</p>
            <ul>
                <li>City 1</li>
                <li>City 2</li>
                <li>City 3</li>
                <!-- Add more areas served here -->
            </ul>
        </section>

        <section class="light-bg" id="our-process">
            <h2>Our Process</h2>
            <p>At Ken-Jer, we follow a systematic process to ensure the success of every construction project:</p>
            <ol>
                <li>Initial Consultation</li>
                <li>Design and Planning</li>
                <li>Permit Acquisition</li>
                <li>Construction</li>
                <li>Final Inspection and Handover</li>
            </ol>
        </section>

        <section class="dark-bg" id="faq">
            <h2 class="text-light">FAQs (Frequently Asked Questions)</h2>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question 1: What is the cost estimation process?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body text-dark">
                            Answer 1: Our cost estimation process involves...
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question 2: What payment methods do you accept?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body text-dark">
                            Answer 2: We accept various payment methods including credit cards, checks, and bank transfers.
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Question 3: What is your warranty policy?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body text-dark">
                            Answer 3: We offer a comprehensive warranty on all our construction projects. Please contact us for details.
                        </div>
                    </div>
                </div>
            </div>
        </section>


        </div>
        </div>
        </div>
    </section>

</body>

@include('partials.footer')

</html>