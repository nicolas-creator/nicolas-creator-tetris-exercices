<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p> mot de passe:</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺☺</p>
    </body>
</html>
<?php
                                                 //1
function verificationPassword($motdepasse){
    $code = strlen($motdepasse);
    if($code >= 8 ) {
        return true;
    }
        else {
            return false;
        }
}
$valider = verificationPassword("1234");
var_dump($valider);


                                                 //2
function ameliorationverif($cod) {
$maj = preg_match('@[A-Z]@', $cod);
$min = preg_match('@[a-z]@', $cod);
$nomb = preg_match('@[0-9]@', $cod);

if($maj && $min && $nomb && strlen($cod) < 8) {
  return true;
}
  else {
      return false;
  }
}

echo ameliorationverif("a123456");


                                                 //3
function capital ($pays){
$pays=strtolower($pays);
    switch ($pays) {
        case "france":
            echo("Paris");
        break;
        case "allemagne":
            echo("Berlin");
        break;
        case "espagne":
            echo("Madrid");
        break;
        case "italie":
            echo("Rome");
        break;
        case "portugal":
            echo("Lisbonne");
        break;
        case "angleterre":
            echo("Londres");
        break;
        case "maroc":
            echo("Rabat");
        break;
        default :
        echo("Inconnu");
    }
}
echo capital("Allemagne");
echo "<br>".capital("Japon");

                                                //4
function listHTML($listname,$arrayelements){
    $resultat="<h3>$listname</h3>";
    $resultat.="<ul>";
    foreach($arrayelements as $element){
        $resultat.="<li>$element</li>";
    }
    $resultat.="</ul>";
return $resultat;
}
echo "<br>".listHTML('Capitale',["Berlin","Paris","Moscou"]);

                                                 //5
function remplacerLesLettres($phrase) {
$letterstoreplace= array("e","i","o");
$replacearray=array(3,1,0);
$replacedletter=str_ireplace($letterstoreplace,$replacearray,$phrase);
return $replacedletter;
}
echo remplacerLesLettres("Je kiffe la programmation");

                                                  //6
function quelleAnnee(){
    $today = date("Y");
    return $today;
}
echo "<br>".quelleAnnee();

                                                 //7
function quelleDate(){
    $todaysdate = date("d/m/Y");
    return $todaysdate;
}
echo "<br>".quelleDate();
?>
