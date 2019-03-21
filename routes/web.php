<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'yonetimkurumsal','middleware' =>'admin'],function(){
Route::get('/','YonetimKurumsalController@index')->name('yonetimkurumsal.index');
Route::get('cikis','YonetimKurumsalController@cikis')->name('yonetimkurumsal.cikis');
Route::resource('ayarlar','AyarController');
Route::resource('bloglar','BlogController');
Route::resource('kategori','KategoriController');
Route::resource('menuler','MenuController');
/*Route::post('ayarlar','AyarController@guncelle')->name('ayar.guncelle');*/
Route::resource('sayfalar','SayfaController');
Route::resource('hizmetler','HizmetController');
Route::resource('sliderlar','SliderController');
Route::resource('referanslar','ReferansController');
Route::resource('yazilar','YaziController');
Route::resource('projeler','ProjeController');
Route::resource('proje_kategori','Proje_KategoriController');
Route::get('kullanicilar','YonetimKurumsalController@kullanicilar')->name('kullanicilar.index');
Route::get('kullaniciekle','YonetimKurumsalController@kullaniciekle')->name('kullanici.ekle');
Route::post('kullanicikayit','YonetimKurumsalController@kullanicikayit')->name('kullanici.kayit');
Route::get('kullaniciduzenle/{id}','YonetimKurumsalController@kullaniciduzenle')->name('kullanici.duzenle');
Route::post('kullaniciguncelle/{id}','YonetimKurumsalController@kullaniciguncelle')->name('kullanici.guncelle');
Route::delete('kullanicisil/{id}','YonetimKurumsalController@kullanicisil')->name('kullanici.sil');
Route::get('iletisim','YonetimKurumsalController@iletisim')->name('iletisim');
Route::post('iletisim','YonetimKurumsalController@iletisimgonder')->name('iletisim.gonder');
Route::resource('galeri','GaleriController');

});

Auth::routes(['register' => false]);

//Anasayfa
Route::get('/','HomeController@index')->name('anasayfa');

//Sayfalar
Route::get('sayfa/{id}/{slug}', 'HomeController@sayfa')->name('sayfa.goster');

Route::get('/hakkimizda','HomeController@hakkimizda')->name('hakkimizda.goster');

Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim.formu');
Route::post('iletisimformu','HomeController@iletisimformgonder')->name('iletisimformu.gondeer');
//anasayfa iletşim formu için
Route::get('anasayfailetisim','HomeController@anasayfailetisim')->name('anasayfailetisim.formu');
Route::post('anasayfaform','HomeController@anasayfaformgonder')->name('anasayfaform.gonder');
//Referanslar
Route::get('/referanslar','HomeController@referanslar')->name('referanslari.goster');
Route::get('/referans/{id}/{slug}','HomeController@referans');
//Blog
Route::get('/bloglar','HomeController@bloglar')->name('bloglari.goster');
Route::get('/blog,/{id}/{slug}','HomeController@blog');




//Hizmetler
Route::get('/hizmetler','HomeController@hizmetler')->name('hizmetleri.goster');
Route::get('/hizmet/{id}/{slug}','HomeController@hizmet');

//Haberler (İcerikler)
Route::get('/haberler','HomeController@haberler')->name('haberler.goster');
Route::get('/haber/{id}/{slug}','HomeController@haber');

//Projeler
Route::get('/projeler','HomeController@projeler')->name('projeleri.goster');
Route::get('/proje/{id}/{slug}','HomeController@proje');

