<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$somme =0 ;
$moyenne=0;
foreach ($students as $key => $element) // liste des élèves et de leurs notes
{
    echo $key . ' a obtenu '. $element . '<br />';
    $somme = $somme + $element;
}
/*
for ($i=0; $i <count($students); $i++) // calcul de la somme des notes
{
    $somme[$i] = $students[$i];
} */
$somme;
echo '<br/> La moyenne de la classe est de : ' . $moyenne=$somme/(count($students));

//calcul de la moyenne