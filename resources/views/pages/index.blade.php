@extends('layouts.layout')

@section('content')

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach($categories as $category)
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="/{{$category->slug}}">
                                        <h3>{{$category->title}}</h3>
                                        <p>{{$category->description}}</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <p>{{$category->getPostLastDate()}}</p>
                                    <p>{{$category->getPostLastUserName()}}</p>
                                    <p>{{$category->topics_count}} Topic</p>
                                    <p>{{$category->posts_count}} Post</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <article class="post">
                    <div class="post-thumb">
                        <a href="">
                            <img src="" alt="">
                        </a>

                        <a href="" class="post-thumb-overlay text-center">
                            <div class="text-uppercase text-center">View Post</div>
                        </a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6>
                                <a href=""></a>
                            </h6>
                            <h1 class="entry-title">
                                <a href=""></a>
                            </h1>
                        </header>
                        <div class="entry-content">
                            <p></p>

                            <div class="btn-continue-reading text-center text-uppercase">
                                <a href="" class="more-link">Continue Reading</a>
                            </div>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">By <a href="#"></a> On </span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>


            </div>
        </div>
    </div>
</div>
<!-- end main content-->

@endsection
