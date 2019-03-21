<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proje;
use App\Proje_Kategori;

class Proje_KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proje_kategoriler = Proje_Kategori::all();
        return view('adminkurumsal.proje_kategori.index',compact('proje_kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adminkurumsal.proje_kategori.create');
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
      /*  if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }*/
        //Yetki Kontrol


        $proje_kategori = new Proje_Kategori();
        $proje_kategori->proje_kategori = request('proje_kategori');
     /*   $proje_kategori->kategori_aciklama = request('kategori_aciklama');*/
        $proje_kategori->proje_slug = str_slug(request('proje_kategori'));

        $proje_kategori->save();
        if($proje_kategori){

            alert()
                ->success('Başarılı', 'Kategori Eklendi')
                ->autoClose(2000);
            return redirect()->route('proje_kategori.index');
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
        $proje_kategori = Proje_Kategori::find($id);

        return view('adminkurumsal.proje_kategori.edit', compact('proje_kategori'));
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
     /*   if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }*/
        //Yetki Kontrol

        $proje_kategori = Proje_Kategori::find($id);
        $proje_kategori->proje_kategori = request('proje_kategori');
      /*  $proje_kategori->kategori_aciklama = request('kategori_aciklama');*/
        $proje_kategori->proje_slug = str_slug(request('proje_slug'));

        $proje_kategori->save();
        if($proje_kategori){

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
        /*if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }*/
        //Yetki Kontrol
        $proje_kategori = Proje::where('proje_kategori_id','=',$id)->count() > 0;
        if($proje_kategori){
            alert()
                ->error('Silinemez', 'Kategoriye Ait Proje Bulunmakta')
                ->autoClose(3000);
            return back();
        }else {
            Proje_Kategori::destroy($id);

            alert()
                ->success('Silindi', 'Proje Kategorisi  Silindi')
                ->autoClose(2000);
            return back();
        }

    }

}
