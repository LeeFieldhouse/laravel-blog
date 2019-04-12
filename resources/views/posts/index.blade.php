@extends('layouts.app')


@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">Large Image Full Width</h1>
<span class="sub-title text-dark">Check out our Latest News!</span>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">
                    @foreach ($posts as $post)
                        <article class="post post-large">
                            <div class="post-image">
                                <a href="/posts/{{$post->slug}}">
                                    <img src="{{ $post->feature }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>

                            <div class="post-date">
                                <span class="day">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->format('M')}}</span>
                            </div>

                            <div class="post-content">

                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></h2>
                                {!! str_limit($post->body, 429, '...') !!}
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">{{ $post->user->name }}</a> </span>
                                    <span>
                                        <i class="far fa-folder"></i>
                                        @foreach($post->categories as $category)
                                            <a href="{{route('categories.show', $category->slug)}}">{{$category->name}}</a>,
                                        @endforeach
                                    </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{route('posts.show', $post->slug)}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                </div>

                            </div>
                        </article>
                    @endforeach




                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </ul>

                </div>
            </div>

        </div>

    </div>




@endsection
