<?php $__env->startSection('content'); ?>
    <h3> Viaje </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Editar viaje: <?php echo e($viaje->id_viaje); ?> </h3>
            <?php echo $__env->make('Mensajes.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            {<?php echo Form::model($viaje,['method'=>'PATCH','route'=>['viaje.update',$viaje->id_viaje]]); ?>}
            <?php echo e(Form::token()); ?>


            <div class="form-group">
                <label for="id_viaje">ID viaje:</label>
                <input type="number" class="form-control" disable readonly value="<?php echo e($viaje->id_viaje); ?>"  name="id_viaje">

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
            
       <div class="form-group">
                <label for="origen">Origen:</label>
                <select name="id_origen_destino" class="form-control selectpicker" data-live-search="true" >
                    <?php $__currentLoopData = $origenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $origen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($viaje->id_origen_destino==$origen->id_origen_destino): ?>
                    <option value="<?php echo e($origen->id_origen_destino); ?> "selected> <?php echo e($origen->origen.'-'.$origen->destino); ?></option>
                        <?php else: ?>
                    <option value="<?php echo e($origen->id_origen_destino); ?> "> <?php echo e($origen->origen.'-'.$origen->destino); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             </div>




       
                 
               <div class="form-group">
                    <label for="id_horario">Fecha Hora :</label>
                    <select name="id_horario" class="form-control selectpicker" data-live-search="true">
                        <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($horario->id_horario==$viaje->id_horario): ?>
                        <option value="<?php echo e($horario->id_horario); ?> "selected> <?php echo e($horario->fecha_horario.'-'.$horario->hora); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($horario->id_horario); ?> "> <?php echo e($horario->fecha_horario.'-'.$horario->hora); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
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