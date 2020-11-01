<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_converter extends CI_Model {

  public function konversi($angka)
  {
    $angka = 'Rp' . number_format($angka, 0, '.', '.');
    return $angka;
  }

}
