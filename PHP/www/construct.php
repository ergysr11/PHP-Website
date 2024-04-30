<?php

class Produkti {
  public $cmimi;
  public $sasia;
  public $tvsh;


public function __construct($cmimi, $sasia, $tvsh){
    $this->cmimi = $cmimi;
    $this->sasia = $sasia;
    $this->tvsh = $tvsh;

}

  public function vlera(){
    $vlera = $this->cmimi * $this->sasia;
    return $vlera;
 }

}

$objekti1 = new Produkti(12, 5, 2);
echo "<p>Objekti 1, vlera: ".$objekti1->vlera();

$objekti2 = new Produkti(14, 8, 6);
echo "<p>Objekti 2, vlera: ".$objekti2->vlera();
?>