<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="info-stat">
                                        <h6>Agency Status:</h6>
                                        <h4>{{ $banner->agencyStatus }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="info-stat">
                                        <h6>Price:</h6>
                                        <h4>{{ $banner->price }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="info-stat">
                                        <h6>Schedules</h6>
                                        <h4>{{ $banner->schedules }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h2>{{ $banner->title }}</h2>
                                </div>
                                <div class="col-lg-12">
                                    <div class="main-green-button scroll-to-section">
                                        <a href="{{ $banner->button_link }}">{{ $banner->button }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ $banner->image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>