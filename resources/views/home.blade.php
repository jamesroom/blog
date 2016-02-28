@extends('layout')
@section('content')
    <script type="text/javascript" src="{{ URL::asset('/') }}js/lib/jssor.slider.min.js"></script>
    <div class="slider-con J_Slider" id="J_Slider">


        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 990px; height: 470px;">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 990px; height: 470px;">
                <div><a target="_blank" href="/aboutme"><img u="image" src="/images/slider1.png" /></a></div>
                <div><a target="_blank" href="/aboutme"><img u="image" src="/images/slider2.png" /></a></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var transition = [
                //{$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$JssorEasing$.$EaseInWave,$Top:$JssorEasing$.$EaseInWave,$Clip:$JssorEasing$.$EaseLinear},$Outside:true,$Round:{$Left:0.8,$Top:2.5}}
                //{$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$JssorEasing$.$EaseInWave,$Top:$JssorEasing$.$EaseInWave,$Clip:$JssorEasing$.$EaseOutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}}
            ];
            var options = {
                $Idle: 5000,
                $AutoPlay: true,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions:transition ,
                    $TransitionsOrder: 1,
                    $ShowLink: true
                }
            };
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        });


    </script>

    <div>
        <a href="/graphic">
        <div class="item-first">
            <div class="item-tile">
                <div class="item-txt">
                    <div class="txt1">就是要创意</div>
                    <div class="txt2">Is to be creative</div>
                    <div class="txt3">平面设计案例</div>
                </div>
            </div>

            <div class="img-con">

            </div>
            <span class="icon-tip"></span>
        </div>
        <img src="/images/main_pm.png"/>
         </a>
    </div>


    <div class="item-list">
        <div class="item">
           <a href="/web">
            <div class="item-h"  style="background: #e1e1d9">
                <div class="title">电商设计案例</div>
                <div class="desc">
                    这是我的强项哦，嘿嘿，
                    不仅能做设计还能进行
                    简单的页面效果实现哦，
                    真是设计页面装修店铺
                    两不误的电商公司必备人才。
                </div>
            </div>

            <div class="img-con">
                <img src="/images/main_ds.png"/>
            </div>
           </a>
        </div>

        <div class="item">
            <a href="/illustration">

            <div class="item-h"  style="background: #93ebf6">
                <div class="title">插画设计案例</div>
                <div class="desc">
                    画画是我的爱好，
                    有事没事都喜欢画上几笔
                    ，最 喜爱画自然花草植物，
                    在专业的插画公司实习过 三个月，
                    对我来说这段经历非常珍贵。
                </div>
            </div>
            <div class="img-con">
                <img src="/images/main_ch.png"/>
            </div>
            </a>
        </div>

        <div class="item">
            <a href="/site">
                <div class="item-h" style="background: #e1e1d9">
                    <div class="title">网页设计案例</div>
                    <div class="desc">
                        由于男票是一枚苦逼的程序猿，
                        所以自然跟网页设计 离不开
                        ，除了工作之外，还经常帮
                        男票设计网页,发现其实也是很好玩感觉。
                    </div>
                </div>
                <div class="img-con">
                    <img src="/images/main_web.png"/>
                </div>
            </a>
        </div>
    </div>

    <div class="intro">
        <a href="/aboutme">
            <img src="/images/who_am.png"/>
        </a>
        <a class="intro-a" href="/aboutme">点击了解我&gt;&gt;</a>
    </div>
@endsection
