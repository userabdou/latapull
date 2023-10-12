<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PARENT_ID' => 'nullable|integer',
            'MENU_LEVEL' => 'nullable|integer',
            'MENU_NAME' => 'required|string|max:60',
            'MENU_TEXT' => 'nullable|string|max:80',
            'valid' => 'nullable|string|max:1',
        ]);

        Menu::create($validatedData);

        return redirect()->route('menus.index')
            ->with('success', 'Menu item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $request->validate([
            'PARENT_ID' => 'nullable|integer',
            'MENU_LEVEL' => 'nullable|integer',
            'MENU_NAME' => 'required|string|max:60',
            'MENU_TEXT' => 'nullable|string|max:80',
            'valid' => 'nullable|string|size:1',
        ]);

        $menu = Menu::find($id);
        $menu->update($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Menu item updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
