<?php $__env->startSection('content'); ?>
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Viaje </h3>
            <?php if(count($errors)>0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
    
            <?php endif; ?>
         </div>
    </div>

            {<?php echo Form::open(['url'=>'viaje','method'=>'POST','autocomplete'=>'off']); ?>}
            <?php echo e(Form::token()); ?>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="id_viaje">ID Viaje:</label>
                <input type="number" class="form-control" placeholder="Escriba ID" name="id_viaje" required value="<?php echo e(old('id_viaje')); ?>">

            </div>
        </div>


        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select name="estado" class="form-control">
                        
                        <option value="0"> No Disponible</option>
                        <option value="1 "> Disponible</option>


                    </select>
                </div>
        </div> 



        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="form-group">
                    <label for="id_Cooperativa">Cooperativa:</label>
                    <select name="id_cooperativa" class="form-control">
                        <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cooperativa->id_cooperativa); ?> "> <?php echo e($cooperativa->nombre); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="form-group">
                    <label for="origen">Horario:</label>
                    <select name="id_horario" class="form-control">
                        <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($horario->id_horario); ?> "> <?php echo e($horario->fecha_horario.' - '. $horario->hora); ?></option>

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