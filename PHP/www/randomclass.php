<?php

class Fruta{

    public $ngjyra;
    public $pesha;
    public $madhesia;
}

$Molla = new Fruta();
$Molla->ngjyra = "E kuqe, Jeshile ose E verdhe";
$Molla->pesha = "70 gr";
$Molla->madhesia = "E vogel";

echo"Rezultati:"." Ngjyra e frutit ".$Molla->ngjyra." Pesha e frutit ".$Molla->pesha." Madhesia e frutit ".$Molla->madhesia."<br>";

$Portokall = new Fruta();
$Portokall->ngjyra = "Portokalli";
$Portokall->pesha = "90 gr";
$Portokall->madhesia = "E vogel";

echo"Rezultati:"." Ngjyra e frutit ".$Portokall->ngjyra." Pesha e frutit ".$Portokall->pesha." Madhesia e frutit ".$Portokall->madhesia."<br>";

$Ananas = new Fruta();
$Ananas->ngjyra = "I verdhe";
$Ananas->pesha = "100 gr";
$Ananas->madhesia = "E vogel";

echo"Rezultati:"." Ngjyra e frutit ".$Ananas->ngjyra." Pesha e frutit ".$Ananas->pesha." Madhesia e frutit ".$Ananas->madhesia;
?>