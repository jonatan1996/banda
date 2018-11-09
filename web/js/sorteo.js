/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var id_sorteo = 0;
var sede = '';

function sorteo(id) {
    var tombola = document.getElementById('tombola');
    if (tombola.style.display === 'none') {
        var boton = document.getElementById("boton_sorteo" + id);
        boton.disabled = true;
        tombola.style = style = "display: block; position: absolute; margin: auto; left: 0; right: 0; text-align: center; z-index: 1;";
        setInterval(apagar_sorteo, 2000);
        var original = document.getElementById('crud-datatable-original-container');
        var buscado = original.childNodes[0].childNodes[2].childNodes;
        for (var i = 0; i < buscado.length; i++) {
            var item = buscado[i];
            if (item.tagName == 'TR' && item.cells[0].innerText == id) {
                id_sorteo = item.cells[0].innerText.trim();
                sede = item.cells[1].innerText;
                console.log(item.cells[1].innerText);
            }
        }
    }
}

function apagar_sorteo() {
    var tombola = document.getElementById('tombola');
    tombola.style = style = "display:none; position: absolute; margin: auto; left: 0; right: 0; text-align: center; z-index: 1;";
    var random = document.getElementById('crud-datatable-random-container');
    var tabla = random.childNodes[0].childNodes[2].childNodes;
    for (var i = 0; i < tabla.length; i++) {
        var item = tabla[i];
        if (item.tagName == 'TR') {
            if (item.dataset.key == id_sorteo) {
                item.cells[1].innerText = sede;
            }
        }
    }
}