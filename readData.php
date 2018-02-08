<!DOCTYPE html>
<html>
<head>
	<title>Caracterizacion</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="js/readData.js"></script>
	<link rel="stylesheet" type="text/css" href="css/readData.css">
</head>
<body>
	<form method="POST" id="matriz">
		<p>
			<label for="">Documento:</label>
			<input type="text" name="Documento" id="Documento">
			<input type="button" value="Consulta" onclick="consultaDocumento()">
		</p>
		<div class="divTable">
			<div class="divTableHeading">
				<div class="divTableRow">
					<div class="divTableHead">Titulo</div>
				</div>
			</div>
		</div>
		<div class="divTable">
			<div class="divTableHeading">
				<div class="divTableRow">
					<div class="divTableHead">IDENTIFICACION</div>
					<div class="divTableHead">NOMBRE COMPLETO</div>
					<div class="divTableHead">CENTRO</div>
					<div class="divTableHead">ZONA</div>
					<div class="divTableHead">PROGRAMA</div>
					<div class="divTableHead">ESCUELA</div>
					<div class="divTableHead">EMAIL</div>
					<div class="divTableHead">TELEFONO</div>
					<div class="divTableHead">EDAD</div>
					<div class="divTableHead">ASIGNACION</div>
					<div class="divTableHead">CONVENIO</div>
				</div>
			</div>
			<div class="divTableBody">
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
		<div class="divTable">
			<div class="divTableHeading">
				<div class="divTableRow">
					<div class="divTableHead">Novedad</div>
					<div class="divTableHead">Inducci&oacute;n
						<div class="divTable innerTable">
							<div class="divTableHeading">
								<div class="divTableRow">
									<div class="divTableHead">General</div>
									<div class="divTableHead">Campus Virtual</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">
						<div class="divTable">
							<div class="divTableBody">
								<div class="divTableRow">
									<div class="divTableCell">&nbsp;</div>
									<div class="divTableCell">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="divTable">
			<div class="divTableHeading">
				<div class="divTableRow">
					<div class="divTableHead">Factores de Riesgo
						<div class="divTable">
							<div class="divTableHeading">
								<div class="divTableRow">
									<div class="divTableHead">Factor Socio-Demogr&aacute;fico
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell" id="riesgoFSD">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">Factor Socio-Económico
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">Factor Academico Antecedentes
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">Factor Académico por Apropiacion al Modelo
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">Factor Institucional
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">Factores Externos
										<div class="divTable">
											<div class="divTableHeading">
												<div class="divTableRow">
													<div class="divTableHead">Riesgo</div>
													<div class="divTableHead">Acciones realizadas según ruta de PAPC</div>
													<div class="divTableHead">RESULTADOS</div>
												</div>
											</div>
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
									<div class="divTableHead">NIVEL DE RIESGO POR FACTORES
										<div class="divTable">
											<div class="divTableBody innerTableBody">
												<div class="divTableRow">
													<div class="divTableCell">&nbsp;</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>

