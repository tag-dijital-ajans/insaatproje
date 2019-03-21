<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use App\Yazi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class YaziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yazilar = Yazi::all();
        return view('adminkurumsal.yazilar.index',compact('yazilar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriler = Kategori::all();
        return view('adminkurumsal.yazilar.create',compact('kategoriler'));

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

            'baslik' => 'required',
            'icerik' => 'required',
            'kategori' => 'required',


        ));

        $yazi = new Yazi();
        $yazi->baslik = request('baslik');
        $yazi->icerik = request('icerik');
        $yazi->user_id = Auth::user()->id;
        $yazi->kategori_id = request('kategori');
        $yazi->slug = str_slug (request('baslik'));

        if (request()->hasFile('resim')) {

            $validator = Validator::make($request->all(), [
                'resim' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }


            if (request()->hasFile('resim')) {

                $this->validate(request(), array('resim' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));

                $resim = request()->file('resim');
                $dosya_adi = time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_yazi';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $yazi->resim = $dosya_yolu;
                }


            }


            $yazi->save();
            if ($yazi) {
                alert()
                    ->success('Başarılı', 'İşlem Başarılı')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return redirect()->route('yazilar.index');


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
        $yazi = Yazi::find($id);
        $kategoriler = Kategori::where('id','!=', $yazi->kategori_id)->get();
        return view('adminkurumsal.yazilar.edit', compact('yazi','kategoriler'));
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

            'baslik' => 'required',
            'icerik' => 'required',
            'kategori' => 'required',


        ));

        $yazi = Yazi::find($id);
        //$kullanici = $yazi->user_id;
        $yazi->baslik = request('baslik');
        $yazi->icerik = request('icerik');
        //$yazi->user_id = $kullanici;
        $yazi->kategori_id = request('kategori');
        $yazi->slug = str_slug (request('baslik'));





            if (request()->hasFile('resim')) {

                $this->validate(request(), array('resim' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));
                $resim = request()->file('resim');
                $dosya_adi = time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_yazi';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $yazi->resim = $dosya_yolu;

                }
            }


            $yazi->save();
            if ($yazi) {
                alert()
                    ->success('Başarılı', 'İçerik Güncellendi')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return redirect()->route('yazilar.index');


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
        $sil = Yazi::destroy($id);
        if ($sil) {
            alert()
                ->success('Başarılı','İşlem Başarılı')
                ->showConfirmButton()

                ->autoClose(2000);
            return back();


        }else {
            alert()
                ->error('Hata','İşlem Başarısız')
                ->showConfirmButton()

                ->autoClose(2000);
            return back();




        }

        }

}
