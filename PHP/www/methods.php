<?php

class Makinat{

    public $cmimi;
    public $sasia;
    public $ngjyra;

    public function vlera($cmimi,$sasia){

        $shuma = $cmimi*$sasia;
        return $shuma;

    }
}

$Audi = new Makinat();
$Audi->cmimi = 250;
$Audi->sasia = 2;
$Audi->ngjyra = "Gri";

echo "Vlera totale ".$Audi->vlera($Audi->cmimi,$Audi->sasia)."<br>";

$Benz = new Makinat();
$Benz->cmimi = 300;
$Benz->sasia = 5;
$Benz->ngjyra = "Blue";

echo "Vlera totale ".$Benz->vlera($Benz->cmimi,$Benz->sasia);
?>