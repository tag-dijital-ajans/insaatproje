<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderlar = Slider::all();
        return view('adminkurumsal.sliderlar.index', compact('sliderlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminkurumsal.sliderlar.create');
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
            'metin1' => 'required',
            'metin2' => 'required',

        ));

        $slider = Slider::create($request->all());
        if (request()->hasFile('slider_resmi')) {

            $validator = Validator::make($request->all(), [
                'slider_resmi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }


            $resim = request()->file('slider_resmi');
            $dosya_adi = 'slider_resmi' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_slid';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $slider->slider_resmi = $dosya_yolu;


                }
            }
        $slider->save();


        if ($slider) {
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
        $slider = Slider::find($id);
        return view('adminkurumsal.sliderlar.edit', compact('slider'));
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
            'metin1' => 'required',
            'metin2' => 'required',

        ));
        $slider = Slider::find($id);
        $bilgiler = $request->all();
        $slider->update($bilgiler);
        if (request()->hasFile('slider_resmi')) {

            $validator = Validator::make($request->all(), [
                'slider_resmi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }


            $resim = request()->file('slider_resmi');
            $dosya_adi = 'slider_resmi' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_slid';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $slider->slider_resmi = $dosya_yolu;


            }
        }
        $slider->save();




        if ($slider) {
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
        $sil = Slider::destroy($id);
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
