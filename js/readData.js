function llenaCampos(arr) {
    document.getElementById("identificacion").innerHTML = arr[1];
    document.getElementById("nombre").innerHTML = arr[2] + ' ' + arr[3] + ' ' + arr[4];
    document.getElementById("centro").innerHTML = arr[6];
    document.getElementById("zona").innerHTML = arr[7];
    document.getElementById("programa").innerHTML = arr[5];
    document.getElementById("escuela").innerHTML = arr[8];
    document.getElementById("email").innerHTML = arr[9];
    document.getElementById("telefono").innerHTML = arr[35];
    document.getElementById("edad").innerHTML = arr[30];
    document.getElementById("convenio").innerHTML = arr[24];
}

function consultaDocumento() {
     var documento = $("input#Documento").val();
     var values = 'Documento='+documento;

     $.ajax({
            url: "showData.php",
            type: "POST",
            data: values,
            success: function (response) {
                llenaCampos(JSON.parse(response));
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }

    });
}