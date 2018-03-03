<div class="modal fade" id="bus-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Bus</h4>
			</div>
			<form action="<?php echo e(route('postInsertBus')); ?>" method="POST" id="frm-bus-create"> 
			<div class="modal-body">
				<div class="row">
						   <div class="col-sm-8">
				                <label for="capacidad">Capacidad:</label>
				                <input type="number" class="form-control" placeholder="Escriba Capacidad" value="<?php echo e(old('capacidad')); ?>" id="capacidad" name="capacidad">

				            </div>

				            <div class="col-sm-8">
				                <label for="marca">Marca:</label>
				                <input type="text" class="form-control" placeholder="Escriba Marca" value="<?php echo e(old('marca')); ?>" name="marca" id="marca">

				            </div>

				       

				             <div class="col-sm-8">
				                <label for="condicion">Condicion:</label>
				                
				                <select id="condicion" name="condicion" class="form-control">
				                   
				                            <option value="1"> Disponible </option>
				                            <option value="0"> No Disponible</option>
				                </select>
               
           					 </div>

           					<div class="col-sm-8">
                            <label for="id_cooperativa"> Cooperativa:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id_cooperativa" id="id_cooperativa3" data-live-search="true">
                                      <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($cooperativa->id_cooperativa); ?>"> <?php echo e($cooperativa->nombre); ?>

                                    </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                             
                            </div>
                        </div>
					
       		
				</div>
			</div>
	

		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success" type="submit" >Save</button>
		</div>

		</form>
		</div>
	</div>

</div>