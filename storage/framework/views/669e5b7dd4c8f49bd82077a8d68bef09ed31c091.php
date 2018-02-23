<?php $__env->startSection('content'); ?>
<?php echo $__env->make('viaje.test.cooperativa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('viaje.test.horario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
  

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-heading">
                Ingreso Viaje
          

            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="form-group">
                         <div class="col-sm-3">

                          <label for="estado">Estado:</label>
                                <select name="estado" class="form-control">
                                    
                                    <option value="0"> No Disponible</option>
                                    <option value="1 "> Disponible</option>


                                </select>
                        </div>

                        <div class="col-sm-3">
                            <label for="id_cooperativa"> Cooperativa</label>
                            <div class="input-group">
                                
                                <select class="form-control" name="id_cooperativa" id="id_cooperativa">
                                    <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name=id_cooperativa value="<?php echo e($cooperativa->id_cooperativa); ?>"> <?php echo e($cooperativa->nombre); ?>

                                        
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-cooperativa"></span>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <label for="id_horario"> Horario:</label>
                            <div class="input-group">
                                
                                <select class="form-control" name="id_horario" id="id_horario">
                                      <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name=id_horario value="<?php echo e($horario->id_horario); ?>"> <?php echo e($horario->fecha_horario); ?> <?php echo e($horario->hora); ?> <?php echo e($horario->origen_destino->origen); ?> - <?php echo e($horario->origen_destino->destino); ?>

                                        
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-horario"></span>
                                    
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default btn-sm"> Crear Viaje </button>
                    </div>
              
            </form>
        </section>
        </div>

    
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
       // $("#fecha_reserva").datepicker();

//        $('#add-more-cooperativa').on('click',function(){
//         $('#cooperativa-create').modal();

//        })

//        $('.btn-save-cooperativa').on('click',function(){
//         var nombre=$('#nombre').val();
//         var correo=$('#correo').val();
//         var telefono=$('#telefono').val();
//         var direccion=$('#direccion').val();
//         var estado=$('#estado').val();
        


//         $.post('<?php echo e(route('postInsertCooperativa')); ?>',{nombre:nombre,correo:correo,telefono:telefono,direccion:direccion,estado:estado},function(data){

//             console.log(data);
//               $('#id_cooperativa').append($('<option/>',{
//                 value:data.id_cooperativa,
//                 text:data.nombre
//             }))
//         })

//        })
// //......................................//
//         $('#add-more-horario').on('click',function(){
//         $('#horario-create').modal();

//        })

        
//    $('.btn-save-horario').on('click',function(){
//         var fecha_horario=$('#fecha_horario').val();
//         var hora=$('#hora').val();
//         var id_origen_destino=$('#id_origen_destino').val();
  
        


//         $.post('<?php echo e(route('postInsertHorario')); ?>',{fecha_horario:fecha_horario,hora:hora,id_origen_destino:id_origen_destino},function(data){

//             console.log(data);
//               $('#id_horario').append($('<option/>',{
//                 value:data.id_horario,
//                 text:data.fecha_horario+data.hora
//             }))

//         })
//     })

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>