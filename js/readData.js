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
    document.getElementById("riesgoFSD").innerHTML = riesgoFSD(arr);
    console.log(arr);
}

// Analisis de los riesgos
function riesgoFSD(arr) {
    if(arr['Area Residencia'] == 'Rural' || arr['Estado Civil'] == 'Madre Soltera' ||
        arr['Disc. Auditiva'] != 'No Aplica' || arr['Disc. Auditiva'] != '#N/A' ||
        arr['Disc. Cognitiva'] != 'No Aplica' || arr['Disc. Cognitiva'] != '#N/A' ||
        arr['Disc. Emocional'] != 'No Aplica' || arr['Disc. Emocional'] != '#N/A' ||
        arr['Disc. Fisica'] != 'No Aplica' || arr['Disc. Fisica'] != '#N/A' ||
        arr['Disc. Mental'] != 'No Aplica' || arr['Disc. Mental'] != '#N/A' ||
        arr['Disc. Visual'] != 'No Aplica' || arr['Disc. Visual'] != '#N/A' ||
        arr['Convenio INPEC'] == 'Interno') {
        return "Riesgo por condiciones personales";
    } else {
        return "Sin riesgo por condiciones personales";
    }
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