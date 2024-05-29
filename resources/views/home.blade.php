<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
    <script src="https://kit.fontawesome.com/489710b0e5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


</head>


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
                <div class="container-fluid pl-2 text-center" style="position:absolute; top:1%">
                    <div class="row">
                        <div class="col">
                            <div id="SlideShowText" class="slideShowText slide-up">
                                <h1 class=" display-3 mb-4">GOOD PRICES, GOOD WORK!</h1>

                            </div>
                            @include('partials.form')
                        </div>

                        <div class="col" id="Col">
                            <div class="sticky-note shake-element" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); z-index: 2;">
                                <h2 class="pt-3">Get an estimate!</h2>
                                <p1 class="mt-3">Contact Us Today</p1>
                                <div>
                                    <button class="rounded mb-2 dark-yellow-button" id="ShowForm"><i class="fa-regular fa-pen-to-square"></i></button>
                                </div>
                                <div class="thumbtack"></div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="container intro-text text-center">
                    <div class="bolt bolt-1"></div>
                    <div class="bolt bolt-2"></div>
                    <div class="bolt bolt-3"></div>
                    <div class="bolt bolt-4"></div>

                    <p1>
                        Residential Construction Experts
                    </p1>
                    <h1>
                        Discover Ken-Jer! Highly Acclaimed Across New Jersey, New York & Pennsylvania and Nearby Regions
                    </h1>

                    <p2>
                        At Ken-Jer, we're committed to bringing your dreams to life.
                        Widely respected across New Jersey, New York, Pennsylvania, and neighboring areas,
                        we specialize exclusively in residential construction projects.
                        With our steadfast dedication to quality and precision,
                        we'll transform your vision into a remarkable reality, ensuring unmatched excellence at every phase.
                        Trust Ken-Jer to elevate your residential construction projects
                        with unparalleled expertise and unwavering professionalism.
                    </p2>
                </div>
            </div>
    </section>

    <section class="about dark-bg">
        <div class="text-center">
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
                                <a href="{{ route('contact') }}"><button class="btn btn-secondary">Contact Us</button></a>
                                <h5 class=" card-title display-5">Free Estimates</h5>
                                <p class="card-text lh-lg lead">Contact Us Today</p>

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
                                <a href="{{ route('services') }}"><button class="btn btn-secondary">Services</button></a>
                                <h5 class="card-title display-5">See Services</h5>
                                <p class="card-text lh-lg lead">Check out the services we offer!</p>
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
                                <a href="{{ route('services') }}#faq"><button class="btn btn-secondary">Services</button></a>
                                <h5 class="card-title display-5">FAQ</h5>
                                <p class="card-text lh-lg lead">See the most common questions answered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="services pt-3">
        <div class="row">
            <!-- Column for Gallery -->
            <div class="col-md-6">
                <div class="big-card mb-4 text-center gallery-section">
                    <h2>Gallery</h2>
                    <p>Explore our gallery to see examples of our past projects and works. Get inspired and envision your own construction dreams becoming a reality.</p>
                    <p>Click the button below to view our gallery:</p>
                    <div class="mt-4">
                        <a href="gallery.html" class="btn btn-secondary">View Gallery</a>
                    </div>
                </div>
            </div>
            <!-- Column for Where We Serve -->
            <div class="col-md-6">
                <div class="big-card mb-4 text-center where-we-serve-section">
                    <h2>Where We Serve</h2>
                    <p>We proudly serve the communities across New Jersey, New York, Pennsylvania, and nearby regions. Our team is dedicated to delivering top-notch construction services to all our clients in these areas.</p>
                    <p>Click the button below to see the regions we serve:</p>
                    <div class="mt-4">
                        <a href="services.html#service-regions" class="btn btn-secondary">See Regions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/transitions.js') }}"></script>
</body>
@include('partials.footer')


</html>
