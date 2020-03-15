@extends('layouts.layout')

@section('content')

{{ $posts->links('vendor.pagination.default')}}

<div class="game-content forum tab">
    <table class="forum_table posts" id="theforum">
        <tbody>
            <tr class="forum_table_row headrow">
                <td class="forum_table_col headings tfix" colspan="5">
                    <div class="headings_wrap">
                        <h2 class="headings_title" title="{{$topic->title}}">{{$topic->title}}</h2>
                        <div class="headings_replies">
                                <span class="headings_replies_num">
                                    КОЛ_ВО
                                </span>
                            Replies
                        </div>
                    </div>
                </td>
            </tr>

            @foreach($posts as $post)

            <tr class="forum_table_row postItem" postid="720598" userid="8343523">
                <td class="forum_table_col user tfix">
                    <div class="user_wrap">
                        <a href="/profile/{{$post->user->id}}/" target="_blank" class="user_picture">
                            <span class="user_picture_avatar" style="background-image: url('//cnt-forum.plarium.com/file.bmp?url=https%3a%2f%2fi.imgur.com%2f5rLvLn4.png&amp;ava=1'), url('//cdn01.x-plarium.com/browser/old/forum/avatars/DefaultLogo180x180.png')" title="avatar" onerror="this.src = '//cdn01.x-plarium.com/browser/old/forum/avatars/DefaultLogo180x180.png'"></span>
                            <img src="/img/no-user.png" class="card-img-top" alt="...">
                        </a>
                        <div class="user-profile">
                            <table class="achievements-table">
                                <tbody><tr>
                                    <td class="achievements-cell">
                                        <a href="/achievements/" rel="nofollow" target="_blank"><img src="//cdn01.x-plarium.com/browser/content/forum/common/medal/achievement/small/oldboy4.png" title="Elder - Level: Platinum" class="postImage"></a>
                                    </td>
                                    <td class="achievements-cell">
                                        <a href="/achievements/" rel="nofollow" target="_blank"><img src="//cdn01.x-plarium.com/browser/content/forum/common/medal/achievement/small/topicstarter2.png" title="Wordsmith - Level: Silver" class="postImage"></a>
                                    </td>
                                    <td class="achievements-cell">
                                        <a href="achievements/" rel="nofollow" target="_blank"><img src="//cdn01.x-plarium.com/browser/content/forum/common/medal/achievement/small/karma3.png" title="Renowned - Level: Gold" class="postImage"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="rewards-cell">
                                        <a href="achievements/" rel="nofollow" target="_blank"><img src="https://cdn01.x-plarium.com/browser/content/forum/common/medal/reward/small/Logo_45x45_White.png" title="Plarium employee" class="postImage"></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>
                        <div class="user_name">
                            <a href="/profile/{{$post->user->id}}/" target="_blank" class="user_name_link" userid="{{$post->user->id}}" title="{{$post->user->name}}">{{$post->user->name}}</a>
                        </div>

                        <div class="user_role">
                            <div class="community">
                                @if($post->user->is_admin)
                                    ADMIN
                                @else
                                    USER
                                @endif
                            </div>
                        </div>

                        <div class="user_info">
                            Registered: {{$post->user->registeredDate()}}
                        </div>
                        <div class="user_info">
                            Posts: {{$post->user->posts_count}}
                        </div>
                        <div class="user_info">User ID: {{$post->user->id}}</div>
                        <div class="user_info">Post ID: {{$post->id}}</div>

                    </div>
                </td>
                <td class="forum_table_col post tfix" colspan="4">
                    <div class="post_wrap">
                        <div class="post_time" data-utc="2019-12-17T15:13:31.3430000">
                            {{$post->createdDate()}}
                        </div>
                        <div class="post_body">
                            {{$post->text}}
                        </div>
                        <div class="post_timezone">UTC +3:00</div>
                        <div class="post_controls">
                            <a class="read-more smaller marginedLight green floatedright plural copy-post-link icon icon-permalink hidden-xs hidden-sm" post-id="720598" onclick="processCopying(720598)">
                                <span>Link</span>
                            </a>
                            <span class="read-more smaller marginedLight green floatedleft plural icon icon-like">
                                0
                            </span>
                        </div>
                    </div>
                </td>
            </tr>

            @endforeach

            <tr class="forum_table_row headrow">
                <td class="forum_table_col headings" colspan="5">
                    <div class="headings_wrap">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="err err-fatal" id="PostError"></div>
    <div class="forum_reply" id="NewReply"></div>
</div>
{{ $posts->links('vendor.pagination.default')}}


@endsection
