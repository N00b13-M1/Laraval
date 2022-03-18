    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>{{ $titles[7]->main_title }}</h2>
                <p>{{ $titles[7]->sub_title }}</p>
            </div>

            <div class="row">
                @for ($i = 0; $i < count($services_items); $i++)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{ $services_items[$i]->delay}}">
                        <div class="icon"><i class="{{ $services_items[$i]->logo}}"></i></div>
                        <h4 class="title"><a href="">{{ $services_items[$i]->title}}</a></h4>
                        <p class="description">{{ $services_items[$i]->description}}</p>
                    </div>
                @endfor
                {{-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                        tempore, cum soluta nobis est eligendi</p>
                </div> --}}
            </div>

        </div>
    </section><!-- End Services Section -->
