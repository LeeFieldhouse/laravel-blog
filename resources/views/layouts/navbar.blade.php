<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 173, 'stickySetTop': '-173px', 'stickyChangeLogo': false}">
            <div class="header-body border-0">
                <div class="header-top header-top-default border-bottom-0 bg-color-primary">
                    <div class="container container-lg">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills text-2">
                                            <li class="nav-item d-none d-lg-inline-block">
                                                <span class="pl-0 pr-4 text-light opacity-8">Everything about Lifestyle, Travel and Gadgets!</span>
                                            </li>
                                            @if (! Auth::user())
                                                <li class="nav-item text-uppercase">
                                                    <a class="nav-link pl-0 pr-4 text-light" href="{{ route('login') }}">Sign In</a>
                                                </li>
                                                <li class="nav-item text-uppercase">
                                                    <a class="nav-link pl-0 pr-4 text-light" href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endif
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link pl-0 pr-4 text-light" href="about-us.html">About Us</a>
                                            </li>
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link pl-0 pr-4 text-light" href="contact-us.html">Contact Us</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="header-container container container-lg" style="min-height: 122px;">
                    <div class="header-row py-3">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <h1 class="header-logo">
                                    <a href="{{route('index')}}">
                                        <img alt="Porto" width="100" height="48" src="{{asset('img/logo-default-slim.png')}}">
                                        <span class="hide-text">Porto - Demo Blog 1</span>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="header-column justify-content-end w-75">
                            <div class="header-row">
                                <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">
                                    <img alt="Porto" class="img-fluid pl-3" src="img/blog/blog-ad-2.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-bar header-nav-bar-top-border bg-light">
                    <div class="header-container container container-lg">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row justify-content-end justify-content-lg-start">
                                    <div class="header-nav p-0">
                                        <div class="header-nav header-nav-links header-nav-spaced header-nav-first-item-no-padding justify-content-start">
                                            <div class="header-nav-main header-nav-main-square header-nav-main-font-lg-upper header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                <nav class="collapse">
                                                    <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                        <li class="ml-0">
                                                            <a class="{{ Route::currentRouteName() === 'index' ? 'active' : '' }}" href="{{route('index')}}">
                                                                Home
                                                            </a>
                                                        </li>
                                                        <li class="ml-0">
                                                            <a class="{{ Route::currentRoutename() === 'posts.index' ? 'active' : '' }}" href="{{route('posts.index')}}">
                                                                Posts
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="{{ Route::currentRoutename() === 'categories.show' ? 'active' : '' }}" dropdown-item dropdown-toggle" href="#">
                                                                Categories
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                @if($footerCategories)
                                                                    @foreach ($footerCategories as $category)
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{route('categories.show', $category->slug)}}">{{$category->name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </li>
                                                        @auth
                                                            <li>
                                                                <a class="dropdown-item dropdown-toggle" href="{{route('posts.create')}}">
                                                                    New Post
                                                                </a>
                                                            </li>
                                                        @endauth

                                                    </ul>
                                                </nav>
                                            </div>
                                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                        </div>
                                        <div class="header-nav-features">
                                            <div class="header-nav-features-search-reveal-container">
                                                <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                                    <a href="#" class="header-nav-features-search-show-icon d-inline-flex"><i class="fas fa-search header-nav-top-icon"></i></a>
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
            <div class="header-nav-features header-nav-features-no-border p-static">
                <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                    <div class="container">
                        <div class="row h-100 d-flex">
                            <div class="col h-100 d-flex">
                                <form role="search" class="d-flex h-100 w-100" action="page-search-results.html" method="get">
                                    <div class="big-search-header input-group">
                                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Type and hit enter...">
                                        <a href="#" class="header-nav-features-search-hide-icon"><i class="fas fa-times header-nav-top-icon"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
