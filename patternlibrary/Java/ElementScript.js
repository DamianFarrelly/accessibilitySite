console.log("Hello world");

function openNav() {
  document.getElementById("Sidenav").style.width = "320px";
  document.getElementById("main").style.marginLeft = "320px";
}

function closeNav() {
  document.getElementById("Sidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}