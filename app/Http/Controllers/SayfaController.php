<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Sayfa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sayfalar = Sayfa::all();
        return view('adminkurumsal.sayfalar.index',compact('sayfalar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminkurumsal.sayfalar.create');
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
        $this->validate(request(),array(
            'sayfa_basligi'=>'required',
            'sayfa_icerik'=>'required',

        ));

        $sayfa  = new Sayfa();
        $sayfa->sayfa_basligi = request('sayfa_basligi');
        $sayfa->sayfa_icerik = request('sayfa_icerik');
        $sayfa->slug = str_slug (request('sayfa_basligi'));
        $sayfa->save();

        if (request()->hasFile('sayfa_one_cikan_foto')) {

            $validator = Validator::make($request->all(), [
                'sayfa_one_cikan_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

                $resim = request()->file('sayfa_one_cikan_foto');
                $dosya_adi = 'sayfa_one_cikan_foto' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_sayfa';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $sayfa->sayfa_one_cikan_foto = $dosya_yolu;


                }
            }
        $sayfa->save();

        if($sayfa){
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
        $sayfa = Sayfa::find($id);
        return view('adminkurumsal.sayfalar.edit',compact('sayfa'));
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

        $this->validate(request(),array(
            'sayfa_basligi'=>'required',
            'sayfa_icerik'=>'required',

        ));
        $sayfa = Sayfa::find($id);
        $sayfa->sayfa_basligi = request('sayfa_basligi');
        $sayfa->sayfa_icerik = request('sayfa_icerik');
        $sayfa->slug = str_slug (request('sayfa_basligi'));
        if (request()->hasFile('sayfa_one_cikan_foto')) {

            $validator = Validator::make($request->all(), [
                'sayfa_one_cikan_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('sayfa_one_cikan_foto');
            $dosya_adi = 'sayfa_one_cikan_foto' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_sayfa';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $sayfa->sayfa_one_cikan_foto = $dosya_yolu;


            }
        }
        $sayfa->save();


             if($sayfa){
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

        // menu modeli çağrılıp , menu içerisinde sayfa_id de gelen $id var ise o satır silinir
        $menu = Menu::where('sayfa_id',$id)->count();
        if($menu>0){

            DB::table('menuler')->where('sayfa_id', '=', $id)->delete();

            alert()
                ->success('Başarılı', 'Menu Silindi')
                ->showConfirmButton()
                ->autoClose(2000);

        }

            $sil = Sayfa::destroy($id);
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
