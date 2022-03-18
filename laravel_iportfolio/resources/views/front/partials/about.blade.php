<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{ $titles[1]->main_title }}</h2>
            <p>{{ $titles[1]->sub_title }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $titles[2]->main_title }}</h3>
                <p class="fst-italic">
                    {{ $titles[2]->sub_title }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            @for ($i = 0; $i < count($about_items)-4 ; $i++)
                                <li><i class="bi bi-chevron-right"></i> <strong>{{ $about_items[$i]->strong }}</strong> <span>{{$about_items[$i]->span}}</span></li> 
                            @endfor

                            {{-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                    1995</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>www.example.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456
                                    7890</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York,
                                    USA</span></li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            @for ($i = 4; $i < count($about_items) ; $i++)
                                <li><i class="bi bi-chevron-right"></i> <strong>{{ $about_items[$i]->strong }}</strong> <span>{{$about_items[$i]->span}}</span></li> 
                            @endfor
                        </ul>
                    </div>
                </div>
                <p>
                    {{ $titles[2]->sub_title2 }}
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
