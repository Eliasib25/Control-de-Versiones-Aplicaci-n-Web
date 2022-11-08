$(document).ready(function() {
    $("div.ftl-vertical-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.ftl-vertical-tab>div.ftl-vertical-tab-content").removeClass("active");
        $("div.ftl-vertical-tab>div.ftl-vertical-tab-content").eq(index).addClass("active");
    });
});

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

function crearTagConInput(tag,tagTR){

    var tagHTML = crearTag(tag);
    var boton = document.createElement("input");
    boton.type = "button";
    boton.value = "Eliminar";
    boton.className = "btn btn-danger";
    boton.onclick = function() {
        tagTR.remove();
         };
    tagHTML.appendChild(boton);

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

function remover() {
    document.getElementById("fila1").remove();
}

function agregar(){

    var select = document.getElementById("materias").value;

    var tabla = document.getElementById("tabla");
    var tagTR = crearTag("tr");

    var precio = Math.round(Math.random()*1000000);

    var tagtd = crearTagConTexto("td",select);
    var tagtd1 = crearTagConTexto("td",precio);
    var tagtd2 = crearTagConInput("td",tagTR);

    adicionarElementoContenedor(tagTR,tagtd);
    adicionarElementoContenedor(tagTR,tagtd1);
    adicionarElementoContenedor(tagTR,tagtd2);
    adicionarElementoContenedor(tabla,tagTR);
}
