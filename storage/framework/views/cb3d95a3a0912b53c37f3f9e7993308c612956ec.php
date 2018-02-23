<?php $__env->startSection('content'); ?>
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Bus </h3>
            <?php echo $__env->make('Mensajes.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            {<?php echo Form::open(['url'=>'bus','method'=>'POST','autocomplete'=>'off']); ?>}
            <?php echo e(Form::token()); ?>


            <div class="form-group">
                <label for="id_bus">PLACA:</label>
                <input type="text" class="form-control" value="<?php echo e(old('id_bus')); ?>" placeholder="Escriba Placa" name="id_bus">

            </div>
            
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" placeholder="Escriba Nombre" value="<?php echo e(old('marca')); ?>" name="marca">

            </div>
           

            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" class="form-control" placeholder="Escriba Capacidad" value="<?php echo e(old('capacidad')); ?>" name="capacidad">
                
            </div>

            <div class="form-group">
                <label for="condicion">Condicion:</label>
                <select name="condicion" class="form-control">
                   
                            <option value="1"> En circulacion </option>
                            <option value="0"> En mantenimiento</option>
                    </select>

            </div>


            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                 <div class="form-group">
                     <label for="id_cooperativa">Cooperativa:</label>
                        <select name="id_cooperativa" class="form-control">
                     <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cooperativa->id_cooperativa); ?> "> <?php echo e($cooperativa->nombre); ?></option>

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                 </div>
             </div>

            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>