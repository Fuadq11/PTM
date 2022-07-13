
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
//////////////////////////// Language | Select ////////////////////////
var select = document.getElementById('lang');
var option = select.options[select.selectedIndex];
 lang = getCookie("lang");
 if (lang!= "") {
  select.value = lang;
} else {
 select.value = 'az';
}
function update(){
  var select = document.getElementById('lang');
  var option = select.options[select.selectedIndex];
  let lang = option.value;
  setCookie("lang", lang, 1);
  lang = getCookie("lang");
  //alert("Lang="+lang)
  select.value = lang;
  location.reload();
}


function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}






