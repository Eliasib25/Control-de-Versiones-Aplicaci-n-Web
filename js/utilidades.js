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

function agregarTelefono() {

    var telefono = document.
    getElementById("telefono");
    var telefonoTexto = telefono.value; 

    var telefonos = document.
    getElementById("telefonos");

    var li = crearTagConTexto("li",telefonoTexto);
    telefonos.appendChild(li);
    telefono.value= "";
    telefono.focus();
}

function agregarTelefonoAcudiente() {

    var telefono = document.
    getElementById("telefonoacudiente");
    var telefonoTexto = telefono.value; 

    var telefonos = document.
    getElementById("telefonosacudiente");

    var li = crearTagConTexto("li",telefonoTexto);
    telefonos.appendChild(li);
    telefono.value= "";
    telefono.focus();
}

function agregarCorreo() {

    var telefono = document.
    getElementById("correo");
    var telefonoTexto = telefono.value; 

    var telefonos = document.
    getElementById("correos");

    var li = crearTagConTexto("li",telefonoTexto);
    telefonos.appendChild(li);
    telefono.value= "";
    telefono.focus();
}

function agregarCorreoAcudiente() {

    var telefono = document.
    getElementById("correoacudiente");
    var telefonoTexto = telefono.value; 

    var telefonos = document.
    getElementById("correosacudiente");

    var li = crearTagConTexto("li",telefonoTexto);
    telefonos.appendChild(li);
    telefono.value= "";
    telefono.focus();
}

function inicioSesion() {

    var usuario = document.getElementById("correo").value;
    var password = document.getElementById("password").value;
  
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


function adicionarGestionVenta() {

    var tipoPago;
    if (document.getElementById("radio1").checked) {
        tipoPago = "Efectivo";
      } else if(document.getElementById("radio2").checked) {
        tipoPago = "Transferencia";
      } else{
        tipoPago = "Tarjeta";
      }

    var cliente = document.getElementById("cliente").value;
    var producto = document.getElementById("productos").value;
    var preciounitario = document.getElementById("preciounitario").value;
    var cantidades = document.getElementById("cantidades").value;
    var proveedor = document.getElementById("proveedor").value;
    var fechaCompra = document.getElementById("fechaCompra").value;
    var numeroTarjeta = document.getElementById("numeroTarjeta").value;


    var valorCompra = parseInt(preciounitario) * parseInt(cantidades);
    var tabla = document.getElementById("tabla1");
    var tagTR = crearTag("tr");

    var tagTD = crearTagConTexto("td", cliente);
    var tagTD2 = crearTagConTexto("td", producto);
    var tagTD3 = crearTagConTexto("td", preciounitario);
    var tagTD4 = crearTagConTexto("td", cantidades);
    var tagTD5 = crearTagConTexto("td", proveedor);
    var tagTD6 = crearTagConTexto("td", numeroTarjeta);
    var tagTD7 = crearTagConTexto("td", fechaCompra);
    var tagTD8 = crearTagConTexto("td", valorCompra);

    agregarElementoContenedor(tagTR, tagTD);
    agregarElementoContenedor(tagTR, tagTD2);
    agregarElementoContenedor(tagTR, tagTD3);
    agregarElementoContenedor(tagTR, tagTD4);
    agregarElementoContenedor(tagTR, tagTD5);
    agregarElementoContenedor(tagTR, tagTD6);
    agregarElementoContenedor(tagTR, tagTD7);
    agregarElementoContenedor(tagTR, tagTD8);
    agregarElementoContenedor(tabla, tagTR);
}

