<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use App\Berita;
use App\Kakanim;
use App\Biaya;
use App\Produk;
use App\Bulan;
use App\Kepuasan;
use App\Galeri;


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
        $biaya = Biaya::where('tipe_biaya',0)->first();
        $biaya1 = Biaya::where('tipe_biaya',1)->first();
        return view('app.biaya')->with(compact('biaya', 'biaya1'));
 
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
        $galeri = Galeri::where('id_galeri', '>', 0)->orderBy('updated_at')->paginate(10);
        return view('app.galeri')->with('galeri', $galeri);
    }


    public function kepuasan(){
 
        $ikm = Kepuasan::where('bulan_kepuasan',0)->first();
        $ikm1 = Kepuasan::where('bulan_kepuasan',1)->first();
        $ikm2 = Kepuasan::where('bulan_kepuasan',2)->first();
        $ikm3 = Kepuasan::where('bulan_kepuasan',3)->first();
        $ikm4 = Kepuasan::where('bulan_kepuasan',4)->first();
        $ikm5 = Kepuasan::where('bulan_kepuasan',5)->first();
        $ikm6 = Kepuasan::where('bulan_kepuasan',6)->first();
        $ikm7 = Kepuasan::where('bulan_kepuasan',7)->first();
        $ikm8 = Kepuasan::where('bulan_kepuasan',8)->first();
        $ikm9 = Kepuasan::where('bulan_kepuasan',9)->first();
        $ikm10 = Kepuasan::where('bulan_kepuasan',10)->first();
        $ikm11 = Kepuasan::where('bulan_kepuasan',11)->first();
        return view('app.kepuasan')->with(compact('ikm', 'ikm1','ikm2','ikm3','ikm4','ikm5','ikm6','ikm7','ikm8','ikm9','ikm10','ikm11'));
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

    public function uraian($id_produk){
        $rinci = Produk::find($id_produk);
        if($rinci->tipe_produk == 0){
            $produklain = Produk::where('tipe_produk',0)->orderBy('updated_at')->get();
        }else if($rinci->tipe_produk == 1){
            $produklain = Produk::where('tipe_produk',1)->orderBy('updated_at')->get();
        }else if($rinci->tipe_produk == 2){
            $produklain = Produk::where('tipe_produk',2)->orderBy('updated_at')->get();
        }else{
            $produklain = Produk::where('tipe_produk',3)->orderBy('updated_at')->get();
        }
        return view('app.uraian')->with(compact('rinci','produklain'));
    }

}
