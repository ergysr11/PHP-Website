<?php
class Produkti {
    public $cmimi;
    public $sasia;
    public static $shitorja;

    public function __construct($cmimi, $sasia) {
        $this->cmimi = $cmimi;
        $this->sasia = $sasia;
    }

    public function vlera(){
        $v = $this->cmimi * $this->sasia;
        return $v;
    }
}

Produkti::$shitorja = 3;

$objekti1 = new Produkti(12, 5);
$objekti2 = new Produkti(8, 12);

echo "<p>Objekti 1, shitorja: ".$objekti1::$shitorja;
echo "<p>Objekti 2, shitorja: ".$objekti2::$shitorja;