<?php
namespace App\models;

/**
 *
 */
class SegiEmpat
{
  public $panjang;
  public $lebar;

  // menghitung luas segi SegiEmpat

  public function luas()
  {
    return $this->panjang*$this->lebar;
  }

  // menghitung keliling segi SegiEmpat

  public function keliling() {
    return 2*($this->panjang+$this->lebar);
  }
}

 ?>
