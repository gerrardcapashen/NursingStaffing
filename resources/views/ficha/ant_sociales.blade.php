<form>
	<div class="form-group">
	    <label for="grupoFamiliar">Grupo Familiar</label>
		<textarea class="form-control" id="grupoFamiliar" rows="2"></textarea>
	</div>

	<div class="form-row">
		<div class="form-group col-md-3">
		  	<label for="relacionComunidad">Relación con la comunidad</label>
		  	<select id="relacionComunidad" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
		
		<div class="form-group col-md-9">
			<label for="relComunidadQuien">Con quién</label>
			<input type="text" class="form-control" id="relComunidadQuien">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-3">
		  	<label for="actividades">Participa en actividades</label>
		  	<select id="actividades" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
		
		<div class="form-group col-md-9">
			<label for="actividadesCuales">Cuáles</label>
			<input type="text" class="form-control" id="actividadesCuales">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-3">
		  	<label for="barreras">Barreras arquitectónicas de la vivienda</label>
		  	<select id="barreras" class="form-control">
			    <option selected>Seleccione</option>
			    <option>Si</option>
			    <option>No</option>
		  	</select>
		</div>
		
		<div class="form-group col-md-9">
			<label for="barrerasCuales">Cuáles</label>
			<input type="text" class="form-control" id="barrerasCuales">
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Grabar</button>
</form>