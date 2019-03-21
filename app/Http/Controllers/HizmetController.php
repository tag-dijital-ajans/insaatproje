<?php

namespace App\Http\Controllers;

use App\Hizmet;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HizmetController extends Controller
{

    public function index()
    {
        $hizmetler = Hizmet::all();
        return view('adminkurumsal.hizmetler.index', compact('hizmetler'));
    }


    public function create()
    {
        return view('adminkurumsal.hizmetler.create');
    }


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
        $this->validate(request(), array(
            'hizmet_basligi' => 'required',
            'hizmet_icerik' => 'required',

        ));

        $hizmet = new Hizmet();
        $hizmet -> hizmet_basligi = request('hizmet_basligi');
        $hizmet -> hizmet_icerik = request('hizmet_icerik');
        $hizmet->slug = str_slug (request('hizmet_basligi'));

        if (request()->hasFile('hizmet_one_cikan_foto')) {

            $validator = Validator::make($request->all(), [
                'hizmet_one_cikan_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('hizmet_one_cikan_foto');
            $dosya_adi = 'hizmet_one_cikan_foto' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_hiz';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $hizmet->hizmet_one_cikan_foto = $dosya_yolu;


                }
            }

        $hizmet->save();



        if ($hizmet) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $hizmet = Hizmet::find($id);
        return view('adminkurumsal.hizmetler.edit', compact('hizmet'));
    }


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
        $this->validate(request(), array(
            'hizmet_basligi' => 'required',
            'hizmet_icerik' => 'required',

        ));
        $hizmet = Hizmet::find($id);
        $bilgiler = $request->all();
        $hizmet->slug = str_slug (request('hizmet_basligi'));
        $hizmet->update($bilgiler);
        if (request()->hasFile('hizmet_one_cikan_foto')) {

            $validator = Validator::make($request->all(), [
                'hizmet_one_cikan_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('hizmet_one_cikan_foto');
            $dosya_adi = 'hizmet_one_cikan_foto' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_hiz';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $hizmet->hizmet_one_cikan_foto = $dosya_yolu;


            }
        }
        $hizmet->save();


        if ($hizmet) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


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
     * @param  int $id
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
        $sil = Hizmet::destroy($id);
        if ($sil) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }
    }


}















