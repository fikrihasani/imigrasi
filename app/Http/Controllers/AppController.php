<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use App\Berita;
use App\Kakanim;
use App\Biaya;
use App\Produk;

class AppController extends Controller
{
    //
    public function index(){
        return view('app.index');
    }

    public function profile(){
        return view('profile');
    }

    public function sejarah(){
        return view('app.sejarah');
    }

    public function kakanim(){
        $kepala = Kakanim::where('id_kakanim', '>', 0)->orderBy('updated_at')->paginate(10);
        return view('app.kakanim')->with('kepala',$kepala);
    }

    public function wni(){
        return view('app.wni');
    }

    public function wna(){
        return view('app.wna');
    }

    public function layananonline(){
        return view('app.layananonline');
    }

    public function biaya(){
        /*$biaya = Biaya::select($data_biaya);
        if($biaya>tipe_biaya == 0){
            $biayalain = Biaya::where('tipe_biaya',0)->get();
        }else{
            $biayalain = Biaya::where('tipe_biaya',1)->get();
        }
        return view('app.detail')->with(compact('biaya','biayalain'));*/
        $biaya = Biaya::select('tipe_biaya')->where('tipe_biaya','=',0)->get();
        $biaya1 = Biaya::select('tipe_biaya')->where('tipe_biaya','=',1)->get();
        return view('app.biaya')->with('biaya', $biaya);
 
    }

    public function beritautama(){

        $news = Berita::where('tipe_berita',1)->orderBy('updated_at')->paginate(10);
        return view('app.beritautama')->with('news', $news);
    }

    public function beritaimigrasi(){
        $news = Berita::where('tipe_berita',0)->orderBy('updated_at')->paginate(10);
        return view('app.beritaimigrasi')->with('news', $news);
    }

    public function detail($id){
        $berita = Berita::find($id);
        if($berita->tipe_berita == 0){
            $beritalain = Berita::where('tipe_berita',0)->orderBy('updated_at')->get();
        }else{
            $beritalain = Berita::where('tipe_berita',1)->orderBy('updated_at')->get();
        }
        return view('app.detail')->with(compact('berita','beritalain'));
    }
   
    public function contact(){
        return view('app.contact');
    }

    public function galeri(){
        return view('app.galeri');
    }

    public function kepuasan(){
        return view('app.kepuasan');
    }

    public function statistik(){
        return view('app.statistik');
    }

    public function uu(){
        $hukum = Produk::where('tipe_produk',0)->orderBy('updated_at')->paginate(10);
        return view('app.uu')->with('hukum', $hukum);
    }

    public function presiden(){
        $hukum = Produk::where('tipe_produk',1)->orderBy('updated_at')->paginate(10);
        return view('app.presiden')->with('hukum', $hukum);
    }

    public function pemerintah(){
        $hukum = Produk::where('tipe_produk',2)->orderBy('updated_at')->paginate(10);
        return view('app.pemerintah')->with('hukum', $hukum);
    }

    public function menteri(){
        $hukum = Produk::where('tipe_produk',3)->orderBy('updated_at')->paginate(10);
        return view('app.menteri')->with('hukum', $hukum);
    }
}
