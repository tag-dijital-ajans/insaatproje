<?php

namespace App\Http\Controllers;

use App\Referans;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ReferansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referanslar = Referans::all();
        return view('adminkurumsal.referanslar.index', compact('referanslar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminkurumsal.referanslar.create');
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
        $this->validate(request(), array(
            'referans_adi' => 'required',
            'firma_adi' => 'required',

        ));

        $referans = Referans::create($request->all());
        if (request()->hasFile('referans_gorseli')) {

            $validator = Validator::make($request->all(), [
                'referans_gorseli' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('referans_gorseli');
            $dosya_adi = 'referans_gorseli' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_refr';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $referans->referans_gorseli = $dosya_yolu;
                }
            }
        $referans->save();



        if ($referans) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return redirect()->route('referanslar.index');



        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
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
        $referans = Referans::find($id);
        return view('adminkurumsal.referanslar.edit', compact('referans'));
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
        $this->validate(request(), array(
            'referans_adi' => 'required',
            'firma_adi' => 'required',

        ));
        $referans = Referans::find($id);
        $bilgiler = $request->all();
        $referans->update($bilgiler);
        if (request()->hasFile('referans_gorseli')) {

            $validator = Validator::make($request->all(), [
                'referans_gorseli' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('referans_gorseli');
            $dosya_adi = 'referans_gorseli' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_refr';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $referans->referans_gorseli = $dosya_yolu;
            }
        }
        $referans->save();


        if ($referans) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return redirect()->route('referanslar.index');


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
        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol
        $sil = Referans::destroy($id);
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
