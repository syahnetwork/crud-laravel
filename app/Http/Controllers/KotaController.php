<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Kota;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Session;


class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota=Kota::paginate(5);
        return view('kota.index',compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=['id_propinsi'=>'required','nama_kota'=>'required','nama_kota.required'=>'Nama kota tidak boleh kosong'];

        $validator=Validator::make(Input::all(),$rules);
        if($validator->fails()){
          //validasi
          return Redirect::to('kota/create')->withErrors($validator);
        }else {
          //Store
          $kota=new Kota;
          $kota->id_propinsi=Input::get('id_propinsi');
          $kota->nama_kota=Input::get('nama_kota');
          $kota->save();
          Session::flash('message','Berhasil menambah rekaman kota!');
          return Redirect::to('kota');
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
        $kota=Kota::find($id);

        return View::make('kota.edit')->with('kota',$kota);
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
        $rules=array('id_propinsi'=>required,'nama_kota'=>'required');
        $validator=Validator::make(Input::all(),$rules);
        if($validator->fails()) {
          return Redirect::to('kota/'.$id.'/edit')->withErrors($validator);
        }else {
          //Store
          $kota=Kota::find($id);
          $kota->id_propinsi=Input::get('id_propinsi');
          $kota->nama_kota=Input::get('nama_kota');
          $kota->save();

          //Redirect
          Session::flash('message','Berhasil mengubah rekaman kota');
          return Redirect::to('kota');
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
        $affectedRows=Kota::where('id','=',$id)->delete();
        Session::flash('message','menghapus rekaman kota telah berhasil');
        return Redirect::to('kota');
    }
}
