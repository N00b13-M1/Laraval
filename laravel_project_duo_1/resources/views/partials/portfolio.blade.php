<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>{{ $titles[2]->subtitle }}</h6>
                    <h2>{!! $titles[2]->fulltitle !!}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">
                    @for ($i = 0; $i < count($portfolio_items); $i += 2)
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ $portfolio_items[$i]->image }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>{{ $portfolio_items[$i]->name }}</h4>
                                            </a>
                                            <span>{{ $portfolio_items[$i]->category }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ $portfolio_items[$i + 1]->image }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>{{ $portfolio_items[$i + 1]->name }}</h4>
                                            </a>
                                            <span>{{ $portfolio_items[$i + 1]->category }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>