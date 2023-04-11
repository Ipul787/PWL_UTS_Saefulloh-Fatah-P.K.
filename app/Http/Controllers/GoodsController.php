<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goods = Goods::all(); 
        // Mengambil semua isi tabel 
        $posts = Goods::orderBy('goods_code', 'goods_name', 'category', 'goods_price', 'qty')->paginate(6); 
        return view('goods.index', compact('goods')); 
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'goods_code' => 'required', 
            'goods_name' => 'required', 
            'category' => 'required', 
            'goods_price' => 'required', 
            'qty' => 'required', 
        ]); 
        Goods::create($request->all()); 
        return redirect()->route('goods.index') 
        ->with('success', 'Goods Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show($goods_code)
    {
        $Goods = Goods::find($goods_code); 
        return view('goods.detail', compact('Goods'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($goods_code)
    {
        $Goods = Goods::find($goods_code); 
        return view('goods.edit', compact('Goods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $goods_code)
    {
        $request->validate([ 
            'goods_code' => 'required', 
            'goods_name' => 'required', 
            'category' => 'required', 
            'goods_price' => 'required', 
            'qty' => 'required', 
        ]); 
        Goods::find($goods_code)->update($request->all()); 
        return redirect()->route('goods.index') 
        ->with('success', 'Goods Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($goods_code)
    {
        Goods::find($goods_code)->delete(); 
        return redirect()->route('goods.index') 
        -> with('success', 'Goods Successfully Deleted');
    }
}
