require('./faq.js');

function openSideMenu() {
    document.getElementById("menu").style.width = "200px";
    document.getElementsByClassName("sidebar").style.marginLeft = "200px";
}
function closeSideMenu() {
    document.getElementById("menu").style.width = "0";
    document.getElementsByClassName("sidebar").style.marginLeft = "0";
}
