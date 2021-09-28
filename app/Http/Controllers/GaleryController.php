<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galeri.index', [
            'title' => 'Galeri',
            'galeri' => Galery::all()
        ]);
    }

    public function indexMADIN()
    {
        return view(
            'admin.galeri.index',
            [
                'title' => 'Galeri',
                'galeri' => Galery::where('title', 'madin')->get()
            ]
        );
    }
    public function indexPAUD()
    {
        return view(
            'admin.galeri.index',
            [
                'title' => 'Galeri',
                'galeri' => Galery::where('title', 'paud')->get()
            ]
        );
    }
    public function indexAlumni()
    {
        return view(
            'admin.galeri.index',
            [
                'title' => 'Galeri',
                'galeri' => Galery::where('title', 'alumni')->get()
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create', [
            'title' => 'Tambah Data Galeri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'excerp' => 'required|max:255',
            'image' => 'image'
        ]);
        $img = $request->file('image');
        $img->move(public_path('/uploads/galeri'), $img->getClientOriginalName() . date('d-m-Y') . '.' . $img->getClientOriginalExtension());
        // dd();
        Galery::create([
            'title' => $request->title,
            'excerp' => $request->excerp,
            'image' => $request->file('image')->getClientOriginalName() . date('d-m-Y') . '.' . $img->getClientOriginalExtension()
        ]);

        return redirect('galeri')->with('success', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Galery $Galery)
    {
        // dd($Galery->title);
        Galery::destroy($Galery->id);
        return redirect('galeri')->with('success', 'Data berhasil di hapus!');
    }
}
