<?php
/**
 * Created by PhpStorm.
 * User: lunjiang
 * Date: 16/2/27
 * Time: ����11:32
 */

namespace App\Http\Controllers;


class Menu
{
    public static $MENU = array(
        "home" => "��ҳ",
        "graphic" => "ƽ�����",
        "illustration" => "�廭���",
        "web" => "�������",
        "aboutme" => '������'
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