    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h4>{{ $nav_items->title}}<img src="{{ $nav_items->path}}" alt=""></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">

                            <li class="scroll-to-section"><a href="{{ $nav_links[0]->href }}" class="active">{{ $nav_links[0]->title }}</a></li>
                            <li class="scroll-to-section"><a href="{{ $nav_links[1]->href }}">{{ $nav_links[1]->title}}</a></li>
                            <li class="scroll-to-section"><a href="{{ $nav_links[2]->href }}">{{ $nav_links[2]->title}}</a></li>
                            <li class="scroll-to-section"><a href="{{ $nav_links[3]->href }}">{{ $nav_links[3]->title}}</a></li>
                            <li class="scroll-to-section"><a href="{{ $nav_links[4]->href }}">{{ $nav_links[4]->title}}</a></li>
                            <li class="scroll-to-section"><a href="{{ $nav_links[5]->href }}">{{ $nav_links[5]->title}}</a></li>
                            <li class="scroll-to-section">
                                <div class="main-blue-button"><a href="/backoffice"><i class="fa-solid fa-user"></i></i> Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->