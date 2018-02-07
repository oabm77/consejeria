<!DOCTYPE html>
<html>
<head>
	<title>Caracterizacion</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/readData.js"></script>
	<link rel="stylesheet" type="text/css" href="css/readData.css">
</head>
<body>
	<form method="POST" id="matriz">
		<p>
			<label for="">Documento:</label>
			<input type="text" name="Documento" id="Documento">
		</p>
		<div class="divTable">
			<div class="divTableBody">
				<!-- <div class="divTableRow">
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">&nbsp;</div>
				</div> -->
				<div class="divTableRow">
					<div class="divTableCell">IDENTIFICACION</div>
					<div class="divTableCell">NOMBRE COMPLETO</div>
					<div class="divTableCell">CENTRO</div>
					<div class="divTableCell">ZONA</div>
					<div class="divTableCell">PROGRAMA</div>
					<div class="divTableCell">ESCUELA</div>
					<div class="divTableCell">EMAIL</div>
					<div class="divTableCell">TELEFONO</div>
					<div class="divTableCell">EDAD</div>
					<div class="divTableCell">ASIGNACION</div>
					<div class="divTableCell">CONVENIO</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell" id="identificacion">&nbsp;</div>
					<div class="divTableCell" id="nombre">&nbsp;</div>
					<div class="divTableCell" id="centro">&nbsp;</div>
					<div class="divTableCell" id="zona">&nbsp;</div>
					<div class="divTableCell" id="programa">&nbsp;</div>
					<div class="divTableCell" id="escuela">&nbsp;</div>
					<div class="divTableCell" id="email">&nbsp;</div>
					<div class="divTableCell" id="telefono">&nbsp;</div>
					<div class="divTableCell" id="edad">&nbsp;</div>
					<div class="divTableCell" id="asignacion">&nbsp;</div>
					<div class="divTableCell" id="convenio">&nbsp;</div>
				</div>
			</div>
		</div>
		<p>
			<input type="button" value="Consulta" onclick="consultaDocumento()">
		</p>
	</form>
</body>
</html>

