<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\models\SegiEmpat;
use App\models\Kubus;


class SegiEmpatController extends Controller
{
  /*********************
  //memanggil form  input
  *********************/
  public function inputSegiEmpat()
    {
       return View::make('segi-empat.inputSegiEmpat');
    }
   
   /*********************
  //memanggil form  input kubus
  *********************/
  public function inputKubus()
    {
       return View::make('segi-empat.inputKubus');
    }
	
   /********
   * membaca hasil input 
   * diteruskan menampilkan hasilnya 
   *********/ 
   public function hasil(Request $request)
   {
	   $segiEmpat = new SegiEmpat;
	   //aturan validasi
	   $rules=[
		    'panjang'=>'required|numeric',
		    'lebar'=>'required|numeric'];
	 
	$validator = Validator::make(Input::all(), $rules);	
	  //cek validasi
   if ($validator->fails()) 
	{
	//jika salah kembalikan ke form untuk diperbaiki 	
	  return View::make('segi-empat.inputSegiEmpat',compact('segiEmpat'))->withErrors($validator);
    }else{		
	  //lanjukan ke menampilkan hasil/	    
      $segiEmpat->panjang=Input::get('panjang'); 	  
	  $segiEmpat->lebar = Input::get('lebar'); 	  
	  
      return View::make('segi-empat.hasil',compact('segiEmpat'));
	 }
    }

   /********
   * membaca hasil input kubus
   * diteruskan menampilkan hasilnya 
   *********/ 
   public function hasilKubus(Request $request)
   {
	   $kubus = new Kubus;
	   //aturan validasi
	   $rules=[
		    'panjang'=>'required|numeric',
		    'lebar'=>'required|numeric',
			'tebal'=>'required|numeric' ];
	 
	$validator = Validator::make(Input::all(), $rules);	
	  //cek validasi
   if ($validator->fails()) 
	{
	//jika salah kembalikan ke form untuk diperbaiki 	
	  return View::make('segi-empat.inputKubus',compact('kubus'))->withErrors($validator);
    }else{		
	  //lanjukan ke menampilkan hasil/	    
      $kubus->panjang=Input::get('panjang'); 	  
	  $kubus->lebar = Input::get('lebar'); 	  
	  $kubus->tebal = Input::get('tebal'); 	  
	  
      return View::make('segi-empat.hasilKubus',compact('kubus'));
	 }
    }	
	
	public function form_ajax(){
      return View::make('segi-empat.ajax');
      }

	public function hasil2()
	{
	if(Request::ajax()){
	   $alas=Input::get('alas');
	   $tinggi=Input::get('tinggi');

	   $hasil=$alas*$tinggi/2;
       
	   return '<div class="alert alert-info">Luas Segitiga adalah : $hasil</div>';
	    }
	}
}
