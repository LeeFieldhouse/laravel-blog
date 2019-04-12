<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    @yield('scripts')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <div role="main" class="main">
            @yield('content')
        </div>

        <footer id="footer">
            <div class="container container-lg">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <div class="row py-5 my-4">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
                        <p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
                        <p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <h5 class="text-3 mb-3">RECENT POSTS</h5>
                        <ul class="list-unstyled mb-0">
                            @if($footerPosts)
                                @foreach ($footerPosts as $post)
                                    <li class="media mb-3 pb-1">
                                        <article class="d-flex">
                                            <a href="#">
                                                <img class="mr-3 rounded-circle" src="{{$post->thumb}}" alt="" style="width: 60px; height: 60px;">
                                            </a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h6 class="text-3 text-color-light opacity-8 ls-0 mb-1 mt-2">{{$post->title}}</h6>
                                                    <p class="text-2 mb-0">{{$post->created_at->format('F d, Y')}}</p>
                                                </a>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                        <h5 class="text-3 mb-3">RECENT COMMENTS</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 pb-1">
                                <a href="#">
                                    <p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                    <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                    <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <h5 class="text-3 mb-3">CATEGORIES</h5>
                        <p>
                            @if($footerCategories)
                                @foreach ($footerCategories as $category)
                                    <a href="/categories/{{$category->slug}}"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">{{ $category->name }}</span></a>
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container container-lg py-2">
                    <div class="row py-4">
                        <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                            <a href="index.html" class="logo pr-0 pr-lg-3">
                                <img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" height="33">
                            </a>
                        </div>
                        <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>© Copyright 2019. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                            <nav id="sub-menu">
                                <ul>
                                    <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/common/common.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>
    <script src="{{asset('vendor/instafeed/instafeed.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('js/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('js/theme.init.js')}}"></script>

    <!-- Examples -->
    <script src="{{asset('js/examples/examples.instafeed.js')}}"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-12345678-1', 'auto');
        ga('send', 'pageview');
    </script>
     -->

</body>
</html>
