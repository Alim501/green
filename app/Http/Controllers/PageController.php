<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use Illuminate\Support\Str;
use App\Page;
use App\Block;
use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = \App\Page::all();

        return view('admin.pages',[
            'pages' => $pages,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pageCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {

        $page = new \App\Page;
        $page->publicated = $request->publicated;
        $page->main = $request->main;
        $page->content = $request->content;
        $page->name = $request->name;
        if (isset($page->slug)){
            $page->slug = Str::slug( $page->slug , '-');
        } else {
            $page->slug = Str::slug( $page->name, '-');
        }
        $page->save();
        return redirect()->route('page.index')->with(['message' => 'Page created successfully']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $page= DB::select('select * from pages where id = ?', [$page->id]);
        return view("admin.pageEdit",['pages'=>$page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Page $page)
    {

        $page->slug = $request->slug;
        $page->name = $request->name;
        $page->content = $request->content;
        $page->publicated = $request->publicated;
        $page->main = $request->main;
        $page->save();
        return redirect()->route('page.update',$page)->with(['message' => 'Page updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('page.index',$page)->with(['message' => 'Page deleted successfully']);
    }
}
