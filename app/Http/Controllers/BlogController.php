<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $bloglar = Blog::all();
        return view('adminkurumsal.bloglar.index',compact('bloglar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloglar = Blog::where('blog_ust_id',null)->get();
        return view ('adminkurumsal.bloglar.create',compact('bloglar'));
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
            'blog_adi'=>'required',
            'blog_aciklamasi'=>'required',
            'yazi_baslik'=>'required',
            'yazi_icerik'=>'required',
            'yazi_kategorisi'=>'required',

        ));
        $blog = new Blog();
        $blog->blog_adi = request('blog_adi');
        $blog->blog_aciklamasi = request('blog_aciklamasi');
        $blog->yazi_baslik = request('yazi_baslik');
        $blog->yazi_icerik = request('yazi_icerik');
        $blog->yazi_kategorisi = request('yazi_kategorisi');
        //$blog->yazi_one_cikan_foto = request('yazi_one_cikan_foto');
        $blog->slug = request('blog_adi');
        $blog->blog_ust_id = request('blog_ust_id');


        if (request()->hasFile('blog_foto')) {

            $this->validate(request(), array('blog_foto' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));


            $resim = request()->file('blog_foto');
            $dosya_adi = 'blog_foto' . '-' . time() . '.' . $resim->extension();




            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $blog->yazi_one_cikan_foto = $dosya_yolu;


            }
        }


        $blog->save();
        if($blog){
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
        $blog = Blog::find($id);
        $tumbloglar = Blog::all();
        return view('adminkurumsal.bloglar.edit', compact('blog', 'tumbloglar'));

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
            'blog_adi'=>'required',
            'blog_aciklamasi'=>'required',



        ));

        $blog = Blog::find($id);
        $blog->blog_adi = request('blog_adi');
        $blog->blog_aciklamasi = request('blog_aciklamasi');
        $blog->yazi_baslik = request('yazi_baslik');
        $blog->yazi_icerik = request('yazi_icerik');
        $blog->yazi_kategorisi = request('yazi_kategorisi');
        //$blog->yazi_one_cikan_foto = request('yazi_one_cikan_foto');
        $blog->slug = str_slug(request('blog_adi'));
        $blog->blog_ust_id = request('blog_ust_id');

        if (request()->hasFile('yazi_one_cikan_foto')) {

            $this->validate(request(), array('yazi_one_cikan_foto' => 'image|mimes:png,jpg,jpeg,gif|max:2048'));


            $resim = request()->file('yazi_one_cikan_foto');
            $dosya_adi = 'yazi_one_cikan_foto' . '-' . time() . '.' . $resim->extension();



            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $blog->yazi_one_cikan_foto = $dosya_yolu;


            }
        }
        $blog->save();

        if($blog){
            alert()
                ->success('Başarılı','İşlem Başarılı')
                ->showConfirmButton()

                ->autoClose(2000);
            return redirect()->route('bloglar.index');

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
        Blog::destroy($id);


            alert()
                ->success('Başarılı','Silme Başarılı')
                ->showConfirmButton()

                ->autoClose(2000);
            return redirect()->route('bloglar.index');




    }

}
