function Drink() {
  var old1 = document.getElementsByClassName('boire')[0].innerHTML;
  var new1 = old1.replaceAll('plein', 'vide');
  document.getElementsByClassName('boire')[0].innerHTML = new1;
}

function ToRest() {
  var old2 = document.getElementsByClassName('fauteuil')[0].innerHTML;
  var new2 = old2.replaceAll('neuf', 'utilisé');
  document.getElementsByClassName('fauteuil')[0].innerHTML = new2;
}

function Sleep() {
  var old3 = document.getElementsByClassName('lit')[0].innerHTML;
  var new3 = old3.replaceAll('fait', 'défait');
  document.getElementsByClassName('lit')[0].innerHTML = new3;
}
