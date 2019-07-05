<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;
use App\Menu;
use DB;
class MenuSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menus', [
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menuCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $menuSection = new Menu();
        $menuSection->name = $request->name;
        $menuSection->link = $request->link;
        $menuSection->order = $request->order;
        $menuSection->active = $request->active;
        $menuSection->save();
        return redirect()->route('menu.index')->with(['message' => 'Link created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menuSection= DB::select('select * from menu where id = ?', [$id]);
        return view("admin.menuEdit", ['menu' => $menuSection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        $menuSection=Menu::where('id', $id)->firstOrFail();
        $menuSection->name = $request->name;
        $menuSection->link = $request->link;
        $menuSection->order = $request->order;
        $menuSection->active = $request->active;
        $menuSection->save();
        return redirect()->route('menu.show',$menuSection)->with(['message' => 'Menu updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuSection=Menu::where('id', $id)->firstOrFail();
        $menuSection->delete();
        return redirect()->route('menu.index')->with(['message' => 'Link deleted successfully']);
    }
}
