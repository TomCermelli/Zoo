<?php
require_once("ClassOis.php");
require_once("ClassVeg.php");
require_once("ClassZoo.php");
require_once("Classtigre.php");
$NewZoo = new Zoo("MonZoo", 5);
echo "<br>";
$grandaigle = new Oiseau("sifflement", "Grandaigle", "aigle", 1 , 205);
echo $grandaigle;
$NewZoo->ajouter($grandaigle);
echo "<br>";
$Cheeta= new Vegetarien("hurlement", "Cheeta", "chimpanzé",3);
echo $Cheeta;
$NewZoo->ajouter($Cheeta);
echo "<br>";
$Ann= new Vegetarien("beuglement", "Ann", "Autruche",5);
echo $Ann;
$NewZoo->ajouter($Ann);
echo "<br>";
echo "<br>";
$Fantome= new Tigre("feulement", "Fantôme", "tigre du Bengale",4, 10);
echo $Fantome;
$NewZoo->ajouter($Fantome);
echo "<br>";
echo "<br>";
$Azog= new Carnivore("sifflement", "Azog", "orque",70);
echo $Azog;
$NewZoo->ajouter($Azog);
echo "<br>";
 $NewZoo->supprimer($Ann);
 echo "<br>";
echo "<br>";
$NewZoo->inventaire();
 ?>