<div id="features" class="features section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="features-content">
                    <div class="row">

                        @foreach ($features as $feature)
                            <div class="col-lg-3">
                                <div class="features-item {{ $feature["class"] }} wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay={{ $feature["data_wow_delay"] }}>
                                    <div class="{{ $feature["subClass"] }} number">
                                        <h6>{{ $feature["numero"] }}</h6>
                                    </div>
                                    <div class="icon"></div>
                                    <h4>{{ $feature["name"] }}</h4>
                                    <div class="line-dec"></div>
                                    <p>{{ $feature["description"] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="skills-content">
                    <div class="row">

                        @foreach ($features as $feature)                            
                            <div class="col-lg-3">
                                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay={{ $feature['data_wow_delay'] }}>
                                    <div class="progress" data-percentage="{{ $feature['percentage'] }}">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                {{ $feature['percentage'] }}%<br>
                                                <span>{{ $feature['technology'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>