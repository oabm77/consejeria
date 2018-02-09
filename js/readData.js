var msgFSD, msgFSE;
$(document).ready(function(){
    $('#riesgoFSD').click(function(){
        $.alert(msgFSD);
    });    
    $('#riesgoFSE').click(function(){
        $.alert(msgFSE);
    });    
});

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
    document.getElementById("riesgoFSE").innerHTML = riesgoFSE(arr);
}

// Analisis de los riesgos
function riesgoFSD(arr) {
    var na = ['No Aplica', '#N/A'];

    var riesgos = new Array;
    riesgos.push(arr['Area Residencia'] == 'Rural'?'Rural':null);
    riesgos.push(arr['Estado Civil'] == 'Madre Soltera'?'Madre Soltera':null);
    riesgos.push(na.indexOf(arr['Disc. Auditiva']) < 0?arr['Disc. Auditiva']:null);
    riesgos.push(na.indexOf(arr['Disc. Cognitiva']) < 0?arr['Disc. Cognitiva']:null);
    riesgos.push(na.indexOf(arr['Disc. Emocional']) < 0?arr['Disc. Emocional']:null);
    riesgos.push(na.indexOf(arr['Disc. Fisica']) < 0?arr['Disc. Fisica']:null);
    riesgos.push(na.indexOf(arr['Disc. Mental']) < 0?arr['Disc. Mental']:null);
    riesgos.push(na.indexOf(arr['Disc. Visual']) < 0?arr['Disc. Visual']:null);
    riesgos.push(arr['Convenio INPEC'] == 'Interno'?'Interno':null);
    msgFSD = '';
    riesgos.forEach(function(e){
        msgFSD += (e!=null?e+'\n':'');
    });
    
    return msgFSD.length > 0?"Riesgo por condiciones personales":"Sin riesgo por condiciones personales";
}

function riesgoFSE(arr) {
    var riesgos = new Array;
    riesgos.push(arr['Ingresos Mensuales'] == 'Menos de un salario mínimo'?'Menos de un salario mínimo':null);
    riesgos.push(arr['Situación Laboral'] == 'Desempleado'?'Desempleado':null);
    msgFSE = '';
    riesgos.forEach(function(e){
        msgFSE += (e!=null?e+'\n':'');
    });
    return msgFSE.length > 0?"Riesgo socioeconomico":"Sin riesgo socioeconomico";
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