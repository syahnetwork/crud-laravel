<?php
namespace App\models;
use App\models\SegiEmpat;

/**
 *
 */
class Kubus extends SegiEmpat
{

  public $tebal;

  // menghitung volume


  public function volume()
  {
    return $this->tebal*$this->luas();
  }
}




 ?>
