function checkLinkInput(){
  var g = document.getElementById("link");
  var h = document.getElementById("linkLabel");
if (g.type == "hidden") {
g.type = "text";
  h.style.visibility = "visible";
}else {
  g.type = "hidden";
  h.style.visibility = "hidden";
}

  }
