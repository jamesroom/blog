<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8" />
    <title>旺佳佳的个人首页</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/home.css"></link>
    <link href="/images/short_cut.png" rel="shortcut icon" type="image/x-icon"/>
    <script type="text/javascript" src="{{ URL::asset('/') }}js/lib/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}js/lib/jquery.lazyload.js"></script>

    <style>
        .main{
            width: 990px;
            margin: 0 auto;
        }

        .item-list{

        }
    </style>
</head>
<body>
<div class="container">

    <div class="nav-bar">
        <div>欢迎进入旺佳佳的个人网站!</div>
    </div>

    <div class="header">
        <ul class="menu">
            @foreach( $menu as $item)
                <li @if ($item['selected'] === true)
                        class="cur"
                    @endif>
                    <a href="/{{$item['key']}}">{{ $item['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>


    <div class="main">

        @yield('content')

    </div>

    @if (!isset($noFooter))
    <div class="footer-bar" style="margin-top: 20px">
        <div>电话:13769185614</div>
        <div class="mail-to"><a href="mailto:734011428@qq.com">邮箱：734011428@qq.com</div>
    </div>
    @endif

    <script type="text/javascript">
        $("img.lazy").lazyload({
            effect : "fadeIn"
        });
    </script>
</div>
</body>
</html>
