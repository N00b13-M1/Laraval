<div id="services" class="our-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6>{{ $titles[1]->subtitle }}</h6>
                    <h2>{!! $titles[1]->fulltitle !!}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($services as $item)
            <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="{{ $item["delay"] }}">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ $item["image"] }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>
                                    {{ $item["name"]}}
                                </h4>
                                <p>
                                    {{ $item["description"] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ asset('img/service-icon-02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>Website Trends</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    dormque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ asset('img/service-icon-03.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>Traffic Analysis</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    dormque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ asset('img/service-icon-03.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>Optimizing Keywords</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    dormque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ asset('img/service-icon-01.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>Page Optimizations</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    dormque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                                <img src="{{ asset('img/service-icon-02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                                <h4>Deep URL Analysis</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    dormque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>