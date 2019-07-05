<?php


namespace App\utils;

use \App\Block;
use \App\Page;
use \App\Menu;
use DB;
use  Illuminate\Database\Eloquent\Collection;
class Helper
{
    public static function renderBlocks($container) {
        $blocks = Block::where('container',$container)->where('publicated',1)->where('main',0)->orderBy('order', 'asc')->get();
        if (isset($blocks)){
            return view('blocks.block', ['lol'=>$blocks])->render();

        }else{
            return '';
        }

    }
    public static function renderMainBlocks($container) {
        $blocks = Block::where('container',$container)->where('publicated',1)->where('main',1)->orderBy('order', 'asc')->get();
        if (isset($blocks)){
            return view('blocks.mainBlock', ['lol'=>$blocks])->render();

        }else{
            return '';
        }

    }
    public static function renderMenu(){
        $menu= Menu::where('active',1)->orderBy('order', 'desc')->get();;
        if (isset($menu)){
            return view('blocks.menuu',['menu'=>$menu])->render();
        }else{
            return'';
        }
    }
}
