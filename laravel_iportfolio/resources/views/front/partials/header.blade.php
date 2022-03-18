<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="{{ $navheadshot->photo }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">{{ $navheadshot->title }}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{ $nav_socials[0]->href }}" class="twitter"><i class="{{ $nav_socials[0]->icon }}"></i></a>
                <a href="{{ $nav_socials[1]->href }}" class="facebook"><i class="{{ $nav_socials[1]->icon }}"></i></a>
                <a href="{{ $nav_socials[2]->href }}" class="instagram"><i class="{{ $nav_socials[2]->icon }}"></i></a>
                <a href="{{ $nav_socials[3]->href }}" class="google-plus"><i class="{{ $nav_socials[3]->icon }}"></i></a>
                <a href="{{ $nav_socials[4]->href }}" class="linkedin"><i class="{{ $nav_socials[4]->icon }}"></i></a>
            </div>
        </div>
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ $nav_links[0]->href }}" class="nav-link scrollto active"><i class="{{ $nav_links[0]->logo }}"></i>
                        <span>{{ $nav_links[0]->span}}</span></a></li>
                @for ($i = 1; $i < count($nav_links); $i++)
                <li><a href="{{ $nav_links[$i]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[$i]->logo }}"></i> 
                    <span>{{ $nav_links[$i]->span}}</span></a></li>
                @endfor
                {{-- <li><a href="{{ $nav_links[1]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[1]->logo }}"></i> 
                        <span>{{ $nav_links[1]->span}}</span></a></li>
                <li><a href="{{ $nav_links[2]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[2]->logo }}"></i>
                        <span>{{$nav_links[2]->span}}</span></a></li>
                <li><a href="{{ $nav_links[3]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[3]->logo }}"></i>
                        <span>{{ $nav_links[3]->span}}</span></a></li>
                <li><a href="{{ $nav_links[4]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[4]->logo }}"></i>
                        <span>{{ $nav_links[4]->span}}</span></a></li>
                <li><a href="{{ $nav_links[5]->href }}" class="nav-link scrollto"><i class="{{ $nav_links[5]->logo }}"></i>
                        <span>{{ $nav_links[5]->span}}</span></a></li> --}}
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
