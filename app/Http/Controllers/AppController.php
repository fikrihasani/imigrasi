<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use App\Berita;
use App\Kakanim;

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
        return view('app.kakanim');
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
        return view('app.biaya');
    }

    public function beritautama(){
<<<<<<< HEAD
        $news = Berita::where('tipe_berita',1)->orderBy('updated_at')->get();

        return view('app.beritautama')->with('news', $news);
        return view('app.beritautama')->with('news',$news);
    }

    public function beritaimigrasi(){
        $news = Berita::where('tipe_berita',0)->orderBy('updated_at')->get();

        return view('app.beritaimigrasi')->with('news', $news);

        return view('app.beritaimigrasi')->with('news',$news);
=======

        $news = Berita::where('tipe_berita',1)->orderBy('updated_at')->paginate(10);
        return view('app.beritautama')->with('news', $news);
    }

    public function beritaimigrasi(){
        $news = Berita::where('tipe_berita',0)->orderBy('updated_at')->paginate(10);
        return view('app.beritaimigrasi')->with('news', $news);
>>>>>>> 96b64e282e11bd0a4ce2e140dfe91db3f5e5c778
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
        return view('app.uu');
    }

    public function presiden(){
        return view('app.presiden');
    }

    public function pemerintah(){
        return view('app.pemerintah');
    }

    public function menteri(){
        return view('app.menteri');
    }
}
