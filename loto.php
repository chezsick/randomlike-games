<?php
require("randlib.php");
$nbball = 40;
$tirage = 6;
$a = 0;
echo "Les Numéro Tiré Sont ::::: ";
$numa = explode(" ",$_GET["num"]);
$balls = range(0,$nbball);
for ($g = 0;$g < $tirage;$g++)
{
$tired = srcrand(1,$nbball + 1);echo $balls[$tired]." ";if (array_search($balls[$tired],$numa)){$a = $a + 1;}
array_splice($balls,$tired,1);$nbball = $nbball - 1;
}
$gain = [0,5,20,300,5000,20000,100000];
echo "Vous Avez Gagner ::::: ".$gain[$a];