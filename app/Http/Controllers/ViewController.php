<?php

namespace App\Http\Controllers;

use App\Page;
use App\Block;

use Illuminate\Support\Facades\App;


class ViewController extends Controller
{
    public function index($slug)
    {
        $blocks= Block::all();
        $page=Page::where('slug', $slug)->firstOrFail();
        if ($page->publicated == 1) {
            return view('page', ['page' => $page,'blocks'=>$blocks]);
        }else{
            return '';
        }
    }
    public function main()
    {
        return view('main');

    }
    public function gallery()
    {
        return view('images.gallery');

    }
}
