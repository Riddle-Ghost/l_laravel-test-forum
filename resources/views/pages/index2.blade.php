@extends('layouts.layout')

@section('content')

<table class="forum_table categories" id="forum">
    <tbody>

        @foreach($categories as $category)

        <tr class="forum_table_row" data-forumid="734">
            <td class="forum_table_col indicator">
                <a class="indicator-link display-indicator-0" href="/{{$category->slug}}" title="{{$category->title}}"></a>
            </td>
            <td class="forum_table_col matter">
                <div class="matter_wrap">
                    <a class="matter_link" href="/{{$category->slug}}">
                        <h3 class="matter_name" title="{{$category->title}}">
                            {{$category->title}}
                        </h3>
                        <span class="matter_description" title="{{$category->description}}">
                            {{$category->description}}
                        </span>
                    </a>
                    <div class="matter_mobile">
                        <div class="count_wrap">
                            <span class="count_num">
                                {{$category->topics_count}}
                            </span>
                            <span class="count_label">Topics</span>
                            <span class="count_num">
                                {{$category->posts_count}}
                            </span>
                            <span class="count_label">Posts</span>
                        </div>
                    </div>
                </div>
            </td>
            <td class="forum_table_col info">
                <div class="info_wrap">
                    <span class="info_last">Last message</span>
                    <span class="info_time" data-utc="2019-12-27T06:33:53.2130000">
                        {{$category->getPostLastDate()}}
                    </span>
                    <span class="info_by">by</span>
                    <span class="info_who">
                        {{$category->getPostLastUserName()}}
                    </span>
                </div>
            </td>
            <td class="forum_table_col count">
                <div class="count_wrap">
                    <span class="count_num">
                        {{$category->topics_count}}
                    </span>
                    <span class="count_label">Topics</span>
                </div>
            </td>
            <td class="forum_table_col count">
                <div class="count_wrap">
                    <span class="count_num">
                        {{$category->posts_count}}
                    </span>
                    <span class="count_label">Posts</span>
                </div>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection
