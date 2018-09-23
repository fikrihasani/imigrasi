<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['create','store','cek','cari']);
    }

    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('admin.pengaduan.index')->with('pengaduan',$pengaduan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nama' => 'required', 
            'email' => 'required', 
            'subjek' => 'required',
            'pesan' => 'required',
            'foto_ktp' => 'image|nullable|max:1999', 
            'foto_ktp' => 'required'
        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('foto_ktp')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('foto_ktp')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('foto_ktp')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('foto_ktp')->storeAs('public/foto_ktp',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $pengaduan = new Pengaduan;
        $pengaduan->nama = $request->input('nama');
        $pengaduan->email = $request->input('email');
        $pengaduan->subjek = $request->input('subjek');
        $pengaduan->pesan = $request->input('pesan');
        $nokode = rand(1000,9000);
        $pengaduan->kode_unik = 'png'.$nokode;
        $pengaduan->status = -1;
        $pengaduan->foto_ktp = $fileNameToStore;

        $pengaduan->save();

        return redirect('/pengaduan/create')->with('success', 'Pengaduan anda telah ditambahkan.');
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
        $pengaduan = Pengaduan::find($id);
        return view('admin.pengaduan.show')->with('pengaduan',$pengaduan);
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
        $pengaduan = Pengaduan::find($id);
        return view('admin.pengaduan.edit')->with('pengaduan',$pengaduan);
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
        $pengaduan = Pengaduan::find($id);
        $this->validate($request,[
            'status' => 'required'
        ]);

        $pengaduan->status = $request->input('status');
        $pengaduan->save();
        return redirect('/pengaduan')->with('success', 'Pengaduan telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dapatkan pengaduan terkait
        $pengaduan = Pengaduan::find($id);
        // cek apakah file foto berita ada atau tidak. 
        if(file_exists("storage/foto_ktp/".$berita->foto_ktp)){
            unlink("storage/foto_ktp/".$berita->foto_ktp);
            $berita->delete();
            return redirect('/pengaduan')->with('success', 'Pengaduan telah dihapus');
        }else{
            return $berita->foto_ktp." - Tidak ada file tersebut";
        }
    }
    // cek status pengaduan
    public function cek(){
        return view('Pengaduan.cek');
    }
    // masih eror
    public function cari(){
        if(!empty($_POST)){
            $kodeunik = $_POST['kode_unik'];
            if($kodeunik == ''){
                return redirect('/cekpengaduan')->with('error','Form Harus Diisi');
            }
            $result = Pengaduan::where('kode_unik',$kodeunik)->first();
            if($result != null){
                return redirect('/cekpengaduan')->with('hasil',$result);
            }else{
                return redirect('/cekpengaduan')->with('empty','Maaf Pengaduan anda tidak dapat ditemukan');
            }
        }
    }

}
