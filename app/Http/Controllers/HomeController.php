<?php

namespace App\Http\Controllers;
use App\Ayar;
use App\Galeri;
use App\Hizmet;
use App\Kategori;
use App\Proje;
use App\Referans;
use App\Sayfa;
use App\Menu;
use App\Slider;
use App\Yazi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

   /* public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function index()
    {
        $sliders = Slider::all();
        $services = Hizmet::orderby('created_at','desc')->take(4)->get();
        $icerikler = Yazi::orderby('created_at','desc')->take(3)->get();
        $partners = Referans::all();
        $projeler = Proje::orderby('created_at','desc')->take(7)->get();
        $referanslar = Referans::orderby('created_at','desc')->take(7)->get();



        return view('anasayfa.index',compact('sliders','services','icerikler','partners','projeler','referanslar','projects'));
    }

    public function cikis()  {

        auth()->logout();
        return redirect('/');
    }

    public function hakkimizda(){
        $yazilar = Yazi::orderby('created_at','desc')->take(1)->get();
        $referanslar = Referans::all();
        return view('anasayfa.hakkimizda',compact('yazilar','referanslar'));
    }

    public function sayfa($id){

        $sayfa = Sayfa::find($id);
        return view('anasayfa.sayfa',compact('sayfa'));


    }

    public function referanslar(){

        $referanslar = Referans::all();
        return view('anasayfa.referanslar', compact('referanslar'));

    }
    public function galeriler(){
        $galeriler = Galeri::all();
        return view('anasayfa.galeri',compact('galeriler'));

    }


    public function hizmetler(){

        $hizmetler = Hizmet::all();
        return view('anasayfa.hizmetler', compact('hizmetler'));

    }

    public function hizmet($id){

        $hizmetler = Hizmet::orderby('created_at','desc')->take(1)->get();
        $yazilar = Yazi::orderby('created_at','desc')->take(4)->get();
        $listhizmetler = Hizmet::all();

            return view('anasayfa.hizmet', compact('hizmetler','listhizmetler','yazilar'));
        }

    public function haberler(){
            $haberler = Yazi::orderby('created_at','desc')->paginate(4);
            return view('anasayfa.haberler',compact('haberler'));
    }

    public function haber($id){

        $haber = Yazi::find($id);
        $hizmetler = Hizmet::all();
        return view('anasayfa.haber',compact('haber','hizmetler'));

    }
    public function projeler(){
        $projeler = Proje::all();
        return view('anasayfa.projeler',compact('projeler'));
    }
    public function proje($id){
        $proje = Proje::find($id);
        $projeler = Proje::all();
        return view ('anasayfa.proje',compact('proje','projeler'));


    }
    public function iletisim(){
        return view('anasayfa.iletisim');
    }

    public function iletisimformgonder(Request $request){

        $this->validate($request,array(
            'ad'=>'required',
            'email'=>'required',
            'konu'=>'required',
            'mesaj'=>'required',
        ));

        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(
            'ad' => request('ad'),
            'email' => request('email'),
            'konu' => request('konu'),
            'mesaj' => request('mesaj'),
            'siteadi' => $siteadi,
            'siteemail' => $siteemail,

        );
        Mail::to($siteemail)->send(new \App\Mail\iletisimformu($bilgiler));
           alert()
             ->success('Gönderildi','Formunuz Gönderildi')
             ->autoClose(2000);
           return back();


    }

    public function anasayfaformgonder(Request $request){

        $this->validate($request,array(
            'ad'=>'required',
            'email'=>'required',
            'konu'=>'required',

        ));
        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(
            'ad' => request('ad'),
            'email' => request('email'),
            'konu' => request('konu'),
            'siteadi' => $siteadi,
            'siteemail' => $siteemail,

        );
        Mail::to($siteemail)->send(new \App\Mail\talepformu($bilgiler));
        alert()
            ->success('Gönderildi','Formunuz Gönderildi')
            ->autoClose(2000);
        return back();


    }

}
