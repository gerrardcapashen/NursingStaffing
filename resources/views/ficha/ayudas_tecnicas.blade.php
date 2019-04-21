<form>
	<div class="form-row">
		<div class="form-group col-md-3">
		  	<label for="sillaManual">Silla de ruedas manual</label>
		  	<select id="sillaManual" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-3">
		  	<label for="sillaMotorizada">Silla de ruedas motorizada</label>
		  	<select id="sillaMotorizada" class="form-control">
		  		<option value="" {{ ( '' == $asdf) ? 'selected' : '' }}>Seleccione</option>
				<option value="S" {{ ( 'S' == $asdf) ? 'selected' : '' }}>Si</option>
				<option value="N" {{ ( 'N' == $asdf) ? 'selected' : '' }}>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-3">
		  	<label for="sillaBanio">Silla de baño</label>
		  	<select id="sillaBanio" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-3">
		  	<label for="cojin">Cojín</label>
		  	<select id="cojin" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
	</div>

	<div class="form-group">
	  	<label for="estadoSillas">Estado sillas</label>
	  	<select id="estadoSillas" class="form-control">
		    <option selected>Seleccione</option>
		    <option>Bueno</option>
		    <option>Regular</option>
		    <option>Malo</option>
	  	</select>
	</div>


	<div class="form-row">
		<div class="form-group col-md-4">
		  	<label for="catreClinico">Catre clínico</label>
		  	<select id="catreClinico" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="colchonCae">Colchón antiescaras (CAE)</label>
		  	<select id="colchonCae" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="tecle">Tecle</label>
		  	<select id="tecle" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
	</div>

	<div class="form-group">
	  	<label for="estadoCatre">Estado de catre, tecle, CAE</label>
	  	<select id="estadoCatre" class="form-control">
		    <option selected>Seleccione</option>
		    <option>Bueno</option>
		    <option>Regular</option>
		    <option>Malo</option>
	  	</select>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
		  	<label for="andador">Andador</label>
		  	<select id="andador" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="bastones">Bastones</label>
		  	<select id="bastones" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="estadoAndador">Estado de andador y bastones</label>
		  	<select id="estadoAndador" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Bueno</option>
			    <option>Regular</option>
			    <option>Malo</option>
		  	</select>
		</div>
	</div>


	<div class="form-row">
		<div class="form-group col-md-4">
		  	<label for="motorAspiracion">Motor aspiración</label>
		  	<select id="motorAspiracion" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="balonOxigeno">Balón oxígeno</label>
		  	<select id="balonOxigeno" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-4">
		  	<label for="otro">Otro</label>
			<input type="text" class="form-control" id="otro">
		</div>
	</div>


	<div class="form-row">
		<div class="form-group col-md-6">
		  	<label for="usoLentes">Uso de lentes</label>
		  	<select id="usoLentes" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>

		<div class="form-group col-md-6">
		  	<label for="usoAudifonos">Uso de audífonos</label>
		  	<select id="usoAudifonos" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Grabar</button>
</form>