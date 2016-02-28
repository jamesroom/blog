<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class DetailController extends Controller
{
    //
    public function index (Request $request, $name) {
        preg_match('/[^\/]+/i', $request->path(), $path);
        $menu = Menu::getMenu($path[0]);
        $files = (new Filesystem())->files('images/work/'.$name);
        $images = array();

        foreach( $files as $img) {
            $info = getimagesize($img);
            $propotion = $info[0] / $info[1];
            $width = $info[0];
            $width = $width > 970 ? 970: $width;
            $height = $width/ $propotion;

            array_push($images, array(
                "url" => "/".$img,
                "width" => $width,
                "height" => $height
            ));
        }
        return view('detail', compact('menu','images'));
    }
}
