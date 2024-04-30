<?php

// function mesimi(){
//     echo "Ky eshte funksioni im i pare ne PHP";

// }

// mesimi();



function mesimi($cmimi,$sasia,$tvsh){
    $vlera = $cmimi*$sasia/$tvsh;
    return $vlera;
}
echo "Vlera e TVSH eshte ".mesimi(25,50,64)."<br>";
echo "Vlera eshte ".mesimi(44,21,92);
?>