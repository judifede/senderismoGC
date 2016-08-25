/*
  * When the user clicks on the button,toggle between hiden and showing the dropdown content
*/
function desplegar() {
    document.getElementById("loginDropdown").classList.add("show");
}
function desplegar2() {
    document.getElementById("senderosDropdown").classList.add("show");
}
function desplegar3() {
    document.getElementById("dropdownMovil").classList.add("show");
}
function contraer(){
    document.getElementById("senderosDropdown").classList.remove("show");
}
function contraer2(){
    document.getElementById("dropdownMovil").classList.remove("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName('dropdown-content');
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}