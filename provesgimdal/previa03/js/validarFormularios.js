

function validarUsuari(Usuari){

    var formato = /^[a-zA-Z0-9_-]{4,15}$/;
    Usuari = Usuari.replace(/\+/g, '\+');
    
    mostrarValidacion('#usuari',formato.test(Usuari));
}

function validarNom(nom){

    var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;
    nom = nom.replace(/\+/g, '\+');
    
    mostrarValidacion('#nom',formato.test(nom)|| nom=='');
}

function validarCognoms(cognoms){

    var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/;
    cognoms = cognoms.replace(/\+/g, '\+');
    
    mostrarValidacion('#cognoms',formato.test(cognoms) || cognoms=='');
}

function validarPermisos(permisos){

    var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/;
    permisos = permisos.replace(/\+/g, '\+');
    
    mostrarValidacion('#permisos',formato.test(permisos) || permisos=='');
}



function validarPassword(pass){
    pass = pass.replace(/\+/g, '\+');
    
    mostrarValidacion('#password',pass.length>=4);
}

function validarPasswordIguales(password,passwordRepetida){
    password = password.replace(/\+/g, '\+');
    passwordRepetida = passwordRepetida.replace(/\+/g, '\+');
    
    mostrarValidacion('#password2',password.length>=4 && password==passwordRepetida);
}

/**
 * Cambia el estilo del input para indicar si es valido o no
 * 
 * @param nombreCampo Nombre del campo
 * @param valido boolean
 */
function mostrarValidacion(nombreCampo,valido){
    if (valido){
        $(document).ready(function(){
            $(nombreCampo).css('border','1px solid #7ca22c');
            $(nombreCampo).css('box-shadow','0 0 2px 1px #7ca22c');
        });
    }
    else{
        $(document).ready(function(){
            $(nombreCampo).css('border','1px solid red');
            $(nombreCampo).css('box-shadow','0 0 2px 1px red');
        }); 
    }
}