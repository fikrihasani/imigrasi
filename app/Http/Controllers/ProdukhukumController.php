<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Produk;

class ProdukhukumController extends Controller
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
        $produk2 = Produk::all();
        return view('admin.produkhukum.index')->with('produk2',$produk2);
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
        return view('admin.produkhukum.create');
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
            'tipe_produk' => 'required', 
            'keterangan' => 'required',
            'data_produk' => 'mimes:pdf,doc,docx|max:1999'
        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('data_produk')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_produk')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_produk')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_produk')->storeAs('public/produk',$fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.pdf';
        }
        $produk = new Produk;
        $produk->tipe_produk = $request->input('tipe_produk');
        $produk->keterangan = $request->input('keterangan');
        $produk->data_produk = $fileNameToStore;
        $produk->save();

        return redirect('/produkhukum')->with('success', 'Produk Hukum telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_produk)
    {
        //
        $produk = Produk::find($id_produk);
        return view('admin.produkhukum.show')->with('produk',$produk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        return view('admin.produkhukum.edit')->with('produk',$produk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produk)
    {
        //
                //rule buat data yang diupload
                $this->validate($request,[
                    'tipe_produk' => 'required', 
                    'keterangan' => 'required',
                    'data_produk' => 'mimes:pdf,doc,docx|max:1999'
                ]);
                
                $produk = Produk::find($id_produk);
                // cek apakah data  memiliki foto 
                if ($request->hasFile('data_produk')) {
                    // hapus terlebih dahulu foto sebelumnya: 
                    if(file_exists("storage/produk/".$produk->data_produk)){
                        unlink("storage/produk/".$produk->data_produk);
                    }
                    // dapatkan filename dengn extension
                    $fileNameWithExt = $request->file('data_produk')->getClientOriginalName();
                    // dapatkan hanya filename saja
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // dapatkan hanya extension saja 
                    $fileExt = $request->file('data_produk')->getClientOriginalExtension();
                    // nama file untuk disimpan
                    $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
                    // upload gambar
                    $path = $request->file('data_produk')->storeAs('public/produk',$fileNameToStore);
                }
                $produk->keterangan = $request->input('keterangan');
                $produk->tipe_produk = $request->input('tipe_produk');
                if ($request->hasFile('data_produk')) {
                    $produk->data_produk = $fileNameToStore;

                }
                $produk->save();
                return redirect('/produkhukum')->with('success', 'Produk Hukum telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produk)
    {
        //
        $produk= Produk::find($id_produk);
        if(file_exists("storage/produk/".$produk->data_produk)){
            unlink("storage/produk/".$produk->data_produk);
            $produk->delete();
            return redirect('/produkhukum')->with('success', 'Produk Hukum telah dihapus');
        }else{
            return $produk->data_produk." - Tidak ada file tersebut";
        }
    }
}
