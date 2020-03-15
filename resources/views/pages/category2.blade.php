@extends('layouts.layout')

@section('content')

<div class="forum_pagination">
    <div class="forum_pagination_wrap">
        <div class="headings_links"><span class="current">1</span><a class="topage" href="/2/">  2  </a><a class="topage" href="/forum/en/raid-shadow-legends/734_novosti/3/">  3  </a><a class="next" href="/forum/en/raid-shadow-legends/734_novosti/2/" title="Next" rel="next">  Next Page  </a><a class="tolast" href="/forum/en/raid-shadow-legends/734_novosti/3/" title="Last">  Last Page  </a></div>
    </div>
</div>
<div class="clearfix"></div>

<div class="breadcrumbs ">
    <ul class="breadcrumbs_list">
        <li class="breadcrumbs_list_item _root">
            <a href="/">
                <img src="//cdn01.x-plarium.com/browser/content/forum/common/logotypes/plarium_logo_25_18_white.png">
            </a>
        </li>
        <li class="breadcrumbs_list_item _folder"><a href="/" class="breadcrumbs-item">Forum</a></li>
        <li class="breadcrumbs_list_item _folder"><a href="/{{$category->slug}}" class="breadcrumbs-item">{{$category->title}}</a></li>
    </ul>
</div>

<div class="game-content forum tab">
    <table class="forum_table topics mb0">
        <tbody><tr class="forum_table_row headrow">
            <td class="forum_table_col headings tfix" colspan="5">
                <div class="headings_wrap">
                    <h2 class="headings_title" title="{{$category->title}}">{{$category->title}}</h2>
                    <div class="folder-control">
                    </div>
                </div>
            </td>
        </tr>
        </tbody></table>

    <table class="forum_table topics mb0">
        <tbody>
            <tr class="forum_table_row headrow">
                <td class="forum_table_col headings tfix" colspan="5">
                    <div class="control_wrap">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="forum_table topics mb0">
        <tbody>
            <tr class="forum_table_row headrow">
            <td class="forum_table_col headings tfix" colspan="5">
                <div class="headings_wrap">
                    <h2 class="headings_title" title="Новости">Topics</h2>
                    <div class="sorting-list pull-right">
                        <div class="hidden-xs">
                            <a class="active" href="/forum/en/raid-shadow-legends/734_novosti/">
                                All
                            </a>
                            <a href="/forum/en/raid-shadow-legends/734_novosti/?sort=Active">
                                Active
                            </a>
                            <a href="/forum/en/raid-shadow-legends/734_novosti/?sort=Best">
                                Top rated
                            </a>
                            <a href="/forum/en/raid-shadow-legends/734_novosti/?sort=New">
                                New
                            </a>
                            <a href="/forum/en/raid-shadow-legends/734_novosti/?sort=SelfActive">
                                Recently viewed
                            </a>
                        </div>

                        <select class="visible-xs" onchange="topicSortChanged(event)">
                            <option selected="" value="">All</option>
                            <option value="Active">Active</option>
                            <option value="Best">Top rated</option>
                            <option value="New">New</option>
                            <option value="SelfActive">Recently viewed</option>
                        </select>
                    </div>
                </div>
            </td>
            </tr>
        </tbody>
    </table>
    <table class="forum_table topics mb0 mt0" id="theforum">
        <tbody>

            @foreach($topics as $topic)

                <tr class="forum_table_row ">
                    <td class="forum_table_col indicator">
                        <a class="indicator-link display-indicator-1 hasAdminReplies" href="/{{$category->slug}}/{{$topic->slug}}" title="{{$topic->title}}"></a>
                    </td>
                    <td class="forum_table_col matter" data-topicid="175527">
                        <div class="matter_wrap">
                            <a class="matter_link tfix" href="/{{$category->slug}}/{{$topic->slug}}" title="{{$topic->title}}" id="ui-id-10">
                                <h3 class="matter_name js-topic-title" title="Содержимое первого поста">
                                    {{$topic->title}}
                                </h3>
                            </a>
                            <div class="matter_mobile">
                                <div class="count_wrap">
                                    <span class="count_num">Просмотры</span>
                                    <span class="count_label">View</span>
                                    <span class="count_num">
                                        {{$topic->posts_count}}
                                    </span>
                                    <span class="count_label">Replies</span>
                                </div>
                            </div>
                            <div class="matter_paging" id="legendarniy-chempion-tormin--">

                                <script>
                                    pageTopic('5', 'legendarniy-chempion-tormin--', $('<a href="/">Легендарный Чемпион Тормин. </a>').attr('href'));
                                </script>
                                <a href="/" class="matter_paging_link">1</a>
                                <a href="/2/" class="matter_paging_link">2</a>
                                <a href="/3/" class="matter_paging_link">3</a>
                                <a href="/4/" class="matter_paging_link">4</a>
                                <span class="matter_paging_link disabled">...</span>
                                <a href="/5/" class="matter_paging_link">5</a>
                            </div>



                            <div class="rating-box">

                                <!--<h2 id="175527-container">0</h2>-->
                                <ul id="175527-container" class="rating-list rating-current" value="0" style="width: 50%">
                                    <li class="icon icon-star">5</li>
                                    <li class="icon icon-star">4</li>
                                    <li class="icon icon-star">3</li>
                                    <li class="icon icon-star">2</li>
                                    <li class="icon icon-star">1</li>
                                </ul>
                                <ul class="rating-list" value="175527">
                                    <li class="icon icon-star" value="5">5</li>
                                    <li class="icon icon-star" value="4">4</li>
                                    <li class="icon icon-star" value="3">3</li>
                                    <li class="icon icon-star" value="2">2</li>
                                    <li class="icon icon-star" value="1">1</li>
                                </ul>
                            </div>
                            <div class="sorting-list pull-left tags"></div>
                        </div>
                    </td>
                    <td class="forum_table_col info">
                        <div class="info_wrap">
                            <span class="info_last">Last message</span>
                            <span class="info_time" data-utc="2019-12-27T12:11:45.5970000">
                                {{$topic->getPostLastDate()}}
                            </span>
                            <span class="info_by">by</span>
                            <span class="info_who">
                                {{$topic->getPostLastUserName()}}
                            </span>
                        </div>
                    </td>
                    <td class="forum_table_col count">
                        <div class="count_wrap">
                            <span class="count_num">ПРОСМОТРЫ</span>
                            <span class="count_label">View</span>
                        </div>
                    </td>
                    <td class="forum_table_col count">
                        <div class="count_wrap">
                            <span class="count_num">
                                {{$topic->posts_count}}
                            </span>
                            <span class="count_label">Replies</span>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>


    <table class="forum_table topics mt0">
        <tbody><tr class="forum_table_row headrow">
            <td class="forum_table_col headings tfix" colspan="5">
                <div class="headings_wrap">
                </div>
            </td>
        </tr>
        </tbody></table>


</div>


{{$topics->links()}}

<div class="forum_pagination">
    <div class="forum_pagination_wrap">
        <div class="headings_links"><span class="current">1</span><a class="topage" href="/forum/en/raid-shadow-legends/734_novosti/2/">  2  </a><a class="topage" href="/forum/en/raid-shadow-legends/734_novosti/3/">  3  </a><a class="next" href="/forum/en/raid-shadow-legends/734_novosti/2/" title="Next" rel="next">  Next Page  </a><a class="tolast" href="/forum/en/raid-shadow-legends/734_novosti/3/" title="Last">  Last Page  </a></div>
    </div>
</div>

@endsection
