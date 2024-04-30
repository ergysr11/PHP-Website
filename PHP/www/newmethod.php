<?php

class Sports{

    public $topi;
    public $fusha;
    public $cmimi;

    public function cmimiMeTvsh($cmimi){

        $shuma = $cmimi + $cmimi*0.2;
        return $shuma;

    }
    public function cmimiPaTvsh($cmimi){

        $shuma = $cmimi - $cmimi*0.2;
        return $shuma;

    }

}

$Football = new Sports();
$Football->topi = "Top normal";
$Football->fusha = "Bar";
$Football->cmimi = " 90 ";

echo "ME TVSH ".$Football->cmimiMeTvsh($Football->cmimi)."<br>";

$Golf = new Sports();
$Golf->topi = "I vogel";
$Golf->fusha = "Bar";
$Golf->cmimi = " 75 ";

echo "PA TVSH ".$Golf->cmimiPaTvsh($Golf->cmimi);
?>