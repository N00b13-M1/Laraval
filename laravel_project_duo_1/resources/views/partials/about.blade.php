<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="{{ asset($about_items->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="section-heading">
                    <h6>{{ $titles[0]->subtitle }}</h6>
                    <h2>{!! $titles[0]->fulltitle !!}</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>{{ $about_items->projectsFinished }}</h4>
                            <h6>projects finished</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>{{ $about_items->happyClients }}</h4>
                            <h6>happy clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>{{ $about_items->awards }}</h4>
                            <h6>awards</h6>
                        </div>
                    </div>
                </div>
                <p><a rel="nofollow" href="{{ $about_items->span_href }}" target="_parent">{{ $about_items->span }}</a>
                    {{ $about_items->description }}</p>
                <div class="main-green-button"><a href="{{ $about_items->button_link }}">{{ $about_items->button }}</a></div>
            </div>
        </div>
    </div>
</div>