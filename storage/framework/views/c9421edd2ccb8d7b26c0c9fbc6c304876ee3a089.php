<?php $__env->startSection('content'); ?>
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Horario </h3>
            <?php echo $__env->make('Mensajes.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         </div>
    </div>

            {<?php echo Form::open(['url'=>'horario','method'=>'POST','autocomplete'=>'off']); ?>}
            <?php echo e(Form::token()); ?>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="id_horario">ID Horario:</label>
                <input type="number" class="form-control" placeholder="Escriba ID" name="id_horario" required value="<?php echo e(old('id_horario')); ?>">

            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" placeholder="Escriba Fecha" name="fecha_horario"  required value="<?php echo e(old('fecha_horario')); ?>">

            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" placeholder="Escriba Hora" name="hora" required value="<?php echo e(old('hora')); ?>")}}>

            </div>


        </div>

       

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="form-group">
                    <label for="origen">Origen-Destino:</label>
                    <select name="id_origen_destino" class="form-control">
                        <?php $__currentLoopData = $origenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $origen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($origen->id_origen_destino); ?> "> <?php echo e($origen->origen.'-'. $origen->destino); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

        </div>

    </div>
            
            

            <?php echo Form::close(); ?>

       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>