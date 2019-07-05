<?php

namespace App\Http\Controllers;

use App\MiniBlock;
use Illuminate\Http\Request;
use DB;
class MiniBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miniBlocks = \App\MiniBlock::all();
        return view('admin.miniBlocks',[
            'miniBlocks' => $miniBlocks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.miniBlockCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $miniBlock = new \App\MiniBlock;
        $miniBlock->name = $request->name;
        $miniBlock->content = $request->content;
        $miniBlock->publicated = $request->publicated;
        $miniBlock->order = $request->order;
        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file;
            $filename=$extension;
            $file->move('uploads/blocks/', $filename);
            $miniBlock->image =$filename;
        }
        $miniBlock->title = $request->title;
        $miniBlock->save();
        return redirect()->route('miniBlock.show',$miniBlock)->with(['message' => 'Block updated successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $MiniBlock = DB::select('select * from mini_block where id = ?', [$id]);
        return view("admin.blockEdit",['MiniBlock'=>$MiniBlock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $MiniBlock=MiniBlock::where('id', $id)->firstOrFail();
        $MiniBlock->delete();
        return redirect()->route('miniBlock.index',$MiniBlock)->with(['message' => 'Block deleted successfully']);
    }
}
