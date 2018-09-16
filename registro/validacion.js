/**
 * Created by Gerard on 31/07/14.
 */
function validacio() {
for(var i=0; i<document.forms[0].elements.length-1;i++){

var valor = document.forms[0].elements[i].value;
if( valor == null || valor.length == 0  ) {
    alert('No has rellenado todos los campos');
    return false;
    }
}

if (document.getElementById("inputPassword").value!=document.getElementById("inputPassword2").value){
    alert('Las contraseñas no coinciden.');
    return false;
}
var age= document.getElementById('age').value;
if(age<16){
    alert("Lo siento, no cumples los requisitos para registrarte ");
    return false;

    }
valor = document.getElementById("age").value;
if( isNaN(valor) ) {
    return false;


}else{
return true;}
}

