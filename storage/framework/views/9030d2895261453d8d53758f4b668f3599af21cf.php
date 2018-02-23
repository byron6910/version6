<div class="modal fade" id="viaje-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-missed="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Viaje</h4>
			</div>
			<form action="<?php echo e(route('postInsertViaje')); ?>" method="POST" id="frm-viaje-create">
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">

                          <label for="estado">Estado:</label>
                                <select name="estado" class="form-control">
                                    
                                    <option value="0"> No Disponible</option>
                                    <option value="1 "> Disponible</option>


                                </select>
                        </div>

                        <div class="col-sm-12">

                        <label for="id_cooperativa">Cooperativa:</label>


                                <select name="id_cooperativa" id="id_cooperativa" class="form-control">

                                	   <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name=id_cooperativa value="<?php echo e($cooperativa->id_cooperativa); ?>"> <?php echo e($cooperativa->nombre); ?>

                                        
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                        </div>

                        <div class="col-sm-12">

                        <label for="id_horario">Horario:</label>

                                <select name="id_horario" id="id_horario" class="form-control">

                                </select>
                        </div>



				</div>
			</div>
	

		<div class="modal-footer">
			<button data-missed="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-viaje" type="button"  >Save</button>
		</div>
		</form>
		</div>
	</div>

</div>