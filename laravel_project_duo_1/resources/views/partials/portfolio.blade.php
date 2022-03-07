<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>{{ $titles[2]->subtitle }}</h6>
                    <h2>{{ $titles[2]->title_portion1}}<em>{{ $titles[2]->span1}}</em> {{ $titles[2]->title_portion2}} <span>{{ $titles[2]->span2}}</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">
                    <div class="item">
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items[0]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [0]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [0]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [1]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [1]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [1]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [2]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [2]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [2]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [3]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [3]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [3]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [4]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [4]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [4]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [5]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [5]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [5]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [6]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [6]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [6]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ $portfolio_items [7]->image }}" alt="">
                                <div class="hover-content">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>{{ $portfolio_items [7]->name }}</h4>
                                        </a>
                                        <span>{{ $portfolio_items [7]->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>