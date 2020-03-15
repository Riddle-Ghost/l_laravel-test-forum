@extends('layouts.layout')

@section('content')

<!--main content start-->
<div class="main-content">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/{{$category->slug}}">{{$category->title}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$topic->title}}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">

                    <a href="/{{$topic->slug}}">{{$topic->title}}</a>
                    <br>

                    @foreach($posts as $post)
                        <div class="card">
                            <div class="row">
                                <div class="card" style="width: 25%">
                                    <img src="/img/no-user.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->user->name}}</h5>
                                        @if($post->user->is_admin)
                                            <p class="card-text">ADMIN</p>
                                        @else
                                            <p class="card-text">USER</p>
                                        @endif
                                        <p class="card-text">Registered: {{$post->user->registeredDate()}}</p>
                                        <p class="card-text">Posts: {{$post->user->posts_count}}</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 75%">
                                    <div class="card-body">
                                        <p class="card-text">{{$post->createdDate()}}</p>
                                        <p class="card-text">{{$post->text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                {{$posts->links()}}
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
