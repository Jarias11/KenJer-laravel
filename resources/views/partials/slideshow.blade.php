<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Slides -->
    <img class="slide-image" src="images/slide1.jpg" alt="Slide 1">
    <img class="slide-image" src="images/slide2.jpg" alt="Slide 2">
    <img class="slide-image" src="images/slide3.jpg" alt="Slide 3">
    <!-- Content overlay -->
    <div class="content-overlay">
        <div class="py-5 text-center text-white">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="mx-auto col-lg-10">
                        <h1 class="display-4 mb-4">Get your free estimate!</h1>
                        <p class="lead mb-5">Contact us today</p>
                        <a href="#" class="btn btn-lg btn-outline-light mx-1">Get Free Estimate</a>
                        @include('partials.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('js/slideshow.js') }}"></script>
