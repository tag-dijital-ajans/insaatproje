<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Sayfa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuler = Menu::all();
        return view('adminkurumsal.menuler.index',compact('menuler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sayfalar = Sayfa::all();
        $menuler = Menu::where('menu_ust_id','0')->get();
        return view('adminkurumsal.menuler.create',compact('sayfalar','menuler'));

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

            'menu_baslik'=>'required',
        ));


        $menu = new Menu();
        $menu->menu_baslik = request('menu_baslik');
        $menu->ozel_url = request('ozel_url');
        $menu->menu_ust_id = request('menu_ust_id');
        $menu->sayfa_id = request('sayfa_id');
        $menu->sira_no = request('sira_no');
        $menu->slug = str_slug (request('menu_baslik'));






        $menu->save();
        if($menu){
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
        $menu = Menu::find($id);
        $sayfalar = Sayfa::where('id','!=', $menu->sayfa_basligi)->get();
        $tummenuler = Menu::all();
        return view('adminkurumsal.menuler.edit', compact('menu','sayfalar','tummenuler'));


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

            'menu_baslik'=>'required',



        ));
       /* $kullanici = $yazi->user_id;*/

        $menu = Menu::find($id);
        $menu->menu_baslik = request('menu_baslik');
        $menu->ozel_url = request('ozel_url');
        $menu->menu_ust_id = request('menu_ust_id');
        $menu->sayfa_id = request('sayfa_id');
        $menu->sira_no = request('sira_no');
        $menu->slug = str_slug(request('menu_baslik'));

        $menu->save();
        if($menu){
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
        $sil = Menu::destroy($id);
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
