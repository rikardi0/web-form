<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="welcome.css">
	<title>Formulario Cliente</title>
</head>

<body>
	<section id="welcome-section" class="col-12" style="padding: 0px;">


		<div class="welcome-container">
			<svg version="1.1" viewBox="0 0 2048 1794" width="270" height="270" xmlns="http://www.w3.org/2000/svg">
				<path transform="translate(1e3 394)"
					d="m0 0h37l71 2 57 3 46 4 54 6 57 8 33 5 39 6 65 14 31 6 54 10 62 13 26 5 39 10 41 12 41 13 31 10 21 6 48 17 14 7v9l-5 19-18 60-17 58-11 43-9 31-9 32-16 54-9 31-10 40-14 48-12 41-17 59-8 32-10 33-10 35-4 10-2 2-20-1-27-3-30-3-34-2-5-1-47-2-31-1-10-1h-59l-9 1-49 2-52 4-45 5-44 6-64 11-37 7-40 8-37 7-47 11-75 20-28 8-42 11-28 8-61 20-47 15-31 9-59 21-17 6-4 2-5-1-6-2-58-20-48-16-4-5-11-28-12-36-11-28-22-57-6-15-10-30-11-29-18-46-14-37-10-30-8-20-10-27-11-27-15-42-7-20-11-28-16-42-11-29-13-38-13-33-10-26-11-28-8-24-6-17-6-14-7-20v-5l6-3 27-8 36-9 32-10 47-14 55-15 54-12 33-8 54-12 70-14 37-6 61-8 43-6 65-7 44-4 51-3z"
					fill="#FE110F" />
				<path transform="translate(1e3 394)"
					d="m0 0h37l71 2 57 3 46 4 54 6 57 8 33 5 39 6 65 14 31 6 54 10 62 13 26 5 39 10 41 12 41 13 31 10 21 6 48 17 14 7v9l-5 19-18 60-17 58-11 43-9 31-9 32-16 54-9 31-10 40-14 48-12 41-17 59-8 32-10 33-10 35-4 10-2 2-20-1-27-3-30-3-34-2-5-1-47-2-31-1-10-1h-59l-9 1-49 2-52 4-45 5-44 6-64 11-37 7-40 8-37 7-47 11-75 20-28 8-42 11-28 8-61 20-47 15-31 9-59 21-17 6-4 2-5-1-6-2-58-20-48-16-4-5-11-28-12-36-11-28-22-57-6-15-10-30-11-29-18-46-14-37-10-30-8-20-10-27-11-27-15-42-7-20-11-28-16-42-11-29-13-38-13-33-10-26-11-28-8-24-6-17-6-14-7-20v-5l6-3 27-8 36-9 32-10 47-14 55-15 54-12 33-8 54-12 70-14 37-6 61-8 43-6 65-7 44-4 51-3zm113 114-63 3-45 3-57 5-73 7-55 8-58 10-46 9-48 10-42 9-34 7-58 15-34 10-26 7-31 9-21 5-11 4-1 3 17 51 22 58 12 32 5 14 8 25 15 40 22 58 16 48 11 28 12 33 10 25 12 36 12 34 10 25 10 27 10 26 8 26 9 24 5 13 3 1 44-16 48-16 30-8 48-15 36-11 50-14 55-13 64-16 45-10 42-9 49-8 46-7 47-7 57-7 70-6 37-2 29-1h80l59 3 44 4h7l8-25 14-48 10-34 9-31 7-29 13-45 17-58 10-34 6-24 6-23 17-58 18-62 5-16v-6l-16-6-43-14-31-9-46-11-31-8-42-10-50-10-53-9-33-4-82-8-39-3-53-3-29-1z"
					fill="#FDFCFB" />
				<path transform="translate(1144,474)"
					d="m0 0h53l56 1 69 4 46 4 50 6 49 7 58 10 49 10 29 6 20 4 40 10 34 10 29 9 25 8 27 9 21 6 10 4 1 1v7l-13 44-10 34-10 36-10 39-16 54-15 51-9 31-7 30-20 68-13 44-10 36-10 39-7 24-4 12-4 1-33-4-35-3-28-2-24-1h-119l-38 2-51 4-61 7-62 9-52 9-92 18-31 6-64 16-44 12-37 10-46 12-48 15-43 14-36 12-25 7-54 19-6 1-3-5-12-33-14-37-10-26-11-31-6-19-18-48-13-34-8-21-8-25-12-34-11-28-15-40-15-45-10-26-14-37-15-40-6-19-6-18-11-28-11-30-8-20-9-25-5-15 2-4 64-20 34-10 60-15 64-17 39-9 45-10 47-8 60-11 63-10 52-7 72-8 63-5 58-3zm-26 34-63 3-45 3-57 5-73 7-55 8-58 10-46 9-48 10-42 9-34 7-58 15-34 10-26 7-31 9-21 5-11 4-1 3 17 51 22 58 12 32 5 14 8 25 15 40 22 58 16 48 11 28 12 33 10 25 12 36 12 34 10 25 10 27 10 26 8 26 9 24 5 13 3 1 44-16 48-16 30-8 48-15 36-11 50-14 55-13 64-16 45-10 42-9 49-8 46-7 47-7 57-7 70-6 37-2 29-1h80l59 3 44 4h7l8-25 14-48 10-34 9-31 7-29 13-45 17-58 10-34 6-24 6-23 17-58 18-62 5-16v-6l-16-6-43-14-31-9-46-11-31-8-42-10-50-10-53-9-33-4-82-8-39-3-53-3-29-1z"
					fill="#FDF9F8" />
				<path transform="translate(1153,455)"
					d="m0 0h31l67 2 58 3 58 5 73 8 27 3 44 7 55 11 36 8 108 27 31 10 36 12 11 4 43 15 2 1-1 9-7 26-7 28-19 64-6 21-11 37-8 30-6 25-10 33-9 31-14 48-8 28-7 29-12 41-18 61-12 42-7 29-1 1-17-1-51-6-51-4-27-1h-86l-30 1-61 4-40 4-57 7-107 16-42 8-56 12-66 16-40 10-26 6-42 12-47 14-38 12-35 10-36 12-44 15-48 17-7 2h-6l-9-24-13-34-9-24-13-38-8-23-11-28-12-32-7-19-12-36-30-80-11-29-6-21-10-26-14-37-19-51-8-25-9-24-10-27-13-34-12-34-10-30-11-28-6-16 1-4 43-14 28-8 31-8 23-7 24-7 26-7 34-9 31-8 77-16 51-11 53-10 54-9 49-7 101-10 51-4 52-3 41-2zm-9 19-49 1-58 3-63 5-72 8-52 7-63 10-60 11-47 8-58 13-37 9-61 16-52 13-47 14-47 15-5 2-1 3 10 29 33 87 6 16 6 21 13 34 14 37 18 48 6 20 10 27 13 35 11 28 10 28 8 25 11 29 13 35 12 31 15 45 12 32 12 31 15 41 3 5 12-3 48-17 35-10 35-12 37-12 48-15 51-13 36-10 45-12 56-14 123-24 52-9 62-9 61-7 51-4 38-2h119l37 2 41 3 36 4 8 1 2-1 8-25 11-42 9-34 9-30 10-34 12-41 8-29 6-25 17-58 14-47 10-35 12-47 11-37 16-55 1-3v-7l-8-4-19-6-17-5-31-10-34-11-35-10-34-9-23-5-31-6-43-9-55-10-33-5-45-6-45-5-35-3-69-4-67-1z"
					fill="#FE110F" />
				<path transform="translate(921,607)"
					d="m0 0h15l10 2 11 5 11 8 6 8 8 16 4 11 5 22 9 54 1 9v18l-2 12-5 12-7 11-7 7-10 7h-2v2l8 1 11 4 11 7 8 8 8 14 5 13 4 21 5 35 9 54 7 32 8 27 2 5v5l-21 4-45 9-4-2-7-24-5-22-6-42-7-41-6-37-3-12-6-10-8-4-15-1 8 57 10 59 10 62 3 18v6l-7 3-44 11-10 2h-8l-3-13-6-38-5-40-9-56-15-91-11-67-10-63-5-40-6-38 1-4 26-3 56-9z"
					fill="#FDFCFB" />
				<path transform="translate(251,573)"
					d="m0 0 9 1 17 5 35 12 15 5 4 2 15 39 15 40 11 30 11 33 22 58 9 24 7 19 8 26 10 26 33 88 9 29 11 28 12 32 11 29 12 36 10 28 12 31 11 29 11 30 8 25 12 33v4l-12-3-25-9-30-10-6-4-14-35-12-32-10-25-17-49-10-26-6-15-16-41-7-19-9-27-13-34-15-38-9-24-5-13-6-20-14-36-15-38-6-15-7-20-11-32-14-36-10-26-6-15-9-24-7-23-8-20-9-24z"
					fill="#FE110F" />
				<path transform="translate(718,644)"
					d="m0 0 5 1 3 15 12 42v5l-9 3-16 5-36 9-17 4 8 28 14 55 7 22 12-3 33-9 26-6 5-1 5 15 8 35 3 9-1 4-25 7-28 8-19 6 4 16 8 27 7 31 14 49 16 55 10 35-1 4-8 3-30 10-24 12h-3l-8-25-18-63-7-30-13-45-15-52-14-49-5-21-8-30-16-55-12-41-11-39v-6l9-3 25-7 29-7 77-22z"
					fill="#FDFCFB" />
				<path transform="translate(1224,580)"
					d="m0 0h133l25 1 1 1v32l-1 29-6 1-41-1v62l-1 237-1 67-1 1-9 1-43 2h-11l-1-3v-166l1-149 1-52h-47l-1-9v-33l1-20z"
					fill="#FDFEFD" />
				<path transform="translate(1006,426)"
					d="m0 0h47l43 1 58 3 43 3 46 5 31 4v1l-61-1h-72l-46 1-60 3-41 3-72 7-47 6-119 17-52 10-56 12-65 15-18 5-31 6-47 13-48 14-42 13-44 12-9 3h-9l-20-7-17-4-21-7-22-8 2-2 34-11 50-15 21-5 44-11 25-7 61-15 47-11 34-6 86-15 43-7 57-8 63-7 59-5 54-3 25-1z"
					fill="#FE110F" />
				<path transform="translate(1467,604)"
					d="m0 0 36 4 67 8 12 2 1 1-1 17-4 34-6 28-14 44-11 35-13 42-6 19-7 27-25 80-2 6 27 3 32 4 3 2-3 23-4 31-3 1-53-3-60-2-7-2 1-16 5-38 4-18 20-64 10-31 9-32 5-19 14-44 22-70 2-7-53-6-6-2 2-18 5-38z"
					fill="#FDFCFB" />
				<path transform="translate(1132,583)"
					d="m0 0h6l1 1 3 33 6 86 6 80 8 111 4 53 4 57 1 17-5 1-25 2-31 4-5-1-1-4-6-81-10-137-9-125-4-64-1-28 2-1 46-3z"
					fill="#FDFCFB" />
				<path transform="translate(900,670)"
					d="m0 0h14l5 3 3 11 9 60 4 23v8l-4 10-7 6-6 2h-6l-2-5-6-35-12-73v-9z" fill="#FE110F" />
			</svg>
			<h1 class="welcome-title">Bienvenido!</h1>
			<p class="welcome-text">
				Esta por comenzar su registro como comercio aliado de FRITZ, felicitaciones
			</p>
			<a href="#welcome-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff"
					class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
					<path
						d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
				</svg>
			</a>

		</div>
		<div id="welcome-content" class="welcome-content col-12">

			<h2 class="atention-banner text-center">
				Por favor tome en cuenta lo siguiente
			</h2>
			<ul class="registration-steps">
				<div>
					<h3>Paso 1</h3>
					<li>Realice este proceso en el lugar de entrega, su ubicación será utilizada como sitio de entrega.
					</li>
				</div>
				<div>
					<h3>Paso 2</h3>
					<li>Tenga a la mano su RIF y Cedula de Identidad, se le pedira tomar una fotografia legible</li>
				</div>
			</ul>
			<button id="begin-form" class="btn btn-danger btn-lg mb-4">Comenzar</button>

		</div>

	</section>
	<form action="codigo.php" enctype="multipart/form-data" method="POST"
		class="col-12 col-sm-8  col-md-6 needs-validation" class="form" style="display:none ;" id="form-data"
		novalidate>
		<!-- Progress bar -->
		<div class="progressbar">
			<div class="progress" id="progress"></div>
			<div class="progress-step progress-step-active" data-title="Cliente"></div>
			<div class="progress-step" data-title="Fotografia"></div>
			<div class="progress-step" data-title="Entrega"></div>
		</div>

		<!-- Steps -->
		<div class="form-step form-step-active">
			<div class="col">
				<label for="nombreComercio" class="form-label">Nombre Comercio</label>
				<input type="text" class="form-control" id="nombreComercio" name="nombreComercio" required>
				<div class="invalid-feedback">Por favor llena el campo.</div>
			</div>

			<div class="col">
				<label for="cedula" class="form-label">RIF</label>
				<div class="input-group">

					<select value="V" name="prefijoId" class="form-check col-3"
						style="background-color: rgb(203, 203, 203);" id="estado">
						<option>V</option>
						<option>E</option>
						<option>J</option>
						<option>P</option>
						<option>G</option>
						<input type="text" class="form-control" aria-label="Text input with dropdown button"
							name="cedula" required>
						<div class="invalid-feedback">Por favor llena el campo.</div>
				</div>
			</div>

			<div class="col mb-3">
				<label for="estado" class="form-label">Estado</label>
				<select class="form-control" id="estado" name="estado" required>
					<option selected disabled value="">Seleccione</option>
					<option value="Amazonas">Amazonas</option>
					<option value="Anzoategui">Anzoátegui</option>
					<option value="Apure">Apure</option>
					<option value="Aragua">Aragua</option>
					<option value="Barinas">Barinas</option>
					<option value="Bolivar">Bolívar</option>
					<option value="Carabobo">Carabobo</option>
					<option value="Cojedes">Cojedes</option>
					<option value="Delta Amacuro">Delta Amacuro</option>
					<option value="Falcon">Falcón</option>
					<option value="Guarico">Guárico</option>
					<option value="Lara">Lara</option>
					<option value="Merida">Mérida</option>
					<option value="Miranda">Miranda</option>
					<option value="Monagas">Monagas</option>
					<option value="Nueva Esparta">Nueva Esparta</option>
					<option value="Portuguesa">Portuguesa</option>
					<option value="Sucre">Sucre</option>
					<option value="Tachira">Táchira</option>
					<option value="Trujillo">Trujillo</option>
					<option value="Yaracuy">Yaracuy</option>
					<option value="Zulia">Zulia</option>
					<option value="La Guaira">La Guaira</option>
					<option value="Distrito Capital">Distrito Capital</option>
				</select>
				<div class="invalid-feedback">
					Por favor llena el campo.
				</div>
			</div>

			<div class="row m-0">
				<div class="col">
					<label for="nombreCliente" class="form-label">Nombre</label>
					<input type="text" class="form-control" id="nombreCliente" name="nombreCliente" required>
					<div class="invalid-feedback">Por favor llena el campo.</div>
				</div>

				<div class="col">
					<label for="apellidoCliente" class="form-label">Apellido</label>
					<input type="text" class="form-control" id="apellidoCliente" name="apellidoCliente" required>
					<div class="invalid-feedback">Por favor llena el campo.</div>
				</div>
			</div>

			<div class="col mb-4">
				<label for="email" class="form-label">Email</label>
				<div class="input-group has-validation">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
					<input type="text" class="form-control" id="email" name="email" required>
					<div class="invalid-feedback">Por favor llena el campo.</div>
				</div>
			</div>

			<div class="col mb-4">
				<label for="cedula" class="form-label">Cedula</label>
				<div class="input-group">

					<select value="V" name="prefijoId" class="form-check col-3"
						style="background-color: rgb(203, 203, 203);" id="estado">
						<option>V</option>
						<option>E</option>
						<input type="text" class="form-control" aria-label="Text input with dropdown button"
							name="cedula" required>
						<div class="invalid-feedback">Por favor llena el campo.</div>
				</div>
			</div>
			<button href="#" class="btn mb-4 btn-danger btn-next width-50 ml-auto">Continuar</button>

		</div>

		<div class="form-step col-11">
			<div id="card-img-cedula" class="card-img text-center rounded shadow mb-4">
				<h2>CEDULA</h2>
				<svg id="svg-cedula" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
					class="bi bi-camera" viewBox="0 0 16 16">
					<path
						d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
					<path
						d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
				</svg>

				<img id="imgCedula" src="#" height="100" width="200" class="mb-4 rounded shadow" alt="your image" />
				<p id="label-cedula" style="display: none;">Por favor cargue una imagen</p>
				<label>
					<input type="file" id="imgInpCedula" capture="camera" style="display: none;" name="cedulaImage"
						accept="*">
					<p class="btn btn-secondary">Activar Camara</p>
				</label>
			</div>
			<div id="card-img-rif" class="text-center rounded shadow mb-4"
				style="display: flex; align-items: center; justify-content: center; flex-direction: column; background-color: rgb(236, 236, 236); padding: 20px;">
				<h2>RIF</h2>
				<svg id="svg-rif" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
					class="bi bi-camera" viewBox="0 0 16 16">
					<path
						d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
					<path
						d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
				</svg>

				<img id="img" src="#" height="100" width="200" class="mb-4 rounded shadow" alt="your image" />
				<p id="label-rif" style="display: none;">Por favor cargue una imagen</p>
				<label>
					<input type="file" id="imgInp" capture="camera" style="display: none;" name="rifImage" accept="*">
					<p class="btn btn-secondary">Activar Camara</p>
				</label>
			</div>
			<div class="btns-group mb-4">
				<a href="#" class="btn btn-secondary btn-prev">Volver</a>
				<a href="#" class="btn btn-danger btn-next">Continuar</a>
			</div>
		</div>
		<div class="col-12 mb-4" style="height: 250px;  margin: auto;" id="map"></div>

		<div class="form-step">
			<div class="btns-group">
				<a href="#" class="btn btn-secondary btn-prev">Volver</a>
				<button type="submit" class="btn btn-danger btn-next">Finalizar</button>
			</div>
		</div>
		</div>
		<input name="longitud" type="hidden" id="longitudInput">
		<input name="latitud" type="hidden" id="latitudInput">
	</form>
	</section>

	<script>

	</script>

	<script>
		const svgCedula = document.getElementById("svg-cedula");
		const imgCedula = document.getElementById("imgCedula");

		const svgRif = document.getElementById("svg-rif");
		const imgRif = document.getElementById("img");
		if (document.getElementById("imgInpCedula").value == "") {

			imgCedula.style.display = "none";
		}
		if (document.getElementById("imgInp").value == '') {

			imgRif.style.display = "none";
		}
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {

				img.src = URL.createObjectURL(file)
				svgRif.style.display = "none"
				imgRif.style.display = "block";
			}
		};
		imgInpCedula.onchange = evt => {
			const [file] = imgInpCedula.files
			if (file) {
				imgCedula.src = URL.createObjectURL(file)
				svgCedula.style.display = "none"
				imgCedula.style.display = "block";
			}
		}

	</script>

	<script>
		const prevBtns = document.querySelectorAll(".btn-prev");
		const nextBtns = document.querySelectorAll(".btn-next");
		const progress = document.getElementById("progress");
		const formSteps = document.querySelectorAll(".form-step");
		const progressSteps = document.querySelectorAll(".progress-step");
		const mapItem = document.getElementById("map");

		const labelCedula = document.getElementById("label-cedula");
		const labelRif = document.getElementById("label-rif");

		const cardContainerCedula = document.getElementById("card-img-cedula");
		const cardContainerRif = document.getElementById("card-img-rif");

		const form = document.getElementById("form-data");

		const beginBtn = document.getElementById("begin-form")
		const welcomeSection = document.getElementById("welcome-section");

		var map = L.map('map').setView([10.46, -66.93], 5);
		var marker = L.marker([10.46, -66.93]).addTo(map);
		map.locate({ setView: true, maxZoom: 60 });

		var clickedLocation = null;
		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);

		function onLocationFound(e) {
			var userLocation = e.latlng;
			if (!marker) {
				marker = L.marker(userLocation).addTo(map);
			} else {
				marker.setLatLng(userLocation);
			}
			clickedLocation = userLocation;
			document.getElementById('latitudInput').value = userLocation.lat;
			document.getElementById('longitudInput').value = userLocation.lng;
		}
		map.on('locationfound', onLocationFound);
		function onMapClick(e) {
			clickedLocation = e.latlng;
			if (marker) {
				marker.setLatLng(clickedLocation);
			} else {
				marker = L.marker(clickedLocation).addTo(map);
			}


			document.getElementById('latitudInput').value = clickedLocation.lat;
			document.getElementById('longitudInput').value = clickedLocation.lng;
		}
		map.on('click', onMapClick);

		beginBtn.addEventListener('click', event => {
			form.style.display = "block";
			welcomeSection.style.display = "none";

		});

		mapItem.style.display = "none"
		let formStepsNum = 0;


		(() => {
			'use strict'
			const forms = document.querySelectorAll('.needs-validation')
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					} else if (formStepsNum == 0) {
						formStepsNum++;
						event.preventDefault()
						event.stopPropagation()
						updateFormSteps();
						updateProgressbar();
					} else if (formStepsNum == 1) {
						formStepsNum++;
						event.preventDefault()
						event.stopPropagation()
						updateFormSteps();
						updateProgressbar();
					}

					form.classList.add('was-validated')
				}, false)
			})
		})()
		nextBtns.forEach((btn) => {
			btn.addEventListener("click", () => {
				if (formStepsNum == 1 && document.getElementById("imgInpCedula").value != "" && document.getElementById("imgInp").value != "") {
					formStepsNum++;
					mapItem.style.display = 'block'
					map.invalidateSize();
					map.setZoom(5);
					event.preventDefault()
					event.stopPropagation()
					updateFormSteps();
					updateProgressbar();
				} else if (formStepsNum == 1 && document.getElementById("imgInpCedula").value == "") {
					cardContainerCedula.classList.add('card-img-wrong');
					labelCedula.style.display = "block"

				} else if (formStepsNum == 1 && document.getElementById("imgInp").value == "") {
					cardContainerRif.classList.add('card-img-wrong');
					labelRif.style.display = "block"
				}
			});
		});



		prevBtns.forEach((btn) => {
			btn.addEventListener("click", () => {
				formStepsNum--;
				if (formStepsNum == 1) {
					mapItem.style.display = "none"
				}
				updateFormSteps();
				updateProgressbar();

			});
		});

		function updateFormSteps() {
			formSteps.forEach((formStep) => {
				formStep.classList.contains("form-step-active") &&
					formStep.classList.remove("form-step-active");
			});

			formSteps[formStepsNum].classList.add("form-step-active");
		}

		function updateProgressbar() {
			progressSteps.forEach((progressStep, idx) => {
				if (idx < formStepsNum + 1) {
					progressStep.classList.add("progress-step-active");
				} else {
					progressStep.classList.remove("progress-step-active");
				}
			});

			const progressActive = document.querySelectorAll(".progress-step-active");

			progress.style.width =
				((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
		}
	</script>

</html>