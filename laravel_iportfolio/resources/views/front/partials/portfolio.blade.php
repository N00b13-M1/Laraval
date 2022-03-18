<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{ $titles[6]->main_title }}</h2>
            <p>{{ $titles[6]->sub_title }}</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @for ($i = 0; $i < count($portfolio_items); $i++)
                <div class="col-lg-4 col-md-6 portfolio-item {{$portfolio_items[$i]->filter }}">
                    <div class="portfolio-wrap">
                        <img src="{{ $portfolio_items[$i]->source }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ $portfolio_items[$i]->href1 }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="{{ $portfolio_items[$i]->title1 }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ $portfolio_items[$i]->href2 }}" title="{{ $portfolio_items[$i]->title2 }}"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endfor

            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
</section><!-- End Portfolio Section -->
