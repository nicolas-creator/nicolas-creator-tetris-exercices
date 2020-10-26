<!DOCTYPE html>

<head>
<title>☺☺☺FORMULAIRE☺☺☺</title>
</head>
  <style>body{background-color:white;}
      input{background-color:black;

        border-radius: 100px;
        position: relative;

        display:inline-block;

        color: #20FF00;
      text-decoration: inherit;

      transition: 0.5s;


      }
input:hover{

        box-shadow: 0 0 5px #20FF00;
        box-shadow: 0 0 25px #20FF00;
        box-shadow: 0 0 50px #20FF00;
        box-shadow: 0 0 200px #20FF00;


      }

  </style>

<form method="POST" action="index.php">
<p> <h1>Name</h1></p>
    <input type="text" name="flag"  id="username" placeholder="User Name" required>
<p> <h1>Prenom</h1></p>
      <input type="text" name="prem"  id="prenom" placeholder="prenom" required>
<p><h1>Code</h1></p>
       <input type="password" name="flag2" id="password" placeholder="Password" required>
  <input type="submit" value="Envoyer"/>
  </form>
</html>

<?php
/*$un='root';
$deux='';
$base = new PDO('mysql:host=localhost;dbname=basededonnées;charset=utf8', $un, $deux);*/

if(isset($_POST['flag'])&& isset($_POST['prem'])&& isset($_POST['flag2'])){
  $username=$_POST['flag'];
  $prenom=$_POST['prem'];
  $password=$_POST['flag2'];

  /*$base = new PDO(');*/
  $link=mysqli_connect("localhost","root","", "niveau2sql");
  $sql="INSERT INTO connexions(nom, prenom, password) VALUES('$username', '$prenom', '$password')";
  mysqli_query($link,$sql);
  /*$base->query($sql);
  echo $sql ;*/
}

 ?>
