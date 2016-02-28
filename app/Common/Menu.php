<?php
/**
 * Created by PhpStorm.
 * User: lunjiang
 * Date: 16/2/27
 * Time: 下午11:32
 */

namespace App\Http\Controllers;


class Menu
{
    public static $MENU = array(
        "home" => "首页",
        "graphic" => "平面设计",
        "illustration" => "插画设计",
        "web" => "电商设计",
        "aboutme" => '关于我'
    );


    public static function getMenu( $path ) {
        $arr = array();
        foreach( self::$MENU as $key => $value){
            array_add($arr, $key, array(
                "name" => $value,
                "selected" => $path == $key ? true: false
            ));
        }
        return $arr;
    }

}