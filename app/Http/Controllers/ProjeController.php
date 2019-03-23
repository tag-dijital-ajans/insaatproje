<?php

namespace App\Http\Controllers;

use App\Projegaleri;
use Illuminate\Http\Request;
use App\Proje;
use App\Proje_Kategori;
use Illuminate\Support\Facades\Validator;


class ProjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeler = Proje::all();
        $resimler = Projegaleri::all();
        return view('adminkurumsal.projeler.index',compact('projeler','resimler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $proje_kategorileri = Proje_Kategori::all();

        return view('adminkurumsal.projeler.create',compact('proje_kategorileri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }*/
        //Yetki Kontrol


        $this->validate(request(), array(

            'proje_adi' => 'required',
            'proje_tipi' => 'required',
            'proje_lokasyon' => 'required',



        ));

        $proje = new Proje();
        $proje->proje_adi = request('proje_adi');
        $proje->proje_aciklama = request('proje_aciklama');
        $proje->proje_tipi = request('proje_tipi');
        $proje->proje_lokasyon = request('proje_lokasyon');
        $proje->proje_musteri = request('proje_musteri');
        $proje->proje_kategori_id = request('proje_kategori_id');
        $proje->proje_tarihi = request('proje_tarihi');
        $proje->slug = str_slug (request('proje_adi'));

        if (request()->hasFile('proje_resim')) {

            $validator = Validator::make($request->all(), [
                'proje_resim' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
           if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }


            if (request()->hasFile('proje_resim')) {

                $this->validate(request(), array('proje_resim' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));

                $resim = request()->file('proje_resim');
                $dosya_adi = time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_prje';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $proje->proje_resim = $dosya_yolu;
                }



            }



            $proje->save();
            if ($proje) {
                alert()
                    ->success('Başarılı', 'İşlem Başarılı')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return redirect()->route('projeler.index');



            } else {
                alert()
                    ->error('Hata', 'İşlem Başarısız')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();

            }
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
        $proje = Proje::find($id);
        $proje_kategoriler = Proje_Kategori::where('id','!=', $proje->proje_kategori_id)->get();
        return view('adminkurumsal.projeler.edit', compact('proje','proje_kategoriler'));
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

        /* if(Auth::user()->yetki == null) {
             alert()
                 ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                 ->autoClose(2000);
             return back();
         }*/
        //Yetki Kontrol

        $this->validate(request(), array(

            'proje_adi' => 'required',
            'proje_tipi' => 'required',
            'proje_lokasyon' => 'required',


        ));

        $proje = Proje::find($id);
        $proje->proje_adi = request('proje_adi');
        $proje->proje_aciklama = request('proje_aciklama');
        $proje->proje_tipi = request('proje_tipi');
        $proje->proje_lokasyon = request('proje_lokasyon');
        $proje->proje_musteri = request('proje_musteri');
        $proje->proje_kategori_id = request('proje_kategori_id');
        $proje->proje_tarihi = request('proje_tarihi');
        $proje->slug = str_slug (request('proje_adi'));

    /*    if (request()->hasFile('proje_resim')) {

            $validator = Validator::make($request->all(), [
                'proje_resim' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }*/


            if (request()->hasFile('proje_resim')) {

                $this->validate(request(), array('proje_resim' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));

                $resim = request()->file('proje_resim');
                $dosya_adi = time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_prje';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $proje->proje_resim = $dosya_yolu;
                }


            }


            $proje->save();
            if ($proje) {
                alert()
                    ->success('Başarılı', 'İşlem Başarılı')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return redirect()->route('projeler.index');


            } else {
                alert()
                    ->error('Hata', 'İşlem Başarısız')
                    ->showConfirmButton()
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
        $sil = Proje::destroy($id);
        if ($sil) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return redirect()->route('projeler.index');


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }






    }
}
