<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Kepuasan;

class KepuasanController extends Controller
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
        $kepuasan2 = Kepuasan::all();
        return view('admin.ikm.index')->with('kepuasan2',$kepuasan2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ikm.create');
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
            'tahun_kepuasan' => 'required',
            'bulan_kepuasan' => 'required',
            'data_kepuasan' => 'image|nullable|max:1999'

        ]);
        // cek apakah data  memiliki data 
        if ($request->hasFile('data_kepuasan')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_kepuasan')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_kepuasan')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_kepuasan')->storeAs('public/data_kepuasan',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $kepuasan = new Kepuasan;
        $kepuasan->tahun_kepuasan = $request->input('tahun_kepuasan');
        $kepuasan->bulan_kepuasan = $request->input('bulan_kepuasan');
        $kepuasan->data_kepuasan = $fileNameToStore;

        $kepuasan->save();

        return redirect('/ikm')->with('success', 'Indeks Kepuasan telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kepuasan
     * @return \Illuminate\Http\Response
     */
    public function show($id_kepuasan)
    {
        //
        $kepuasan = Kepuasan::find($id_kepuasan);
        return view('admin.ikm.show')->with('kepuasan',$kepuasan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kepuasan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kepuasan)
    {
        $kepuasan = Kepuasan::find($id_kepuasan);
        return view('admin.ikm.edit')->with('kepuasan',$kepuasan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kepuasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kepuasan)
    {
           //rule buat data yang diupload
           $this->validate($request,[
            'tahun_kepuasan' => 'required',
            'bulan_kepuasan' => 'required',
            'data_kepuasan' => 'image|nullable|max:1999'
        ]);
        
        $kepuasan = Kepuasan::find($id_kepuasan);
        // cek apakah data  memiliki data 
        if ($request->hasFile('data_kepuasan')) {
            // hapus terlebih dahulu data sebelumnya: 
            if(file_exists("storage/data_kepuasan/".$kepuasan->data_kepuasan)){
                unlink("storage/data_kepuasan/".$kepuasan->data_kepuasan);
            }
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_kepuasan')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_kepuasan')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_kepuasan')->storeAs('public/data_kepuasan',$fileNameToStore);
        }
        $kepuasan->tahun_kepuasan = $request->input('tahun_kepuasan');
        $kepuasan->bulan_kepuasan = $request->input('bulan_kepuasan');
        if ($request->hasFile('data_kepuasan')) {
            $kepuasan->data_kepuasan = $fileNameToStore;

        }
        $kepuasan->save();
        return redirect('/ikm')->with('success', 'Data Kepuasan telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kepuasan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kepuasan)
    {
                //
        $kepuasan = Kepuasan::find($id_kepuasan);
        if(file_exists("storage/data_kepuasan/".$kepuasan->data_kepuasan)){
            unlink("storage/data_kepuasan/".$kepuasan->data_kepuasan);
            $kepuasan->delete();
            return redirect('/ikm')->with('success', 'Data Kepuasan telah dihapus');
        }else{
            return $kepuasan->data_kepuasan." - Tidak ada file tersebut";
        }
    }
}

