<?php
require("randlib.php");
$n = 0;
$gain = 100000;
echo "Les Gain Affichier Sur Les Jours Sont Des Gain Perdu, Vous Gagner Vos Reste<br/>";
$jour = ["Lundi","Mardi","Mercdredi","Jeudi","Vendredi","Samdi","Dimance"];
while (($gain > 0) && ($n < 7))
{
$nego = srcrand(0,100001);
$gain = $gain - $nego;
echo "Il Est ".$jour[$n]." J'ai Perdu ::: ".$nego.", Il Me Reste :::: ".$gain."<br/>";
$n = $n + 1;
}
if ($gain > 0)
{
echo "Vous Avez Gagner :::::: ".$gain;
}
