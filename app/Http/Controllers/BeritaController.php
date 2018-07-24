<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita2 = Berita::all();
        return view('admin.berita.index')->with('berita2',$berita2);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.berita.create');
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
            'judul_berita' => 'required', 
            'konten_berita' => 'required', 
            'tipe_berita' => 'required',
            'foto_berita' => 'image|nullable|max:1999'
        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('foto_berita')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('foto_berita')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('foto_berita')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('foto_berita')->storeAs('public/foto_berita',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $berita = new Berita;
        $berita->judul_berita = $request->input('judul_berita');
        $berita->konten_berita = $request->input('konten_berita');
        $berita->tipe_berita = $request->input('tipe_berita');
        $berita->foto_berita = $fileNameToStore;
        $berita->save();

        return redirect('/berita')->with('Success', 'Berita telah ditambahkan');
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
        $berita = Berita::find($id);
        return view('admin.berita.show')->with('berita',$berita);
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
                //rule buat data yang diupload
        $this->validate($request,[
            'judul_berita' => 'required', 
            'konten_berita' => 'required', 
            'tipe_berita' => 'required',
            'foto_berita' => 'image|nullable|max:1999'
        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('foto_berita')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('foto_berita')->getClientOriginalName;
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('foto_berita')->getClientOriginalExtension;
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('cover_image')->storeAs('public/foto_berita',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $berita = Berita::find($id);
        $berita->judul_berita = $request->input('judul_berita');
        $berita->konten_berita = $request->input('konten_berita');
        $berita->tipe_berita = $request->input('tipe_berita');
        $berita->foto_berita = $fileNameToStore;
        $berita->save();
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
                //rule buat data yang diupload
                $this->validate($request,[
                    'judul_berita' => 'required', 
                    'konten_berita' => 'required', 
                    'tipe_berita' => 'required',
                    'foto_berita' => 'image|nullable|max:1999'
                ]);
                // cek apakah data  memiliki foto 
                if ($request->hasFile('foto_berita')) {
                    // dapatkan filename dengn extension
                    $fileNameWithExt = $request->file('foto_berita')->getClientOriginalName;
                    // dapatkan hanya filename saja
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // dapatkan hanya extension saja 
                    $fileExt = $request->file('foto_berita')->getClientOriginalExtension;
                    // nama file untuk disimpan
                    $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
                    // upload gambar
                    $path = $request->file('cover_image')->storeAs('public/foto_berita',$fileNameToStore);
                }else{
                    $fileNameToStore = 'noimage.jpg';
                }
                $berita = Berita::find($id);
                $berita->judul_berita = $request->input('judul_berita');
                $berita->konten_berita = $request->input('konten_berita');
                $berita->tipe_berita = $request->input('tipe_berita');
                if ($request->hasFile('foto_berita')) {
                    $berita->foto_berita = $fileNameToStore;

                }
                $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
