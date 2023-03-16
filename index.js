window.onload=function(){
  document.getElementById("form").addEventListener("click", function(event) {
    var target = event.target ;
    if (target.nodeName === "BUTTON") {
      var selectedAction = target.innerHTML;
      localStorage.setItem("selectedAction", selectedAction);
    }
  });
}
  window.addEventListener("load", function() {
    var selectedAction = localStorage.getItem("selectedAction");
    if (selectedAction) {
      document.getElementById("display").innerHTML =
        "Selected action: " + selectedAction;
    }
  });
