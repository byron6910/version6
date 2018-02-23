<div class="modal fade" id="cooperativa-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Cooperativa</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						 <label for="nombre">Nombre:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Nombre" name="nombre" id="nombre" value="<?php echo e(old('nombre')); ?>">
					</div>

					<div class="col-sm-6">
						 <label for="correo">Email:</label>
              			  <input type="email" class="form-control" placeholder="Escriba correo" name="correo" id="correo" value="<?php echo e(old('correo')); ?>">
					</div>

						<div class="col-sm-6">
						 <label for="name">Direccion:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Direccion" name="direccion" id="direccion" value="<?php echo e(old('direccion')); ?>">
					</div>

					<div class="col-sm-6">
						 <label for="telefono">Telefono:</label>
              			  <input type="number" class="form-control" placeholder="Escriba Numero" name="telefono" id="telefono" value="<?php echo e(old('number')); ?>">
					</div>


					

					   <div class="col-sm-6">
			             <label for="activo">Activo:</label>
	                                <select name="activo" id="activo" class="form-control">
	                                    
	                                    <option value="1"> Disponible</option>
	                                    <option value="0"> No disponible</option>
	                               

	                                </select>
       				  </div> 

       		
				</div>
			</div>
	

		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-cooperativa" type="button" >Save</button>
		</div>
		</div>
	</div>

</div>