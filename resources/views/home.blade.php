@extends('layout')
@section('content')
    <div class="slider-con">
        <img src="/images/slide1.png"/>
    </div>

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
