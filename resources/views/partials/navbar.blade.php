<!--

BootStrap NavBar Example Three - Social Media Icons
 //
1. Replaced the ugly toggle with angle
2. Used hover only for large screen and above
3. You can add resize function if you want in javascript
4. SlideIn / SlideUp can be replaced with FadeIn /FadeUp
5. Delay on leaving mouse is applied to ensure the hover actions are not jittery.
//
-->

<section>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container"> <a class="navbar-brand d-flex align-items-center " href="#">

                <span class="ml-3">
                    <img src="images/logo.png" alt="Logo" style="height: 50px;"> <!-- Adjust the height as needed -->
                </span>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active"> <a class="nav-link" href="{{ route('home') }}"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>
                    <li class="nav-item px-lg-2"> <a class="nav-link" href="{{ route('services') }}"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li>
                    <li class="nav-item px-lg-2"> <a class="nav-link" href="{{ route('gallery') }}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Gallery</a> </li>
                    <!-- Admin Link -->
                    @auth
                    @if(auth()->user()->is_admin)
                    <li class="nav-item px-lg-2"> <a class="nav-link" href="{{ route('dashboard') }}"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Dashboard</a></li>
                    @endif
                    @endauth

                    <!-- <li class="nav-item px-lg-2 dropdown d-menu"> -->
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Dropdown -->
                    <!-- <svg  id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> -->
                    <!-- <polyline points="6 9 12 15 18 9"></polyline> -->
                    </svg>
                    </a>
                    <!-- <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01"> -->
                    <!-- <a class="dropdown-item" href="#">Action</a> -->
                    <!-- <a class="dropdown-item" href="#">Another action</a> -->
                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                    <!-- </div> -->
                    </li>

                    <li class="nav-item px-lg-2"> <a class="nav-link" href="{{ route('contact') }}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                <!--    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                        </a> </li> -->
                    @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</section>

<script src="{{ asset('js/navbar.js') }}"></script>
