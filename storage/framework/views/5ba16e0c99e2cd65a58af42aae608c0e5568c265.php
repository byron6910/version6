<?php $__env->startSection('content'); ?>
<?php echo $__env->make('reserva.test.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('reserva.test.viaje', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-heading">
                Reserva
          

            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="form-group">
                         <div class="col-sm-2">

                          <label for="estado">Estado:</label>
                                <select name="estado" class="form-control">
                                    
                                    <option value="0"> No Disponible</option>
                                    <option value="1 "> Disponible</option>


                                </select>
                        </div>

                           

                          <div class="col-sm-3">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" class="form-control" placeholder="Escriba Cantidad" value="<?php echo e(old('$stock')); ?>"  name="cantidad">
                        </div>

                           
                         <div class="col-sm-3">
                            <label for="asiento">Asiento:</label>
                            <input type="number" class="form-control" placeholder="Escriba Asiento" value="<?php echo e(old('$asiento')); ?>"  name="asiento">
                        </div>

                           
                        <div class="col-sm-3">
                            <label for="id"> Usuario:</label>
                            <div class="input-group">
                                
                                <select class="form-control" name="id" id="id">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name=id value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?>

                                        
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-user"></span>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <label for="id_viaje"> Viaje:</label>
                            <div class="input-group">
                                
                                <select class="form-control" name="id_viaje" id="id_viaje">
                                      <?php $__currentLoopData = $viajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name=id_viaje value="<?php echo e($viaje->id_viaje); ?>"> <?php echo e($viaje->horario->fecha_horario); ?> - <?php echo e($viaje->horario->hora); ?> - <?php echo e($viaje->cooperativa->nombre); ?> / <?php echo e($viaje->horario->id_origen_destino); ?>

                                    </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-viaje"></span>
                                    
                                </div>
                            </div>
                        </div>

                         <div class="col-sm-3">
                            <label for="fecha_reserva"> Fecha:</label>
                            <div class="input-group">
                                <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control">
                                
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    
                                </div>
                            </div>
                        </div>

                             <div class="col-sm-3">
                            <label for="hora_reserva"> Fecha:</label>
                            <div class="input-group">
                                <input type="time" name="hora_reserva" id="hora_reserva" class="form-control">
                                
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default btn-sm"> Crear Reserva </button>
                    </div>
                
            </form>
          </section>
        </div>

    
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
       // $("#fecha_reserva").datepicker();

       $('#add-more-user').on('click',function(){
        $('#user-create').modal();

       })

       $('.btn-save-user').on('click',function(){
        var name=$('#name').val();
        var email=$('#email').val();
        var password=$('#password').val();
        var country_code=$('#country_code').val();
        var phone_number=$('#phone_number').val();
        var ciudad=$('#ciudad').val();
        var calle=$('#calle').val();
        var postal=$('#postal').val();
        var tipo=$('#tipo option').val();
        var foto=$('#foto').val();

        //{[name:name,email:email,password:password,country_code:country_code,phone_number:phone_number,ciudad:ciudad,calle:calle,postal:postal,tipo:tipo,foto:foto]}

        $.post('<?php echo e(route('postInsertUser')); ?>',{name:name,email:email,password:password,country_code:country_code,phone_number:phone_number,ciudad:ciudad,calle:calle,postal:postal,tipo:tipo,foto:foto},function(data){
            console.log(data);
            $('#id').append($('<option/>',{
                value:data.id,
                text:data.name
            }))
        })

       })

       $('#add-more-viaje').on('click',function(){

        var viaje=$('#frm-create-viaje').val();
        
        $('#viaje-create').modal();

       })

       $('.btn-save-viaje').on('click',function(){

        var estado=$('#estado').val();
        var id_cooperativa=$('#id_cooperativa').val();
        var id_horario=$('#id_horario').val();

         $.post('<?php echo e(route('postInsertViaje')); ?>',{estado:estado,id_cooperativa:id_cooperativa,id_horario:id_horario},function(data){
            console.log(data);
             $('#id_viaje').append($('<option/>',{
                value:data.id_viaje,
                text:data.id_horario
            }))


        })


       })

       //*****************************//



 
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>