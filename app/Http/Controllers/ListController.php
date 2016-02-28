<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    // 平面设计

    public function graphic (){

        $list = array(
            array(
                "title" => "产品画册",
                "desc" => "共20页，包括品牌故事、品牌理念、产品介绍等 副本",
                "time" => "2015年3月"
            ),
            array(
                "title" => "花卉门票",
                "desc" => "杭州君子兰门票设计方案，正反两面",
                "time" => "2016年1月"
            ),

            array(
                "title" => "优惠券",
                "desc" => "门票代金券，正反两页",
                "time" => "2016年1月"
            ),
            array(
                "title" => "宣传折页",
                "desc" => "三折页，活动、产品宣传页、共6面",
                "time" => "2014年11月"
            ),

            array(
                "title" => "售后卡",
                "desc" => "售后说明，两面对折，共4页",
                "time" => "2014年9月"
            )
        );

        $menu = Menu::getMenu('graphic');
        return view('list', compact('list', 'menu'));
    }

    //电商设计
    public function web () {

        $list = array(
            array(
                "title" => "产品海报",
                "desc" => "首页焦点图、微信打印机推广图、微博端页面等",
                "time" => "2015年3月"
            ),
            array(
                "title" => "活动页面1",
                "desc" => "母亲节活动页面、全屏",
                "time" => "2015年4月"
            ),

            array(
                "title" => "活动页面2",
                "desc" => "日常的活动页面、全屏",
                "time" => "2015年6月"
            ),

            array(
                "title" => "详情页",
                "desc" => "多款产品详情页、无线端",
                "time" => "2014年12月"
            )
        );

        $menu = Menu::getMenu('web');
        return view('list', compact('list', 'menu'));

    }

    //插画设计
    public function illustration (){

        $list = array(
            array(
                "title" => "卡通形象",
                "desc" => "品牌卡通形象、人物大咖形象",
                "time" => "2015年3月—至今"
            ),
            array(
                "title" => "产品手绘",
                "desc" => "化妆品、保洁类",
                "time" => "2015年9月"
            ),

            array(
                "title" => "日常手绘练习作品",
                "desc" => "风景、人物、花卉等写生",
                "time" => "2015年1月—至今"
            ),
            array(
                "title" => "字体设计",
                "desc" => "品牌logo、活动字体等",
                "time" => "2015年1月—至今"
            ),

            array(
                "title" => "漫画设计",
                "desc" => "九格、四格漫画",
                "time" => "2016年1月"
            )
        );

        $menu = Menu::getMenu('illustration');
        return view('list', compact('list', 'menu'));
    }




    //网页设计
    public function site (){

        $list = array(
            array(
                "title" => "网页设计1",
                "desc" => "科技公司官网、全屏",
                "time" => "2015年7月"
            ),
            array(
                "title" => "网页设计2",
                "desc" => "手机端、照片页面",
                "time" => "2015年3月"
            ),

            array(
                "title" => "APP设计",
                "desc" => "手机端活动页面、交互",
                "time" => "2015年4月"
            ),
            array(
                "title" => "少数民族网页",
                "desc" => "多款产品详情页、无线端",
                "time" => "2015年10月"
            )
        );

        $menu = Menu::getMenu('site');
        return view('list', compact('list', 'menu'));
    }

}
