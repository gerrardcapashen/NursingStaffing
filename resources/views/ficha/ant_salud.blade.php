<form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="diagLaboral">Diagnósticos Laborales</label>
			<input type="text" class="form-control" id="diagLaboral" value="{{old('diagLaboral', $title)}}">
		</div>

		<div class="form-group col-md-6">
			<label for="diagNoLaboral">Diagnósticos no Laborales</label>
			<input type="text" class="form-control" id="diagNoLaboral">
		</div>
	</div>

	<div class="form-group">
		<label for="prestadorSalud">Prestador de Salud Común</label>
		<input type="text" class="form-control" id="prestadorSalud">
	</div>

	<div class="form-row">
		<div class="form-group col-md-2">
			<label for="cuidadorasHoras" data-toggle="tooltip" data-placement="right" title="Cantidad de horas necesarias por cuidadora">Jornada de Cuidadoras</label>
			<input type="number" class="form-control" id="cuidadorasHoras" min="1" max="1000">
		</div>
		
		<div class="form-group col-md-2">
			<label for="cuidadorasNumero" data-toggle="tooltip" data-placement="right" title="Cantidad de cuidadoras">N° Cuidadoras</label>
			<input type="number" class="form-control" id="cuidadorasNumero" min="1" max="4">
		</div>
	</div>

	<div class="form-group">
		<label for="controlesMedicos">Controles médicos</label>
		<input type="text" class="form-control" id="controlesMedicos">
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
		  	<label for="rehabilitacion">Rehabilitación</label>
		  	<select id="rehabilitacion" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="rehabDomiciliaria">Domiciliaria</label>
		  	<select id="rehabDomiciliaria" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="rehabAmbulatoria">Ambulatoria</label>
		  	<select id="rehabAmbulatoria" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
		  	<label for="mantencion">Mantención</label>
		  	<select id="mantencion" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="mantDomiciliaria">Domiciliaria</label>
		  	<select id="mantDomiciliaria" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="mantAmbulatoria">Ambulatoria</label>
		  	<select id="mantAmbulatoria" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="cargaKineMotora">Carga Kine Motora</label>
			<input type="text" class="form-control" id="cargaKineMotora">
		</div>

		<div class="form-group col-md-4">
			<label for="cargaKineResp">Carga Kine Resp</label>
			<input type="text" class="form-control" id="cargaKineResp">
		</div>

		<div class="form-group col-md-4">
			<label for="cargaFono">Carga Fono</label>
			<input type="text" class="form-control" id="cargaFono">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="cargaTerapiaO">Carga Terapia O</label>
			<input type="text" class="form-control" id="cargaTerapiaO">
		</div>

		<div class="form-group col-md-6">
			<label for="cargaPsicologia">Carga Psicología</label>
			<input type="text" class="form-control" id="cargaPsicologia">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="proximoControl">Próximo control de salud</label>
			<input type="date" class="form-control" id="proximoControl">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Grabar</button>
</form>