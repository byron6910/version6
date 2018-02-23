<div class="modal fade" id="horario-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-missed="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Horario</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					
					<div class="col-sm-3">
                        <label for="id_origen_destino">Origen-Destino:</label>

                                <select name="id_origen_destino" id="id_origen_destino" class="form-control">

                                </select>
                        </div>

                       <div class="col-sm-3">
                            <label for="fecha_horario"> Fecha:</label>
                            <div class="input-group">
                                <input type="date" name="fecha_horario" id="fecha_horario" class="form-control">
                                
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    
                                </div>
                            </div>
                        </div>

                         <div class="col-sm-3">
                            <label for="hora">Hora:</label>
                            <input type="time" class="form-control" placeholder="Escriba Hora" value="<?php echo e(old('$hora')); ?>"  name="hora" id="hora">
                        </div>


					
       		
				</div>
			</div>
	

		<div class="modal-footer">
			<button data-missed="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-horario" type="button" >Save</button>
		</div>
		</div>
	</div>

</div>