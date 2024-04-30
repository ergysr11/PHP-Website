<?php

class Sports{

    public $topi;
    public $fusha;
    public $cmimi;

}

$Football = new Sports();
$Football->topi = "Top normal";
$Football->fusha = "Bar";
$Football->cmimi = " 90 ";

echo " Konkluzioni "," Lloji i topit ".$Football->topi. " Fusha ".$Football->fusha. " Cmimi ".$Football->cmimi."<br>";


$Golf = new Sports();
$Golf->topi = "I vogel";
$Golf->fusha = "Bar";
$Golf->cmimi = " 75 ";

echo " Konkluzioni "," Lloji i topit ".$Golf->topi. " Fusha ".$Golf->fusha. " Cmimi ".$Golf->cmimi."<br>";

$Basketball = new Sports();
$Basketball->topi = "Normal";
$Basketball->fusha = "Parket";
$Basketball->kohezgjatja = " 90 Minuta ";

echo " Konkluzioni "," Lloji i topit ".$Basketball->topi. " Fusha ".$Basketball->fusha. " Kohezgjatja ".$Basketball->kohezgjatja."<br>";


$Tennis = new Sports();
$Tennis->topi = "I vogel";
$Tennis->fusha = "Bar";
$Tennis->kohezgjatja = " 4 rounde ";

echo " Konkluzioni "," Lloji i topit ".$Tennis->topi. " Fusha ".$Tennis->fusha. " Kohezgjatja ".$Tennis->kohezgjatja;
?>