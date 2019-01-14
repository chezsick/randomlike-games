<?php
require("config.php");
echo "<h1>Bienvenue Dans RandomLike Des Jeux !</h1>";
echo "Vous Avez Le Choix De Mes Jeux ::::: <br/><a href='intersect.php'>L'intersection - 5000</a></br><a href='enfer.php'>L'enfer De Sick - 10000</a></br>";
echo "Choisissez 6 Numero Entre 1 et 40 Separer Avec Espace ::: <form form action='loto.php' method='get'><input type='text' name='num'></form>";
$count = file_get_contents($randomsourcecount);
echo "<br/>Le Site Des Jeux A Générer ::::::: " . $count;
