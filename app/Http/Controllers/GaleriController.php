<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri2 = Galeri::all();
        return view('admin.galeri.index')->with('galeri2',$galeri2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create');
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
            'nama_kakanim' => 'required',
            'deskripsi' => 'required',
            'foto_kakanim' => 'image|nullable|max:1999'

        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('foto_kakanim')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('foto_kakanim')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('foto_kakanim')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('foto_kakanim')->storeAs('public/foto_kakanim',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $kakanim = new Kakanim;
        $kakanim->nama_kakanim = $request->input('nama_kakanim');
        $kakanim->deskripsi = $request->input('deskripsi');
        $kakanim->foto_kakanim = $fileNameToStore;

        $kakanim->save();

        return redirect('/profil')->with('success', 'Profil Kepala Kantor telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function show($id_kakanim)
    {
        //
        $kakanim = Kakanim::find($id_kakanim);
        return view('admin.profil.show')->with('kakanim',$kakanim);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kakanim)
    {
        $kakanim = Kakanim::find($id_kakanim);
        return view('admin.profil.edit')->with('kakanim',$kakanim);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kakanim)
    {
           //rule buat data yang diupload
           $this->validate($request,[
            'nama_kakanim' => 'required', 
            'deskripsi' => 'required', 
            'foto_kakanim' => 'image|nullable|max:1999'
        ]);
        
        $kakanim = Kakanim::find($id_kakanim);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('foto_kakanim')) {
            // hapus terlebih dahulu foto sebelumnya: 
            if(file_exists("storage/foto_kakanim/".$kakanim->foto_kakanim)){
                unlink("storage/foto_kakanim/".$kakanim->foto_kakanim);
            }
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('foto_kakanim')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('foto_kakanim')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('foto_kakanim')->storeAs('public/foto_kakanim',$fileNameToStore);
        }
        $kakanim->nama_kakanim = $request->input('nama_kakanim');
        $kakanim->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('foto_kakanim')) {
            $kakanim->foto_kakanim = $fileNameToStore;

        }
        $kakanim->save();
        return redirect('/profil')->with('success', 'Profil Kepala Kantor telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kakanim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kakanim)
    {
                //
        $kakanim = Kakanim::find($id_kakanim);
        if(file_exists("storage/foto_kakanim/".$kakanim->foto_kakanim)){
            unlink("storage/foto_kakanim/".$kakanim->foto_kakanim);
            $kakanim->delete();
            return redirect('/profil')->with('success', 'Berita telah dihapus');
        }else{
            return $kakanim->foto_kakanim." - Tidak ada file tersebut";
        }
    }
}
