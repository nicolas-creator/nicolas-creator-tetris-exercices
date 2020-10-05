<style media="screen">
  h1
  {
   font-size: 50px;
  }
   *
   {
      font-size: 25px;
      transition: 0.2s;
      font-family: fantasy;

      ;
   }
   .rotativator:hover
   {
     transform: rotate(180deg);
   }
    img{
      width: 14%;
    float: right;
    margin-right: 8em;
    transition: 60s;
    }
    img:hover{  filter: hue-rotate(25000deg); transition: 60s;}

</style>
<h1>Exo 3</h1>
<hr>
 <img src="https://i.pinimg.com/originals/c5/91/25/c5912582950c0186a1fc30b74387836c.gif" alt="">
<form  action="index.php" method="post">
<p>Votre âge 🔞 ? :</p><input type="text" name='age' placeholder="">
<input class="rotativator" style="border-radius:15px;margin: 5px;" type="submit" value="Confirmer mon âge">
</form>
<?php
function estIlMajeur()
{
$age = (isset($_POST['age'])) ? $_POST['age'] : '';
if (empty($age)){return "vous n'avez rien saisi";}
if(!preg_match('/^[0-9]*$/', $age)) {return "Veuillez saisir des nombres !";}
if ($age >= 18 ) {return "Vous avez $age ans, <br>BIENVENUE !!!";}
if ($age < 18 ) {return "Vous avez $age ans, <br>Désolé vous n'avez pas l'age requis pour acceder au site !";}
}
echo estIlMajeur();
 ?>
<hr>
<button  style="border-radius:15px;float:right" onclick="window.location.reload(true)">Recharger la page</button>
            <?php

function nbr()
{
$rdm1 = random_int(1, 99);
$rdm2 = random_int(1, 99);
$rdm3 = random_int(1, 99);
if ($rdm1 > $rdm2   ) {return "le premier chiffre est: " .$rdm1.' et le second est: ' .$rdm2." <br>Le premier chiffre est le plus grand, le second est le plus petit";}
if ($rdm1 < $rdm2) {return "le premier chiffre est: " .$rdm1.' et le second est: ' .$rdm2."<br>Le second chiffre est le plus grand, le premier est le plus petit";}
if ($rdm1 == $rdm2 ) {return "le premier chiffre est: " .$rdm1.' et le second est: ' .$rdm2." <br>GG égalitée !";}

  // code...

}
echo nbr();
 ?>
 <hr>
