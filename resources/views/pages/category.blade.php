@extends('layouts.layout')

@section('content')

<!--main content start-->
<div class="main-content">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">

                <h1>{{$category->title}}</h1>
                <br>
                <h3>Топики</h3>
                @foreach($topics as $topic)
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="/{{$category->slug}}/{{$topic->slug}}">
                                        <h4>{{$topic->title}}</h4>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <p>{{$topic->getPostLastDate()}}</p>
                                    <p>{{$topic->getPostLastUserName()}}</p>
                                    <p>Топик-Просмотры</p>
                                    <p>{{$topic->posts_count}} Post</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$topics->links()}}
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
