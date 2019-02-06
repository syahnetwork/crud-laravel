<?php

namespace App\models;

class SegiEmpat
{
  public $panjang;
  public $lebar;
  
  // menghitung luas kotak/
  public function luas()
  {
	return $this->panjang * $this->lebar;   
  }	  
  
  // mengitung keliling kotak //
  public function keliling()
  {
	return 2*($this->panjang + $this->lebar);   
  }	  
  
}
