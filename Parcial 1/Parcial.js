

function enviar(){
    document.formulario.submit();
}

function agregarfila(){
    var nuevafila = document.getElementById("input1");
    if(nuevafila.value === ""){

    }
    else{
        document.getElementById("tabla").insertRow(-1).innerHTML = `<tr><td id="nombre" name="gusto">${nuevafila.value}</td><td name="porcentaje">0</td><td><span class="editar" onclick="editar(this)">Edit</span></td></tr>`;
        nuevafila.value = "";
    }
}

function recargar(){

}

function editar(fila){
    var editar = false;

    document.getElementById('oculto').style.visibility = 'visible';

    if(editar === false){

        var nodetr = file.parentMode.parentMode;
        var nodestr = nodetr.getElementByTagName('td');
        var formulario = document.getElementById("form1");
        var gto = nodestr[0].firstChild.nodeValue;
        var ptje = nodestr[1].firstChild.nodeValue
        var codhmtl= '<td><input id="edit" type="text" name="gto1" value="'+gto+'"></td>'+
        '<td><input type="text" name="porc" id="porcen" value="'+ptje+'"></td>'+'<span> En edicion</span></td>'

    }
    nodetr.innerHTML=codhmtl;
    editar=true;
}

function cancelar(){
    window.location.reload();
    editar();
    if(editar===true){
    document.getElementById('oculto').style.visibility = 'hidden';
}

}


