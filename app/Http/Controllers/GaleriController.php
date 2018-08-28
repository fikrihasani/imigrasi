<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galeri2 = Galeri::all();
        return view('admin.galery.index')->with('galeri2',$galeri2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //rule buat data yang diupload
        // return $request->tipe_berita;
        $this->validate($request,[
            'deskripsi' => 'required',
            'data_galeri' => 'image|nullable|max:1999'

        ]);
        // cek apakah data  memiliki data 
        if ($request->hasFile('data_galeri')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_galeri')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_galeri')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_galeri')->storeAs('public/galeri_foto',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $galeri = new Galeri;
        $galeri->deskripsi = $request->input('deskripsi');
        $galeri->data_galeri = $fileNameToStore;

        $galeri->save();

        return redirect('/galery')->with('success', 'Foto telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function show($id_galeri)
    {
        //
        $galeri = Galeri::find($id_galeri);
        return view('admin.galery.show')->with('galeri',$galeri);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function edit($id_galeri)
    {
        $galeri = Galeri::find($id_galeri);
        return view('admin.galery.edit')->with('galeri',$galeri);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_galeri)
    {
           //rule buat data yang diupload
           $this->validate($request,[
            'deskripsi' => 'required', 
            'data_galeri' => 'image|nullable|max:1999'
        ]);
        
        $galeri = Galeri::find($id_galeri);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('galeri_foto')) {
            // hapus terlebih dahulu foto sebelumnya: 
            if(file_exists("storage/galeri_foto/".$galeri->data_galeri)){
                unlink("storage/galeri_foto/".$galeri->data_galeri);
            }
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_galeri')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_galeri')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_galeri')->storeAs('public/galeri_foto',$fileNameToStore);
        }
        $galeri->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('galeri_foto')) {
            $galeri->data_galeri = $fileNameToStore;

        }
        $galeri->save();
        return redirect('/galery')->with('success', 'Foto telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_galeri)
    {
                //
        $galeri = Galeri::find($id_galeri);
        if(file_exists("storage/galeri_foto/".$galeri->data_galeri)){
            unlink("storage/galeri_foto/".$galeri->data_galeri);
            $galeri->delete();
            return redirect('/galery')->with('success', 'Foto telah dihapus');
        }else{
            return $galeri->data_galeri." - Tidak ada file tersebut";
        }
    }
}
