<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
  protected $table = 'kota';
  protected $primaryKey = 'id';
  protected $fillable = ['id','id_propinsi','nama_kota'];
}
