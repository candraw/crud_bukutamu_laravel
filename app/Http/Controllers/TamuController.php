<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamus = Tamu::orderBy('created_at', 'DESC')->get();
        return view('pages.tamu.index', compact('tamus'));
        
    }

    public function about()
    {
        $about = Tamu::all();
        return view('pages.tamu.about', compact('about'));
    }

    public function cetakTamu()
    {
        $cetaktamu = Tamu::all();
        return view('pages.tamu.cetak-tamu', compact('cetaktamu'));
       
        // $cetaktamus = Tamu::with('tamu')->get();
        // return view('tamu.cetak-tamu', compact('cetaktamus'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @dd($request->all());

        Tamu::create($request->all());

        return redirect()->route('tamu.index')->with('success', "Tamu berhasil ditambahkan");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Tamu = Tamu::findOrfail($id);

        return view('pages.tamu.show', compact('Tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
