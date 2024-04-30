<?php

class Numrat{

    public $x;
    public $y;

    public function mbledhja(){
        $shuma = $this->x + $this->y;
        return $shuma;
    }
    
    public function zbritja(){
        $shuma = $this->x - $this->y;
        return $shuma;
    }
}

$Vlera1 = new Numrat();
$Vlera1->x = 8;
$Vlera1->y = 4;

echo " mbledhja ".$Vlera1->mbledhja()."<br>";
echo " zbritja ".$Vlera1->Zbritja();
?>