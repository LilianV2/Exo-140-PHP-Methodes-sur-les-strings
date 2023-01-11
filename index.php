<?php

// Compléter le code ci dessous pour afficher la longueur de la chaine de caracteres

echo strlen("google") . "<br>";

//echo"<br><br>"; //Decommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions

// Compléter le code ci dessous pour inverser la chaine de caractere

echo  strrev("anticonstitutionellement") . "<br>";

// Et si vous testiez également avec votre prénom ?

echo strrev("Lilian") . "<br>";


//echo"<br><br>";

// Compléter le code ci dessous pour remplacer le mot ok par non
$oldtxt = "Ok Google!";
$newtxt = str_ireplace("Ok","non", $oldtxt);

echo $newtxt;