function checkLinkInput(){
  var g = document.getElementById('lien').type;
document.getElementById("test").style.opacity = "0.5";
if (g.type == "hidden") {
g.type = "text";




}else {
  g.type = "hidden";

}

  }
