<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')

    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>

</head>
<!--
< <div class="ad">Call Now For Free Estimate/Consultation 609-977-8713</div> -->

<body>
    @include('partials.navbar')
    @include('partials.modal')
    <div class="slideshow-container">
        <!-- Slides -->
        <img class="slide-image" src="images/slide1.jpg" alt="Slide 1">
        <img class="slide-image" src="images/slide2.jpg" alt="Slide 2">
        <img class="slide-image" src="images/slide3.jpg" alt="Slide 3">
        <!-- Content overlay -->
        <div class="content-overlay">
            <div class="py-5 text-center text-black">
                <div class="container py-5">
                    <div class="row py-5">
                        <div class="mx-auto col-lg-11">
                            <div id="SlideshowText" class="SlideshowText" style="background-color: rgba(255, 255, 255, 0.8); padding:10px">
                                <h1 class=" display-4 mb-4">Get your free estimate!</h1>
                                <p class="lead mb-2">Contact us today</p>
                            </div>
                            <button id="ShowForm" class="btn btn-lg btn-light mt-2 mx-1">Get Free Estimate</button>
                            @include('partials.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/slideshow.js') }}"></script>

    <section class="mainPg">
        <!-- <div class="form-container">

            <div class="BlockAd">
                <p>"GOOD WORK</p>
                <p>GOOD PRICES"</p>
            </div> -->

        <!-- <a href="tel:6099778713" class="phoneMe"> <img src="images/phoneIcon.png" class= "shake"style="width: 80%;height: 80%;">   </a> -->
    </section>

    <section class="aboutUs" id="aboutUS">
        <div class="aboutUs-Bg"></div>
        <h2 class="Title">About us</h2>

        <!--
		<div class= "PWD">
		  <div class="pwd-container">
		  <img src="Work/about-us-pic1.jpg">
		  <p>Building decks, gazeebos, porches, are just a few examples of construction we do outside. See services for more info </p>
		</div>
		  <div class="pwd-container">
		  <img src="Work/about-us-pic2.jpg">
		  <p>Do you want to finish a basement, install a bathroom, enhance your living room. We've done every room! Check out our services for what we offer indoors! </p>
		</div>
		  <div class="pwd-container">
			<img src="Work/about-us-pic3.jpg">
			<p>We have expertise in many fields. Crown-molding is just one of them. Check out what else we can do for you! </p>
		  </div>

		</div>
		-->


        <div class="text-container">

            <h4 class="Para-Title">About Ken-Jer Construction and Contractors</h4>



            <p>Welcome to Ken-Jer Construction and Contractors, a family-owned business with a passion for building that has spanned decades. We take pride in our craftsmanship, attention to detail, and commitment to delivering exceptional results to our clients. With a wealth of experience and a dedicated team, we have become a trusted name in the construction industry.</p>

            <h4 class="Para-Title">Our Legacy</h4>

            <p> We have been transforming visions into reality, leaving a lasting mark on the communities we serve. At Ken-Jer, we believe that building is more than just a job—it's a labor of love. We approach each project with passion, commitment, and a desire to exceed expectations. Our team is driven by a shared dedication to craftsmanship and a genuine love for what we do. We understand that construction is about more than erecting structures; it's about creating spaces that inspire and improve lives.</p>


            <h4 class="Para-Title">Our Expertise</h4>

            <p>With a diverse portfolio of successful projects, we offer a comprehensive range of construction and contracting services. Our expertise encompasses residential, commercial, and industrial construction, remodeling, renovations, and custom builds. Whether it's a new home, an office space, or a retail establishment, we have the knowledge and skills to bring your vision to life.</p>

            <h4 class="Para-Title">The Ken-Jer Difference</h4>

            <p>When you choose Ken-Jer Construction and Contractors, you benefit from the personalized attention and care of a family-owned business. We believe in building strong relationships with our clients, understanding their unique needs, and delivering tailored solutions that align with their goals. Our commitment to open communication, transparency, and exceptional customer service sets us apart.</p>

            <h4 class="Para-Title">Our Team</h4>

            <p>Our team consists of highly skilled professionals who are experts in their respective fields. From project managers and architects to craftsmen and technicians, we have assembled a talented team that shares our values and dedication to quality. We continuously invest in our team's development, ensuring they stay up to date with the latest industry trends and techniques.</p>

            <h4 class="Para-Title">Contact Us</h4>

            <p>Thank you for considering Ken-Jer Construction and Contractors for your construction needs. We would love to be a part of your next project. To learn more about our services or to discuss your vision, please don't hesitate to contact our friendly team. We look forward to building with you!</p>



        </div>



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

</body>
@include('partials.footer');