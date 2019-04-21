<form>
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre" placeholder="Nombre Completo" 
			value="{{old('nombre', $paciente->nombre)}}">
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="rut">Rut</label>
			<input type="text" class="form-control" id="rut" placeholder="12.345.678-9" 
				value="{{old('rut', $paciente->rut)}}">
		</div>

		<div class="form-group col-md-4">
			<label for="fechaNacimiento">Fecha Nacimiento</label>
			<input type="date" class="form-control" id="fechaNacimiento" min="1900-01-01" max="2019-12-31"
				value="{{old('fechaNacimiento', $paciente->fechaNacimiento)}}">
		</div>

		<div class="form-group col-md-4">
		  	<label for="estadoCivil">Estado Civil</label>
		  	<select id="estadoCivil" class="form-control">
			    <option selected>Choose...</option>
			    <option>...</option>
		  	</select>
		</div>
	</div>

	<div class="form-group">
		<label for="direccion">Dirección</label>
		<input type="text" class="form-control" id="direccion" placeholder="Los Copihues 1234"
			value="{{old('direccion', $paciente->direccion)}}">
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
		  	<label for="comuna">Comuna</label>
		  	<select id="comuna" class="form-control">
			    <option selected>Choose...</option>
			    <option>...</option>
		  	</select>
		</div>

		<div class="form-group col-md-3">
			<label for="telefonoFijo">Teléfono Fijo</label>
			<input type="tel" class="form-control" id="telefonoFijo"
				value="{{old('telefonoFijo', $paciente->telefonoFijo)}}">
		</div>
		
		<div class="form-group col-md-3">
			<label for="telefonoCelular">Celular</label>
			<input type="text" class="form-control" id="telefonoCelular"
				value="{{old('celular', $paciente->celular)}}">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="centroAtencionUrgencia">Centro de Atención de Urgencias</label>
			<input type="text" class="form-control" id="centroAtencionUrgencia"
				value="{{old('centroAtencionUrgencia', $paciente->centroAtencionUrgencia)}}">
		</div>
		
		<div class="form-group col-md-6">
			<label for="medicoTratante">Médico Tratante</label>
			<input type="text" class="form-control" id="medicoTratante"
				value="{{old('medicoTratante', $paciente->medicoTratante)}}">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="inicioCuidados">Inicio de Cuidados</label>
			<input type="date" class="form-control" id="inicioCuidados" min="2000-01-01" max="2019-12-31"
				value="{{old('inicioCuidados', $paciente->inicioCuidados)}}">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Grabar</button>
</form>