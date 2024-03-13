<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>


</head>
<!--
< <div class="ad">Call Now For Free Estimate/Consultation 609-977-8713</div> -->

<body>
    @include('partials.navbar')
    @include('partials.modal')
    <section class="Main">
        <div class="slideshow-container">
            <!-- Slides -->
            <img class="slide-image" src="images/index/slide1.jpg" alt="Slide 1">
            <img class="slide-image" src="images/index/slide2.jpg" alt="Slide 2">
            <img class="slide-image" src="images/index/slide3.jpg" alt="Slide 3">
            <!-- Content overlay -->
            <div class="content-overlay ">
                <div class="py-5 text-center text-black">
                    <div class="container py-5">
                        <div class="row py-5">
                            <div class="mx-auto col-lg-11">
                                <div id="SlideshowText border red" class="SlideshowText slide-up" style="background-color: rgba(255, 255, 255, 0.8); padding:20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);">
                                    <h1 class=" display-3 mb-4">Get your free estimate!</h1>
                                    <p class="lead mb-2">Contact us today</p>
                                </div>
                                <button id="ShowForm" class="btn btn-lg btn-light mt-2 mx-1 slide-right">Get Free Estimate</button>
                                @include('partials.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about dark-bg">
        <div class="container text-center">
            <div class="row">
                <div class="rounded border border-primary shadow col-md-11 mx-auto bg-white">
                    <h1 class="text-primary fw-bold fs-2 mt-2">About Ken-Jer</h1>
                    <div class="p-4">
                        <p class="fs-4 text-dark">Welcome to Ken-Jer, your trusted construction company with over 20 years of experience. Founded by Fanny Arias and Hernan Zhingre, Ken-Jer specializes in a wide range of construction services for both residential and commercial clients.</p>
                        <p class="fs-4 text-dark">At Ken-Jer, we take pride in delivering high-quality craftsmanship and exceptional customer service. From interior renovations to outdoor construction projects, we're dedicated to bringing your vision to life.</p>
                        <p class="fs-4 text-dark">Our team consists of skilled professionals who are committed to exceeding your expectations and ensuring your satisfaction with every project we undertake.</p>
                        <p class="fs-4 text-dark">Thank you for considering Ken-Jer for your construction needs. We look forward to the opportunity to work with you and make your construction dreams a reality.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center mt-5">
                    <div class="card mb-4 text-center">
                        <div class="card-inner">
                            <div class="front">
                                <!-- Front content -->
                                <img src="images/index/noteIcon.png" class="card-img-top mt-3 mx-auto" alt="Free Estimates Icon">
                                <div class="card-body mt-3">
                                    <h5 class="card-title display-5">Free Estimates</h5>
                                    <p class="card-text lh-lg lead">Ken-Jer offers free estimates for your construction projects. We believe in transparency and providing you with accurate cost estimates for your peace of mind.</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- Back content -->
                                <!-- Add your back content here -->
                                <h5 class="card-title display-5">Free Estimates</h5>
                                <p class="card-text lh-lg lead">This is the back</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card mb-4 text-center">
                        <div class="card-inner">
                            <div class="front">
                                <!-- Front content -->
                                <img src="images/index/toolsIcon.png" class="card-img-top mt-3 mx-auto" alt="Tools Icon">
                                <div class="card-body mt-3">
                                    <h5 class="card-title display-5">Versatile Services</h5>
                                    <p class="card-text lh-xl lead">Ken-Jer specializes in a variety of construction services, both indoor and outdoor. From interior renovations to outdoor construction projects, our family-owned company is dedicated to providing the best solutions for your needs.</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- Back content -->
                                <!-- Add your back content here -->
                                <h5 class="card-title display-5">Back Title 2</h5>
                                <p class="card-text lh-lg lead">This is the back content for the second card.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center mt-5">
                    <div class="card mb-4 text-center">
                        <div class="card-inner">
                            <div class="front">
                                <!-- Front content -->
                                <img src="images/index/brickIcon.png" class="card-img-top mt-3 mx-auto " alt="Worker on Brick Wall Icon">
                                <div class="card-body mt-3">
                                    <h5 class="card-title display-5">Over 20 Years of Expertise</h5>
                                    <p class="card-text lh-lg lead">With over two decades of experience, Ken-Jer brings a wealth of expertise to every project. Our skilled team has been delivering high-quality craftsmanship for residential and commercial clients.</p>
                                </div>
                            </div>
                            <div class="back">
                                <!-- Back content -->
                                <!-- Add your back content here -->
                                <h5 class="card-title display-5">Back Title 3</h5>
                                <p class="card-text lh-lg lead">This is the back content for the third card.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="form-container">

            <div class="BlockAd">
                <p>"GOOD WORK</p>
                <p>GOOD PRICES"</p>
            </div> -->

        <!-- <a href="tel:6099778713" class="phoneMe"> <img src="images/phoneIcon.png" class= "shake"style="width: 80%;height: 80%;">   </a> -->
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <!-- Column for Services -->
                <div class="col-md-6">
                    <div class="text-center">
                        <h2>Our Services</h2>
                        <p>Discover the comprehensive range of construction services we offer at Ken-Jer. From indoor renovations to outdoor transformations, our skilled team is committed to bringing your vision to life.</p>
                        <p>Explore our services further by clicking the button below:</p>
                        <div class="mt-4">
                            <a href="services.html" class="btn btn-primary">Explore Services</a>
                        </div>
                    </div>
                </div>
                <!-- Column for Gallery -->
                <div class="col-md-6">
                    <div class="text-center">
                        <h2>Gallery</h2>
                        <p>Explore our gallery to see examples of our past projects and works. Get inspired and envision your own construction dreams becoming a reality.</p>
                        <p>Click the button below to view our gallery:</p>
                        <div class="mt-4">
                            <a href="gallery.html" class="btn btn-secondary">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    </section>




    <section class="Services">
        <div class="Services-container">
            <div class="text-Service-container">
                <h2 class="Title">Services</h2>
                <p class="Service-description">Ken-Jer Construction is the leading, residential, and commercial contractors in central New Jersey. Serving for decades with a full team of experience professionals to create amazing projects designed by our customers.</p>
            </div>
            <div class="SButton">

                <!-- <button class="toServices" onclick="goToServices()">View Services</button> -->

            </div>




            <div class="card-Holder">
                <div class="card">
                    <!-- <img src="images/noteIcon.png"> -->
                    <h3>Free Estimates</h3>
                    <p2>We give 100% free estimates and consultations. Give us a call or fill out form above to reach us anytime 24/7. We are dedicated to working with you to build your dream projects! </p2>
                </div>
                <div class="card">
                    <!-- <img src="images/toolsIcon.png"> -->
                    <h3>Indoor Construction</h3>
                    <p2>We are experienced in many areas of the inside of the home. Working on basements, kitckens, bedrooms, and more. Check out our past projects</p2>
                </div>
                <div class="card">
                    <!-- <img src="images/brickIcon.png"> -->
                    <h3>Outdoor Construction</h3>
                    <p2>From decks, patios, and gazeebos, our experience working outside is vast and these are just a few examples. Check out our past projects</p2>
                </div>
                <div class="card">
                    <!-- <img src="images/noteIcon.png"> -->
                    <h3>Other Services</h3>
                    <p2>Dont see what your looking for above. See our other services available. We are ready to tackle any idea you can think of!</p2>
                </div>

            </div>
        </div>


    </section>
    <script src="{{ asset('js/transitions.js') }}"></script>
</body>
@include('partials.footer');

</html>
