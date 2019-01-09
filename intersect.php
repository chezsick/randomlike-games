<?php
require("randlib.php");
echo "Si Vous Trouver Deux Nombre Identique Vous Gagner La Somme Assoicié<br/>";
$gain = [5,20,50,100,150,600,1000,2000,5000];
$pick = $gain[srcrand(0,count($gain))];
$a = srcrand(0,$pick);
$b = srcrand(0,$pick);
echo $a." = ".$b." => ".$pick;
if ($a == $b)
{
echo "<br/>Vous Avez Gagner ::::: ".$pick;
}
echo "<br/><a href=''>Rejouer</a>";