@extends('layouts.app')


@section('content')

<section class="section border-0 m-0 pb-3">
    <div class="container container-lg">
        <div class="row pb-1">

            @foreach ($topPosts as $post)
                <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                    <a href="/posts/{{$post->slug}}">
                        <article>
                            <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                    <img src="{{ $post->thumb }}" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
                                    <div class="thumb-info-title bg-transparent p-4">
                                        @foreach ($post->categories as $category)
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">{{$category->name}}</div>
                                        @endforeach
                                        <div class="thumb-info-inner mt-1">
                                            <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{ $post->title }}</h2>
                                        </div>
                                        <div class="thumb-info-show-more-content">
                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{!!str_limit($post->body, $limit="75", $end="...")!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            @endforeach


        </div>
    </div>
</section>

<div class="container container-lg">
    <div class="row py-5">
        <div class="col-md-6 col-lg-4">

            <h3 class="font-weight-bold text-3 mb-0">Popular Posts</h3>

            <ul class="simple-post-list">

                <li>
                    <article>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-55.jpg" class="border-radius-0" width="50" height="50" alt="Simple Ways to Have a Pretty Face">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">Simple Ways to Have a Pretty Face</a></h4>
                            <div class="post-meta">
                                January 12, 2019
                            </div>
                        </div>
                    </article>
                </li>

                <li>
                    <article>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-56.jpg" class="border-radius-0" width="50" height="50" alt="Ranking the greatest players in basketball">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">Ranking the greatest players in basketball</a></h4>
                            <div class="post-meta">
                                January 12, 2019
                            </div>
                        </div>
                    </article>
                </li>

                <li>
                    <article>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-57.jpg" class="border-radius-0" width="50" height="50" alt="4 Ways to Look Cool in Glasses">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">4 Ways to Look Cool in Glasses</a></h4>
                            <div class="post-meta">
                                January 12, 2019
                            </div>
                        </div>
                    </article>
                </li>

                <li>
                    <article>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-58.jpg" class="border-radius-0" width="50" height="50" alt="Top Camper Trailer Towing Tips">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">Top Camper Trailer Towing Tips</a></h4>
                            <div class="post-meta">
                                January 12, 2019
                            </div>
                        </div>
                    </article>
                </li>

                <li>
                    <article>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-59.jpg" class="border-radius-0" width="50" height="50" alt="5 Lovely Walks in New York">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">5 Lovely Walks in New York</a></h4>
                            <div class="post-meta">
                                January 12, 2019
                            </div>
                        </div>
                    </article>
                </li>
            </ul>

        </div>
        <div class="col-md-6 col-lg-4">

            <h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Recent Posts</h3>

            <ul class="simple-post-list">

                @foreach ($posts as $post)
                <li>
                    <div class="post-image">
                        <div class="img-thumbnail img-thumbnail-no-borders d-block">
                            <a href="blog-post.html">
                                <img src="{{ $post->thumb }}" class="border-radius-0" width="50" height="50" alt="Main Reasons To Stop Texting And Driving">
                            </a>
                        </div>
                    </div>
                    <div class="post-info">
                        <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">{{$post->title}}</a></h4>
                        <div class="post-meta">
                            {{ $post->created_at->format('F d, Y') }}
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>

        </div>
        <div class="col-lg-4">

            <h3 class="font-weight-bold text-3 mt-4 mt-md-0">Featured Posts</h3>

            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 5000}">
                @foreach ($posts as $post)
                    @if (!$post->featured)
                        <div>
                            <a href="{{route('posts.show', $post->slug)}}">
                                <article>
                                    <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                        <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                            <img src="{{$post->thumb}}" class="img-fluid" alt="Main Reasons To Stop Texting And Driving">
                                            <div class="thumb-info-title bg-transparent p-4">
                                                @foreach ($post->categories as $category)
                                                    <div class="thumb-info-type bg-color-primary px-2 mb-1">{{ $category->name }}</div>
                                                @endforeach

                                                <div class="thumb-info-inner mt-1">
                                                    <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Main Reasons To Stop Texting And Driving</h2>
                                                </div>
                                                <div class="thumb-info-show-more-content">
                                                    <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Lorem ipsum dolor sit amet, consectetur adip...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endif

                @endforeach


            </div>

            <h3 class="font-weight-bold text-3 mt-4 pt-2 mb-2 mt-4 mt-md-0">Featured Author</h3>

            <div class="post-block post-author pt-2">
                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                    <a href="blog-post.html">
                        <img class="border-radius-0" src="img/avatars/avatar.jpg" alt="The post author image" style="height: 112px; max-height: 112px; width: auto; max-width: 100%;">
                    </a>
                </div>
                <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block text-dark">John Doe</a></strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pelle, consectetur adipiscing elit. </p>
            </div>

        </div>
    </div>
</div>

<section class="section bg-color-primary border-0 m-0">
    <div class="container container-lg">
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel owl-theme nav-dark stage-margin nav-style-1 m-0" data-plugin-options="{'items': 6, 'margin': 5, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    @foreach ($categories as $category)
                        <div class="px-3">
                            <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">{{$category->name}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container container-lg">

    <div class="row mt-5 pt-3">
        <div class="col-md-9">
            <div class="blog-posts">

                @foreach ($mainPosts as $post)
                    <article class="post post-large">
                        <div class="post-image">
                            <a href="{{route('posts.show', $post->slug)}}">
                                <img src="{{$post->feature}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="How to Make Friends as a Grown-Up" />
                            </a>
                        </div>

                        <div class="post-date text-1">
                            <span class="day border-radius-0 text-4 text-dark">{{$post->created_at->format('d')}}</span>
                            <span class="month border-radius-0 text-1 bg-color-dark">{{$post->created_at->format('M')}}</span>
                        </div>

                        <div class="post-content">

                            <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="{{route('posts.show', $post->slug) }}" class="text-dark">{{$post->title}}</a></h2>
                            <p>{!! str_limit($post->body, 428, '...') !!}</p>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">{{$post->user->name}}</a> </span>

                                <span><i class="far fa-folder"></i>
                                    @foreach($post->categories as $category)
                                     <a href="{{route('categories.show', $category->slug) }}">{{$category->name}}</a>,
                                     @endforeach
                                </span>
                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{route('posts.show', $post->slug)}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                            </div>

                        </div>
                    </article>
                @endforeach




                <ul class="pagination float-right">
                    {{$mainPosts->links()}}
                </ul>

            </div>
        </div>
        <div class="col-md-3">
            <aside class="sidebar pb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                <h5 class="font-weight-bold">Latest from Twitter</h5>
                <div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                    <p>Please wait...</p>
                </div>
                <h5 class="font-weight-bold pt-4">Photos from Instagram</h5>
                <div id="instafeedNoMargins" class="mb-4 pb-1"></div>
                <h5 class="font-weight-bold pt-4 mb-2">Tags</h5>
                <div class="mb-3 pb-1">
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">design</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">brands</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">video</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">business</span></a>
                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">travel</span></a>
                </div>
                <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="my-4 pt-3 d-block">
                    <img alt="Porto" class="img-fluid" src="img/blog/blog-ad-1-medium.jpg" />
                </a>
                <h5 class="font-weight-bold pt-4">Find us on Facebook</h5>
                <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
            </aside>
        </div>
    </div>

</div>




@endsection
