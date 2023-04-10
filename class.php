<?php 
//buat class terlebih dahulu
class llpp{
    //membuat property
    public $panjang, $lebar;

    //buat constuct data di set luar
    function __construct($panjang, $lebar)
    {
        //masukin data ke properti
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    //buat method fungsi
    public function luaspp(){
        $panjang_m = $this->panjang / 100;
        $pp = $this->lebar * $panjang_m; 
        return $pp;
        return round($pp);
        
    }

    public function kelilingpp(){
        $panjang_m = $this->panjang / 100;
        $pp = $panjang_m * $panjang_m; 
        return $pp;
        return round($pp);
    }
}
?>