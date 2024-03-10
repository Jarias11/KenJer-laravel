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
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <section class="light-bg" id="services-offered">
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

                    <section class="light-bg" id="contact-form">
                        <h2>Contact Us for a Quote</h2>
                        <p>Ready to get started on your construction project? Request a free quote or consultation:</p>
                        <button id="ShowForm" class="btn btn-lg btn-light mt-2 mx-1 slide-right">Get Free Estimate</button>
                        @include('partials.form')
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>

@include('partials.footer')

</html>