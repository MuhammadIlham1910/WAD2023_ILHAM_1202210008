<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showroom =Showroom::all();
        return view('showroom.index', compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('showroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Showroom::create([
            'nama_mobil'=> $request->name,
            'brand_mobil'=> $request->brand,
            'warna_mobil'=> $request->warna,
            'tipe_mobil'=> $request->tipe,
            'harga_mobil'=> $request->harga,
        ]);
        return redirect()->route('showroom.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Showroom $showroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showroom $showroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShowroomRequest $request, Showroom $showroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showroom $showroom)
    {
        //
    }
}
