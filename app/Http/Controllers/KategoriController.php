<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Yazi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriler = Kategori::all();
        return view('adminkurumsal.kategoriler.index',compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('adminkurumsal.kategoriler.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol


        $kategori = new Kategori();
        $kategori->kategori_baslik = request('kategori_baslik');
        $kategori->kategori_aciklama = request('kategori_aciklama');
        $kategori->kategori_slug = str_slug(request('kategori_baslik'));

        $kategori->save();
        if($kategori){

            alert()
                ->success('Başarılı', 'Kategori Eklendi')
                ->autoClose(2000);
            return back();
        }else{
            alert()
                ->error('Başarısız', 'Kategori Eklenemedi')
                ->autoClose(2000);
            return back();
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('adminkurumsal.kategoriler.edit', compact('kategori'));
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
        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol

        $kategori = Kategori::find($id);
        $kategori->kategori_baslik = request('kategori_baslik');
        $kategori->kategori_aciklama = request('kategori_aciklama');
        $kategori->kategori_slug = str_slug(request('kategori_baslik'));

        $kategori->save();
        if($kategori){

            alert()
                ->success('Başarılı', 'Kategori Güncellendi')
                ->autoClose(2000);
            return back();
        }else{
            alert()
                ->error('Başarısız', 'Kategori Güncellenemedi')
                ->autoClose(2000);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol
        $icerik = Yazi::where('kategori_id','=',$id)->count() > 0;
        if($icerik){
            alert()
                ->error('Silinemez', 'Kategoriye Ait Yazı Bulunmakta')
                ->autoClose(3000);
            return back();
        }else {
            Kategori::destroy($id);

            alert()
                ->success('Silindi', 'Kategori Silindi')
                ->autoClose(2000);
            return back();
        }

    }
}
