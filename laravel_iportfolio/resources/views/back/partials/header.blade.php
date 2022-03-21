<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="{{ url("img/profile-img.jpg") }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ route('back') }}" class="nav-link scrollto active"><i class="bx bx-home"></i>
                <span>Home</span></a></li>

                <li><a href="{{ route('navbar.index') }}" class="nav-link scrollto"><i class='bx bx-navigation'></i><span>Navbar</span></a></li>

                <li><a href="{{ route('titles.index') }}" class="nav-link scrollto"><i class='bx bx-captions'></i><span>Titles</span></a></li>

                <li><a href="{{ route('about.index') }}" class="nav-link scrollto"><i class='bx bx-terminal'></i><span>About</span></a></li>
            
                <li><a href="{{ route('facts.index') }}" class="nav-link scrollto"><i class='bx bxs-factory'></i>
                <span>Facts</span></a></li>

                <li><a href="{{ route('skills.index') }}" class="nav-link scrollto"><i class='bx bxs-checkbox-minus' ></i>
                <span>Skills</span></a></li>

                <li><a href="{{ route('portfolio.index') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                <span>Portfolio</span></a></li>

                <li><a href="{{ route('services.index') }}" class="nav-link scrollto"><i class="bx bx-server"></i>
                <span>Services</span></a></li>

                <li><a href="{{ route('testimonials.index') }}" class="nav-link scrollto"><i class='bx bxs-quote-left'></i>
                <span>Testimonials</span></a></li>

                <li><a href="{{ route('contact.index') }}" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                <span>Contact</span></a></li>

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
