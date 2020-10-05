<h2>Exo 4</h2>
<hr>
<?php
function Lapin($num){
$lap1 = 1;
$lap2 = 0;
$compteur = 0;
  while ($compteur <= $num) {
    echo ' '.$lap2;
    $compteur = $compteur+1;
    $resultat = $lap1 + $lap2;
    $lap2=$lap1;
    $lap1 = $resultat;}}
echo Lapin(12);
echo '<hr>';
 ?>
