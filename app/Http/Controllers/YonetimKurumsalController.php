<?php

namespace App\Http\Controllers;

use App\Ayar;
use App\Hizmet;
use App\Mail\iletisimformu;
use Illuminate\Http\Request;
use App\User;
use App\Yazi;
use App\Sayfa;
use App\Referans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class YonetimKurumsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$hizmetler = Hizmet::orderby('created_at','desc')->take(5)->get();
        $lastnews = Yazi::orderby('created_at','desc')->take(10)->get();


        $sayfacount = Sayfa::all()->count();
        $habercount = Yazi::all()->count();
        $referanscount = Referans::all()->count();
        $hizmetcount = Hizmet::all()->count();
        return view('adminkurumsal.index',
            compact('sayfacount','habercount','referanscount','hizmetcount','hizmetler','lastnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   public function kullanicilar()
   {
       //Yetki Kontrol
       if(Auth::user()->yetki == !'admin') {
           alert()
               ->error('Yetkiniz Yok', 'Buraya Giremezsiniz.')
               ->autoClose(2000);
           return back();
       }
       //Yetki Kontrol


       $kullanicilar = User::all();
       return view('adminkurumsal.kullanicilar.index', compact('kullanicilar'));
   }

    public function kullaniciekle(){



        return view('adminkurumsal.kullanicilar.create');
    }

    public function kullanicikayit(request $request)
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',

        ));

        $kullanici = new User();
        $kullanici->name = request('name');
        $kullanici->email = request('email');
        $kullanici->yetki = request('yetki');

        if (request('password') != request('password_confirmation')) {

            alert()
                ->error('Hata', 'Şİfreler Eşleşmiyor')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();
        } else {
            $kullanici->password = Hash::make(request('password'));
        }
        if (request()->hasFile('avatar')) {

            $validator = Validator::make($request->all(), [
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

                $resim = request()->file('avatar');
                $dosya_adi = 'avatar' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_avatr';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $kullanici->avatar = $dosya_yolu;


                }
            }
        $kullanici->save();
            //avatar kontrol yukleme sonu

                if ($kullanici) {

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
    public function kullaniciduzenle($id) {



        $kullanici = User::find($id);
        return view('adminkurumsal.kullanicilar.edit',compact('kullanici'));



    }

    public function kullaniciguncelle($id){

        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol

        $this->validate(request(),array(
            'name'=>'required',
            'email'=>'required',

        ));


        $kullanici = User::find($id);
        $kullanici->name = request('name');
        $kullanici->email = request('email');
        $kullanici->yetki = request('yetki');
        $kullanici->avatar = request('avatar');



        if(request('password') != request('password_confirmation')) {

            alert()
                ->error('Hata','Şİfreler Eşleşmiyor')
                ->showConfirmButton()

                ->autoClose(2000);
            return back();
        }
        else{
            $kullanici->password = Hash::make(request('password'));
        }
        if (request()->hasFile('avatar')) {

            $this->validate(request(), array('avatar' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));


            $resim = request()->file('avatar');
            $dosya_adi = 'avatar' . '-' . time() . '.' . $resim->extension();



            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_avatr';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $kullanici->avatar = $dosya_yolu;


            }
        }alert()
            ->success('Başarılı','İşlem Başarılı')
            ->showConfirmButton()

            ->autoClose(2000);

        $kullanici->save();
        if($kullanici){
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
    public function kullanicisil($id) {
        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol

        if(Auth::id()==$id){
            alert()
                ->error('Hata', 'Kendini Silemessin Mayk')
                ->autoClose(2000);
            return back();

        }else {

            $sil = User::find($id)->delete();

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
    public function cikis() {

        auth()->logout();
        return redirect('/');
    }
    public function iletisim() {
        return view('adminkurumsal.iletisimformu');
    }

    public function iletisimformgondeer(request $request)
    {
        $this->validate(request(), array(

            'ad' => 'required',
            'email' => 'required',
            'konu' => 'required',

        ));

        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;


        /*  $ayar = Ayar::find(1);
          $adres = $ayar->site_adi;
          $mailadresim = $ayar->email;*/

        $bilgiler = array(

            'ad' => request('ad'),
            'email' => request('email'),
            'konu' => request('konu'),
            'sitebaslik' => $siteadi,
            'siteemail' => $siteemail,


        );

        Mail::to($siteemail)->send(new iletisimformu($bilgiler));

        alert()
            ->success('Gönderildi', 'Formunuz Gönderildi')
            ->autoClose(2000);
        return back();





        }


}

