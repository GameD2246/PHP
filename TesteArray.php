<?php

$cidades = array("Natal", "Mossoró", "Caicó", "Pau dos Ferros", "Assu", "Galinhos");

$cidades[count($cidades)] = "Macaiba";

//echo $cidades[1]; mostra só 1
//
//for ($i=0; $i<count($cidades); $i++){
//    echo "$cidades[$i]<br>";
//}

foreach ($cidades as $cidade) {
    echo "$cidade<br>";
}