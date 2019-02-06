<?php

namespace App\Http\Controllers;


// penambahan models ke Controller
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\models\SegiEmpat;


class SegiEmpatController extends Controller
{
    // memanggil form Input
    public function inputSegiEmpat() {

      return View::make('segi-empat.inputSegiEmpat');
    }

    // membaca hasil input, diteruskan menampilkan hasilnya
    public function hasil(Request $request) {
      $segiEmpat=new SegiEmpat;
      // aturan validasi
      $rules=[
        'panjang'=>'required|numeric',
        'lebar'=>'required|numeric'
      ];

      $validator=Validator::make(Input::all(),$rules);

      // cek validasi
      if($validator->fails()) {
        // jika salah kembalikan ke form untuk diperbaiki
        return View::make('segi-empat.inputSegiEmpat',compact('segiEmpat'))->withErrors($validator);
      }else{
        // lanjutkan ke menampilkan hasilnya
        $segiEmpat->panjang=Input::get('panjang');
        $segiEmpat->lebar=Input::get('lebar');
        return View::make('segi-empat.hasil',compact('segiEmpat'));
      }
    }

    // tambah form
    public function form_ajax(){
        return View::make('segi-empat.ajax');
        }
}
