<section id="facts" class="facts">
    <div class="container">
        <div class="section-title">
            <h2>{{ $titles[3]->main_title }}</h2>
            <p>{{ $titles[3]->sub_title }}</p>
        </div>
        <div class="row no-gutters">
            @for ($i = 0; $i < count($facts_items); $i++)
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="{{ $facts_items[$i]->icon }}"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $facts_items[$i]->number }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>{{ $facts_items[$i]->strong }}</strong>{{ $facts_items[$i]->p }}</p>
                </div>
            </div>
            @endfor
            {{-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur quae</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                </div>
            </div> --}}

        </div>

    </div>
</section><!-- End Facts Section -->
