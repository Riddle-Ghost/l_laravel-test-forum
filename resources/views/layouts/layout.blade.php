<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->

    <title>Blog</title>

    <!-- common css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/core.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">

</head>

<body>


<div class="page en desktop raid-shadow-legends">
    <div class="goup hidden-xs" id="goup"><i></i></div>

    @include('parts.header')

    <div class="cover"></div>
    <div class="panel panel-top">
        <div class="panel-box">
        </div>
    </div>
    <div id="toast-container"><div class="Toastify"></div></div>

    <section id="global-alert"><div class="global-alert-main"><div class="global-alert-container"></div></div></section>

    <script>
        var globalAlerts = InsertJson('[]');
        var PopForums = PopForums || {};
        PopForums.alerts = PopForums.alerts || {};
        PopForums.alerts.maxDisplayedGlobalAlerts = 2;
        var getReadMoreButtonText = 'Read more'; // global alert 'Read more' button language selection
    </script>

    <script src="/forum/fe/dist/scripts/alerts/front/GlobalAlerts.js"></script>
    <div class="page-box">

        <script>
            function rateTopic(rateTopicEvent) {
                var topicId = parseInt(rateTopicEvent.target.parentElement.attributes["value"].value, 10);
                var rateValue = parseInt(rateTopicEvent.target.value);

                var rateContainer = {
                    TopicId: topicId,
                    RateValue: rateValue
                };

                var rateValueElement = $(['#', topicId, "-container"].join(''));

                $.ajax({
                    url: '/forum/topic/rate/',
                    type: "POST",
                    data: rateContainer,
                    dataType: "json",
                    success: function (result) {
                        var width = result / 5 * 100;
                        rateValueElement.width(width + '%');
                    },
                    error: function () {

                    }
                });


            }
        </script>


        <!-----------------THE SETTING WRAP START FOR FORUM INDEX------------------->
        <div class="game">
            <a class="game-logo" id="portal_link" href="#"></a>
            <div class="game-container-wrapper">
                <div class="game-container">
                    <div class="game-btn-play head">

                        <a class="js-playnow-link play-btn" title="PLAY NOW" href="#">
                            <span class="play-btn-text">PLAY NOW</span>
                            <span class="play-btn-text-fb">Play free on facebook</span>
                        </a>
                        <div class="play-btn-wrapper">
                            <div class="breathing"></div>
                            <div class="hover"></div>
                            <div class="active"></div>
                        </div>
                    </div>
                    <div class="game-heading">

                        <div class="breadcrumbs ">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list_item _root">
                                    <a href="/">
                                        <img src="//cdn01.x-plarium.com/browser/content/forum/common/logotypes/plarium_logo_25_18_white.png">
                                    </a>
                                </li>
                                <li class="breadcrumbs_list_item _folder"><a href="/" class="breadcrumbs-item">Forum</a></li>
                                @if( !isset ($categories) && isset ($category) )
                                    <li class="breadcrumbs_list_item _folder"><a href="/{{$category->slug}}" class="breadcrumbs-item">{{$category->title}}</a></li>
                                @endif
                                @if( !isset ($categories) && !isset ($topics) && isset ($topic) )
                                    <li class="breadcrumbs_list_item _folder"><a href="/{{$category->slug}}/{{$topic->slug}}" class="breadcrumbs-item">{{$topic->title}}</a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="lang-switch">Language: <a href="/forum/" class="en-lang-switch active">/forum/</a><a href="/forum/ru/" class="ru-lang-switch ">/forum/ru/</a></div>
                    </div>
                    <!-----------------SETTING BODY START------------------->

                    <section id="category-alert">
                        <div class="category-alert-main">
                            <div class="category-alert-container">
                                <div class="category-alert-node">
                                    <span class="category-alert-text">
                                        <a href="/" target="_blank">Добро пожаловать на Форум!</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="forum_pagination">
                        <div class="forum_pagination_wrap">

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="game-content forum tab">
                        <table class="forum_table topics mb0">
                            <tbody><tr class="forum_table_row headrow">
                                <td class="forum_table_col headings tfix" colspan="5">
                                    <div class="headings_wrap">
                                        <h2 class="headings_title" title="RAID: Shadow Legends RU">RAID: Shadow Legends RU</h2>
                                        <div class="folder-control">
                                        </div>
                                    </div>
                                </td>
                            </tr></tbody>
                        </table>
                        <table class="forum_table topics mb0">
                            <tbody><tr class="forum_table_row headrow">

                                <td class="forum_table_col headings tfix" colspan="5">
                                    <div class="headings_wrap">
                                        <h2 class="headings_title" title="RAID: Shadow Legends RU">Folders</h2>

                                    </div>
                                </td>
                            </tr>
                            </tbody></table>



                        <table class="forum_table topics mb0">
                            <tbody><tr class="forum_table_row headrow">
                                <td class="forum_table_col headings tfix" colspan="5">
                                    <div class="control_wrap">

                                    </div>
                                </td>
                            </tr>
                            </tbody></table>

@include('parts.flash')
@yield('content')

                        <table class="forum_table topics mt0">
                            <tbody><tr class="forum_table_row headrow">
                                <td class="forum_table_col headings tfix" colspan="5">
                                    <div class="headings_wrap">
                                    </div>
                                </td>
                            </tr>
                            </tbody></table>



                        <div class="stats">
                            <div class="stats-box">
                                <span class="stats-users">7024016 users registered;</span>
                                <span class="stats-topics">131465 topics;</span>
                                <span class="stats-posts">488742 posts;</span>
                                <span class="stats-newest">our newest member:<span class="username">SimSim</span></span>
                            </div>
                        </div>

                    </div>
                    <div class="forum_pagination">
                        <div class="forum_pagination_wrap">

                        </div>
                    </div>
                    <!-----------------SETTING BODY END------------------->
                    <div class="game-legend">
                        <ul class="game-legend-list indicator">
                            <li><span class="indicator-link display-indicator-1"></span><span class="indicator-text">New posts</span></li>
                            <li><span class="indicator-link display-indicator-3"></span><span class="indicator-text">Pinned. New posts</span></li>
                            <li><span class="indicator-link display-indicator-5"></span><span class="indicator-text">Locked. New posts</span></li>
                            <li><span class="indicator-link display-indicator-7"></span><span class="indicator-text">Pinned and locked. New posts</span></li>
                            <li><span class="indicator-link display-indicator-0"></span><span class="indicator-text">No new posts</span></li>
                            <li><span class="indicator-link display-indicator-2"></span><span class="indicator-text">Pinned. No new posts</span></li>
                            <li><span class="indicator-link display-indicator-4"></span><span class="indicator-text">Locked. No new posts</span></li>
                            <li><span class="indicator-link display-indicator-6"></span><span class="indicator-text">Pinned and locked. No new posts</span></li>
                        </ul>
                    </div>
                    <div class="game-btn-play foot">

                        <a class="js-playnow-link play-btn" title="PLAY NOW" href="#">
                            <span class="play-btn-text">PLAY NOW</span>
                            <span class="play-btn-text-fb">Play free on facebook</span>
                        </a>
                        <div class="play-btn-wrapper">
                            <div class="breathing"></div>
                            <div class="hover"></div>
                            <div class="active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------THE SETTING WRAP FOR FORUM INDEX END------------------->

        <script src="/forum/fe/dist/scripts/hierarchyView.js"></script>
        <script src="/forum/fe/dist/scripts/topicView/index.js"></script>

    </div>
    <div class="panel panel-bottom hidden-md hidden-lg">
        <div class="panel-box">
            <ul class="panel-navi ">
                <li class="panel-navi-item">
                    <a href="/">Faq</a>
                </li>
                <li class="panel-navi-item">
                    <a href="/">Our team</a>
                </li>
            </ul>
        </div>
    </div>
    @include('parts.footer')
</div>


<!-- js files -->
<script type="text/javascript" src="/js/front.js"></script>
</body>
</html>
