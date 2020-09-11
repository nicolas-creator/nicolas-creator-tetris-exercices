function recuperation(id) {
  return (document.getElementById(id));
}
function eliminer(para) {
    para.textContent = " Je suis un poisson mort ";
}
eliminer(recuperation("poisson2"));
