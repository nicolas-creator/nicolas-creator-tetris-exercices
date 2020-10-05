<h1>Exo 1</h1>
<hr>
<?php
function titre()
{
$titre ="Hello World!";

return $titre;
}
echo titre();
 ?>
<style media="screen">
  h1
  {
   font-size: 50px;
  }
   *
   {
      font-size: 25px;
   }
</style>
<hr>
<?php
function ventillo()
{
$titre1 ="Mon super ventillo";
return $titre1;
}
echo ventillo();
 ?>
<hr>
<?php
function  jeRetourneMonArgument()
{
$abc = "abc";
$arg = "123";
return $abc ." ". $arg;
}
echo jeRetourneMonArgument();
 ?>
<hr>
<?php
function concatenation()
{
$a= "Kingsley" ;
$b= "Coman";
return $a .$b;

}
echo concatenation();
 ?>
 <hr>
 <?php
 function concatenationSpace()
 {
 $c= "Manuel" ;
 $d= " Nuller";
 return $c .$d;

 }
 echo concatenationSpace();
  ?>
  <hr>
