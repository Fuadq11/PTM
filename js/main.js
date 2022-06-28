
var navContainer = document.getElementById("nav-container");
var navs = navContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < navs.length; i++) {
  navs[i].addEventListener("click", function() {
    console.log("clicked");
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}