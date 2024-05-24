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
                <div class="col-md-12" style="padding:0;">
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
            <div class="container">
                <h1 style="font-weight:bold;">Services we offer:</h1>
                <div class=" row">
                    <!-- Exterior Services -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Exterior Services</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Paver Patios</li>
                                    <li class="list-group-item">Outdoor Kitchens</li>
                                    <li class="list-group-item">Paver Pathways</li>
                                    <li class="list-group-item">Walkways</li>
                                    <li class="list-group-item">Fire Pits</li>
                                    <li class="list-group-item">Paver Retaining Walls</li>
                                    <li class="list-group-item">Decorative Stonework</li>
                                    <li class="list-group-item">Professional Deck Building/Repair/Resurfacing</li>
                                    <li class="list-group-item">Gazebos</li>
                                    <li class="list-group-item">Porches</li>
                                    <li class="list-group-item">Pergolas</li>
                                    <li class="list-group-item">Exterior Painting</li>
                                    <li class="list-group-item">Roofing Repairs and Installation</li>
                                    <li class="list-group-item">Fence Installation and Repair</li>
                                    <li class="list-group-item">Window and Door Replacement</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Interior Services -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Interior Services</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Furniture Assembly</li>
                                    <li class="list-group-item">Attic Remodel</li>
                                    <li class="list-group-item">Basement Remodel</li>
                                    <li class="list-group-item">Bathroom Remodel</li>
                                    <li class="list-group-item">Kitchen Remodel</li>
                                    <li class="list-group-item">Multiple Room Remodeling/Renovation</li>
                                    <li class="list-group-item">Accommodation Additions for People with Disabilities</li>
                                    <li class="list-group-item">Brick & Stone Fireplace Repair</li>
                                    <li class="list-group-item">Brick & Stone Wall Builder</li>
                                    <li class="list-group-item">Cabinet Painting/Refinishing</li>
                                    <li class="list-group-item">Crown Molding</li>
                                    <li class="list-group-item">Interior Painting</li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <!-- General Services -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">General Services</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Free Estimates</li>
                                    <li class="list-group-item">Consultations</li>
                                    <li class="list-group-item">Electrical Work</li>
                                    <li class="list-group-item">Plumbing Services</li>
                                    <li class="list-group-item">HVAC Installation and Repair</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>



        <section class="dark-bg" id="our-process">
            <div class="process">
                <h1>Our Process</h1>

                <p class="subhead">To Make Your Vision Come True</p>

                <ol class="process-chart">
                    <li>
                        <h3>Initial Consultation </h3>
                        <div class="details">
                            <p>We begin by understanding your needs and requirements through a detailed consultation to lay the foundation for the project.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Design and Planning</h3>
                        <div class="details">
                            <p>Our team collaborates with you to develop a comprehensive design plan that meets your vision and goals.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Materials Procurement</h3>
                        <div class="details">
                            <p>We gather all necessary materials, permits, and other resources required for the design or build, ensuring a seamless execution of the project.</p>

                        </div>
                    </li>
                    <li>
                        <h3>Fair Pricing</h3>
                        <div class="details">
                            <p>We believe in transparent pricing and work closely with you to discuss a fair and competitive price for your project. Our commitment to affordability ensures that our prices remain cheap without compromising on quality.
                        </div>
                    </li>
                    <li>
                        <h3>Construction</h3>
                        <div class="details">
                            <p>Our skilled builders bring the design to life with precision and attention to detail, utilizing quality materials and techniques.</p>

                        </div>
                    </li>
                    <li>
                        <h3>Final Inspection</h3>
                        <div class="details">
                            <p>Before project completion, we conduct a thorough inspection to ensure that every aspect meets our high standards of quality and craftsmanship.</p>
                            <p>

                            </p>
                        </div>
                    </li>
                    <li>
                        <h3>Client Satisfaction</h3>
                        <div class="details">
                            <p>We ensure that you, our valued client, are completely satisfied with the final result and work on achieving to make your vision come true. </p>
                            <span><a href=#>Get started today!</a></span>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="light-bg" id="areas-served" style="background-image: url('images/services/list1.jpg'); background-size: cover; background-position: center;">
            <div class=" container" style=" font-family: 'Arial' ; font-weight: bold; text-align:center;">
                <h1>Areas We Serve</h1>
                <p>We proudly offer our construction services in the following areas:</p>
            </div>

            <div class="container" style=" font-family: 'Arial' ; font-weight: bold;">
                <div class="row d-flex justify-content-between">
                    <div class="card col-md-5 text-center" style="background-color: rgba(255, 255, 255, 0.9);">
                        <h1>Counties We Service!</h1>
                        <div class="list card-body" id="list1">

                            <h2 style="text-decoration: underline;">New Jersey</h2>
                            <ul>
                                <li>Bridgewater</li>
                                <li>East Brunswick</li>
                                <li>Edison</li>
                                <li>Elizabeth</li>
                                <li>Flemington</li>
                                <li>Freehold</li>
                                <li>Hamilton Township</li>
                                <li>Lawrence Township</li>
                                <li>New Brunswick</li>
                                <li>Newark</li>
                                <li>Princeton</li>
                                <li>Somerville</li>
                                <li>Trenton</li>
                                <li>West Windsor Township</li>
                                <li>Woodbridge</li>
                            </ul>


                        </div>


                        <div class="list card-body" style="display:none;" id="list2">

                            <h2 style="text-decoration: underline;">New York</h2>
                            <ul>
                                <li>Freeport</li>
                                <li>Garden City</li>
                                <li>Hempstead</li>
                                <li>Long Beach</li>
                                <li>Mineola</li>
                                <li>New Rochelle</li>
                                <li>New York City (Bronx, Brooklyn, Manhattan, Queens, Staten Island)</li>
                                <li>Valley Stream</li>
                                <li>White Plains</li>
                                <li>Yonkers</li>
                            </ul>
                        </div>
                        <div class="list card-body" style="display:none;" id="list3">
                            <h2 style="text-decoration: underline;">Pennsylvania</h2>
                            <ul>
                                <li>Allentown</li>
                                <li>Bensalem</li>
                                <li>Bethlehem</li>
                                <li>Doylestown</li>
                                <li>Easton</li>
                                <li>King of Prussia</li>
                                <li>Lansdale</li>
                                <li>Levittown</li>
                                <li>Norristown</li>
                                <li>Philadelphia</li>
                                <li>Quakertown</li>
                                <li>Warminster</li>
                            </ul>

                        </div>
                    </div>

                    <div class=" col-md-5">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=14HzHzCi07G5xeTIj_axNduJ6LLW_eK8&ehbc=2E312F&noprof=1" width=100% height="480"></iframe>
                    </div>
                </div>

            </div>


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

<script src="{{ asset('js/services.js') }}"></script>

@include('partials.footer')

</html>
