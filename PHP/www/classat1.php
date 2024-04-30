<?php

class Makinat{

    public $cmimi;
    public $sasia;
    public $ngjyra;

}

$Audi = new Makinat();
$Audi->cmimi = 250;
$Audi->sasia = 2;
$Audi->ngjyra = "Gri";

echo "Vlera totale ".$Audi->cmimi." sasia ",$Audi->sasia." ngjyra ",$Audi->ngjyra."<br>";

$Benz = new Makinat();
$Benz->cmimi = 300;
$Benz->sasia = 5;
$Benz->ngjyra = "Blue";

echo "Vlera totale ".$Benz->cmimi." sasia ",$Benz->sasia. " ngjyra ",$Benz->ngjyra;
?>