function llenaCampos(arr) {
    document.getElementById("identificacion").innerHTML = arr['Documento'];
    document.getElementById("nombre").innerHTML = arr['Nombres'] + ' ' + arr['Primer Apellido'] + ' ' + arr['Segundo Apellido'];
    document.getElementById("centro").innerHTML = arr['Cead'];
    document.getElementById("zona").innerHTML = arr['Zona'];
    document.getElementById("programa").innerHTML = arr['Programa'];
    document.getElementById("escuela").innerHTML = arr['Escuela'];
    document.getElementById("email").innerHTML = arr['Email'];
    document.getElementById("telefono").innerHTML = arr['Teléfono Acudiente'];
    document.getElementById("edad").innerHTML = arr['Edad'];
    document.getElementById("convenio").innerHTML = arr['Convenio INPEC'];
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