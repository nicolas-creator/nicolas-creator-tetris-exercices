<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conjugaison</title>
  </head>
  <body>
    <button class="favorite styled" type="button"name="go"><font size="+9">☺LANCER☺</font></button>
    <input class="wesh"type="text" name="go" style="border-radius:10px;border:black ridge 10px;height:2.5em;width:10em;"><br>
  </body>
</html>
<style media="screen">
body {
color:black;
background-color:blue;

}
.wesh{
  margin-left: 674px;
  margin-top: 58px;
}
.styled {
    height: 100px;
    width: 1500px;
    text-align: center;
    color: #fff;
    border-radius: 1000px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(10, 0, 0, .2),
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 2px rgba(25, 255, 255, .6),
                inset -2px -2px 30px rgba(0, 0, 0, .6);
}
.styled:hover {
    background-color: #062ef1;
}

<?php
function Conj()
{
$verbe = (isset($_POST['go'])) ? $_POST['go'] : '';
$lenght = strlen($verbe);

if ($lenght == 0) {echo "Entrez un verbe !"; return false;}
if ($lenght > 15) {echo "Trop long !"; return false;}
  if ( preg_match("~[\W]~", $verbe) ) {return "Uniquement des lettres !!!" ;}
  if ( preg_match("~[0-9]~", $verbe) ) {return "Uniquement des lettres !!!" ;}
  if($verbe) {
         $newVerb = preg_replace('/er$/', '', $verbe);
         echo "<p>Je/J' ".$newVerb.'e</p><hr>';
         echo '<p>Tu '.$newVerb.'es</p><hr>';
         echo '<p>Il '.$newVerb.'e</p><hr>';
         echo '<p>Nous '.$newVerb.'ons</p><hr>';
         echo '<p>Vous '.$newVerb.'ez</p><hr>';
         echo '<p>Ils '.$newVerb.'ent</p><hr>';
}}
echo Conj();
?>
