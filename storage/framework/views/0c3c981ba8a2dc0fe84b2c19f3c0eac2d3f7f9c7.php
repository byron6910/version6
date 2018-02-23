<div class="modal fade" id="user-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close"  data-dismiss="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Usuario</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						 <label for="name">Nombre:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Nombre" name="name" id="name" value="<?php echo e(old('name')); ?>">
					</div>

					<div class="col-sm-6">
						 <label for="name">Email:</label>
              			  <input type="email" class="form-control" placeholder="Escriba correo" name="email" id="email" value="<?php echo e(old('email')); ?>">
					</div>

						<div class="col-sm-6">
						 <label for="name">Password:</label>
              			  <input type="password" class="form-control" placeholder="Escriba Password" name="password" id="password" value="<?php echo e(old('password')); ?>">
					</div>

					<div class="col-sm-6">
						 <label for="country_code">Codigo Telefono:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Codigo" name="country_code" id="country_code" value="<?php echo e(old('country_code')); ?>">
					</div>


					<div class="col-sm-6">
						 <label for="phone_number">Numero Telefonico:</label>
              			  <input type="number" class="form-control" placeholder="Escriba Telefono" name="phone_number" id="phone_number" value="<?php echo e(old('phone_number')); ?>">
					</div>


					<div class="col-sm-6">
						 <label for="ciudad">Ciudad:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Ciudad" name="ciudad" id="ciudad" value="<?php echo e(old('ciudad')); ?>">
					</div>

					<div class="col-sm-6">
						 <label for="calle">Calle:</label>
              			  <input type="text" class="form-control" placeholder="Escriba Calle" name="calle" id="calle" value="<?php echo e(old('calle')); ?>">
					</div>


					<div class="col-sm-6">
						 <label for="postal">Postal:</label>
              			  <input type="number" class="form-control" placeholder="Escriba Postal" name="postal" id="postal" value="<?php echo e(old('postal')); ?>">
					</div>

					   <div class="col-sm-6">
			             <label for="tipo">Tipo:</label>
	                                <select name="tipo" id="tipo" class="form-control">
	                                    
	                                    <option value="cliente"> Cliente</option>
	                                    <option value="administrador"> Administrador</option>
	                                    <option value="conductor"> Conductor</option>

	                                </select>
       				  </div> 

       				  <div class="col-sm-6">
       				  	 <label for="foto">Foto:</label>
                    	<input type="file" class="form-control"  name="foto">
                    </div>




				</div>
			</div>
	

		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-user" type="button"  >Save</button>
		</div>
		</div>
	</div>

</div>