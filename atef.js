function control1(){
x= document.getElementById("email-administrateur").value;
y=document.getElementById("password-administrateur").value;
if (x=="" || y == "") {
alert("veuillez remplir les deux formulaires");
window.location.hostname="administrateur.php";
}
}
function control2(){
    x= document.getElementById("email-professeur").value;
    y=document.getElementById("password-professeur").value;
    if (x=="" || y == "") {
    alert("veuillez remplir les deux formulaires");
    window.location.hostname="professeur.php";
    }
    }


function control3(){
x= document.getElementById("email-eleve").value;
y=document.getElementById("password-eleve").value;
if (x=="" || y == "") {
alert("veuillez remplir les deux formulaires");
window.location.hostname="eleve.php";
}
}

