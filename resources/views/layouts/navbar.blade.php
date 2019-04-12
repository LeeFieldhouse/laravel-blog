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
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                                Portfolio
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Single Project</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Grid Layouts</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Masonry Layouts</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Sidebar Layouts</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Ajax</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Extra</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                                Blog
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Large Image</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right Sidebar </a></li>
                                                                        <li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Medium Image</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Grid</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Masonry</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Timeline</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Single Post</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Post Comments</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
                                                                        <li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                                Shop
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Single Product</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">3 Columns</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">2 Columns</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
                                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">1 Column</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
                                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
                                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
                                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                                                <li><a class="dropdown-item" href="shop-login.html">Login</a></li>
                                                                <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </li>
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
