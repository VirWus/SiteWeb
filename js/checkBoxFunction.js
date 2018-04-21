function checkLinkInput(){
  var g = document.getElementById("lien");
var h = document.getElementById("disabledInput");
if (g.type == "hidden") {
g.type = "text";
h.disabled = true;


}else {
  g.type = "hidden";
  h.disabled = false;

}

  }
