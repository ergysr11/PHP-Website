<?php

class Fruta{
 
    public $pesha;
    public $sasia;
    
    public function __construct($pesha , $sasia) {

        $this->pesha = $pesha;
        $this->sasia = $sasia;

    }

public function llogaritja(){

    $vlera = $this->pesha * $this->sasia;

    return $vlera;
}


}

$Molle = new Fruta(25,2);
$Dardhe = new Fruta(30,3);

echo " Pesha Totale per mollet  " . $Molle->llogaritja();
echo " Pesha Totale per dardhet  " . $Dardhe->llogaritja();
?>