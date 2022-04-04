function control1(){
x= document.getElementById("numero-administrateur").value;
y=document.getElementById("password-administrateur").value;
if (x=="" || y == "") {
alert("veuillez remplir les deux formulaires");
window.location.hostname="administrateur.php";
}
}
function control2(){
    x= document.getElementById("id-eleve").value;
    y=document.getElementById("nom-eleve").value;
    if (x=="" || y == "") {
    alert("veuillez remplir les deux formulaires");
    window.location.hostname="eleve.php";
    }
    }


function control3(){
x= document.getElementById("numero-prof").value;
y=document.getElementById("password-prof").value;
if (x=="" || y == "") {
alert("veuillez remplir les deux formulaires");
window.location.hostname="prof.php";
}
}

