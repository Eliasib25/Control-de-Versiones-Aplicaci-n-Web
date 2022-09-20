function crearTag(tag){
    var tagHTML = document.createElement(tag);

    return tagHTML;
}
function crearTagConTexto (tag,texto){

    var tagHTML = crearTag(tag);
    var textoHTML = document.createTextNode(texto);
    tagHTML.appendChild(textoHTML);

    return tagHTML;
}

function adicionarElementos(elemento){
    document.body.appendChild(elemento); 
}

function createTagImage(path){
    var tagImg = document.createElement("img");
    tagImg.src = path;
    return tagImg;
}

function createTagA(texto,url){
    var tagImg = crearTagConTexto('a',texto);
    // var tagImg = document.createElement("a");

    // var textoHTML = document.createTextNode(texto);
    // tagImg.appendChild(textoHTML);
    tagImg.href = url;
    return tagImg;
}

function adicionarElementoContenedor(contenedor,elemento){

    contenedor.appendChild(elemento);
}

function inicioSesion(usuario,password) {

    // var usuario = document.getElementById("usuario").value;
    // var password = document.getElementById("contraseña").value;
  
    if (usuario== "cliente" && password=="123") {
        window.location.href = "../html/interfazcliente.html";
    } else if (usuario== "gerente" && password=="123") {
        window.location.href = "interfazGerente.html";
    } else if (usuario== "secretaria" && password=="123") {
        window.location.href = "interfazSecretaria.html";
    } else if (usuario== "profesional" && password=="123") {
        window.location.href = "interfazprofesionales.html";
    }else if (usuario== "administrador" && password=="123") {
        window.location.href = "interfazadministrador.html";
    }else {
        alert("Usuario o contraseña errado");
    }
       
}