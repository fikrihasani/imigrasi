<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Biaya;

class BiayaController extends Controller
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
        $biaya2 = Biaya::all();
        return view('admin.biayaimigrasi.index')->with('biaya2',$biaya2);
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
        return view('admin.biayaimigrasi.create');
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
            'judul_biaya' => 'required', 
            'tipe_biaya' => 'required',
            'data_biaya' => 'mimes:pdf,doc,docx|max:1999'
        ]);
        // cek apakah data  memiliki foto 
        if ($request->hasFile('data_biaya')) {
            // dapatkan filename dengn extension
            $fileNameWithExt = $request->file('data_biaya')->getClientOriginalName();
            // dapatkan hanya filename saja
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dapatkan hanya extension saja 
            $fileExt = $request->file('data_biaya')->getClientOriginalExtension();
            // nama file untuk disimpan
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload gambar
            $path = $request->file('data_biaya')->storeAs('public/biaya',$fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.pdf';
        }
        $biaya = new Biaya;
        $biaya->judul_biaya = $request->input('judul_biaya');
        $biaya->tipe_biaya = $request->input('tipe_biaya');
        $biaya->data_biaya = $fileNameToStore;
        $biaya->save();

        return redirect('/biayaimigrasi')->with('success', 'Biaya telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_biaya
     * @return \Illuminate\Http\Response
     */
    public function show($id_biaya)
    {
        //
        $biaya = Biaya::find($id_biaya);
        return view('admin.biayaimigrasi.show')->with('biaya',$biaya);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_biaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id_biaya)
    {
        $biaya = Biaya::find($id_biaya);
        return view('admin.biayaimigrasi.edit')->with('biaya',$biaya);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_biaya)
    {
        //
                //rule buat data yang diupload
                $this->validate($request,[
                    'judul_biaya' => 'required', 
                    'tipe_biaya' => 'required',
                    'data_biaya' => 'mimes:pdf,doc,docx|max:1999'
                ]);
                
                $biaya = Biaya::find($id_biaya);
                // cek apakah data  memiliki foto 
                if ($request->hasFile('data_biaya')) {
                    // hapus terlebih dahulu foto sebelumnya: 
                    if(file_exists("storage/biaya/".$biaya->data_biaya)){
                        unlink("storage/biaya/".$biaya->data_biaya);
                    }
                    // dapatkan filename dengn extension
                    $fileNameWithExt = $request->file('data_biaya')->getClientOriginalName();
                    // dapatkan hanya filename saja
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // dapatkan hanya extension saja 
                    $fileExt = $request->file('data_biaya')->getClientOriginalExtension();
                    // nama file untuk disimpan
                    $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
                    // upload gambar
                    $path = $request->file('data_biaya')->storeAs('public/biaya',$fileNameToStore);
                }
                $biaya->judul_biaya = $request->input('judul_biaya');
                $biaya->tipe_biaya = $request->input('tipe_biaya');
                if ($request->hasFile('data_biaya')) {
                    $biaya->data_biaya = $fileNameToStore;

                }
                $biaya->save();
                return redirect('/biayaimigrasi')->with('success', 'Biaya telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_biaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_biaya)
    {
        //
        $biaya = Biaya::find($id_biaya);
        if(file_exists("storage/biaya/".$biaya->data_biaya)){
            unlink("storage/biaya/".$biaya->data_biaya);
            $biaya->delete();
            return redirect('/biayaimigrasi')->with('success', 'Biaya telah dihapus');
        }else{
            return $biaya->data_biaya." - Tidak ada file tersebut";
        }
    }
}
