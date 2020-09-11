//Les variables
    //nombre
var nombre = 42
    console.log(nombre);
    //tableau
  var tab = [2 , 5 , 6 , 7 , 9]
    console.log(tab);
    //chaine de caracteres
  var chaine = "ceci est une chaine de caracteres"
    console.log(chaine);
//Conditions
if (nombre>=50){  console.log( "moitmoit")}
  else if (nombre<=40){  console.log( "peux mieux faire")}
else {  console.log( "la grande réponse")}


    //if, else if ,else

    //switch
    var lenght = tab.length;
    switch (lenght) {
        case (lenght = 10):
            console.log("il y a 10 éléments dans le tableau");
            break;
        case (lenght = 5):
            console.log("il y a 5 éléments dans le tableau");
            break;
        case (lenght = 0):
            console.log("Je ne connais pas le nombre d'éléments du tableau");
            break;
        default :
        console.log("Aucun tableau trouvé")
        break;
    }
//Boucles
for (let pas = 0; pas < 5; pas++) {
  console.log("Messire, on en a gros");
}
//while ("Messireonenagros")

var x= ["2" , "5" , "6" , "7" , "9"];
for(var i= 0; i < x.length; i++)
{
     console.log(x[i]);
}
