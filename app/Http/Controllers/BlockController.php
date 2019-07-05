<?php

namespace App\Http\Controllers;

use App\Block;
use App\Http\Requests\BlockRequest;
use Illuminate\Http\Request;
use DB;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = \App\Block::all();
        $list = config('containers.list');
        return view('admin.blocks',[
            'blocks' => $blocks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = config('containers.list');
        return view('admin.blockCreate',[
            'lists'=>$list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlockRequest $request)
    {
        $block = new \App\Block;
        $block->name = $request->name;
        $block->content = $request->content;
        $block->publicated = $request->publicated;
        $block->main = $request->main;
        $block->container = $request->container;
        $block->title = $request->title;
        $block->order = $request->order;
        $block->save();
        return redirect()->route('block.index')->with(['message' => 'Block created successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        $list = config('containers.list');
        $block = DB::select('select * from blocks where id = ?', [$block->id]);
        return view("admin.blockEdit",['blocks'=>$block,'lists'=>$list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(BlockRequest $request, Block $block)
    {
        $block->name = $request->name;
        $block->content = $request->content;
        $block->publicated = $request->publicated;
        $block->main = $request->main;
        $block->container = $request->container;
        $block->order = $request->order;
        $block->title = $request->title;
        $block->save();
        return redirect()->route('block.show',$block)->with(['message' => 'Block updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        $block->delete();
        return redirect()->route('block.index',$block)->with(['message' => 'Block deleted successfully']);
    }
}
