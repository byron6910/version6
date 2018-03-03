<?php $__env->startSection('content'); ?>
<?php echo $__env->make('reserva.test.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('reserva.test.cooperativa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('reserva.test.origen_destino', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('reserva.test.viaje', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('reserva.test.bus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-heading">
                Reserva
          

            <form action="<?php echo e(route('createReserva')); ?>" class="form-horizontal" id="frm-create-reserva" method="POST">
                <input type="hidden" name="active" id="active" value="1">
                <input type="hidden" name="id_reserva" id="id_reserva" >


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
                                
                                <select class="form-control selectpicker" name="id" id="id" data-live-search="true">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?>

                                        
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-user"></span>
                                    
                                </div>
                            </div>
                        </div>
                      


                           <div class="col-sm-3">
                            <label for="id_origen_destino"> Origen_destino:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id_origen_destino" id="id_origen_destino" data-live-search="true">
                                      <?php $__currentLoopData = $viajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($viaje->id_origen_destino); ?>"> <?php echo e($viaje->origen_destino->origen); ?>-<?php echo e($viaje->origen_destino->destino); ?>

                                    </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-origen"></span>
                                    
                                </div>
                            </div>
                        </div>

                          
                        <div class="col-sm-3">
                            <label for="id_viaje"> Viaje:</label>
                            <div class="input-group">
                                
                                <select class="form-control " name="id_viaje" id="id_viaje" >
                               <option>
                                   
                               </option>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-viaje"></span>
                                    
                                </div>
                            </div>
                        </div>



     
                        <div class="col-sm-3">
                            <label for="id_cooperativa"> Cooperativa:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id_cooperativa" id="id_cooperativa2" data-live-search="true">
                                      <?php $__currentLoopData = $cooperativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($cooperativa->id_cooperativa); ?>"> <?php echo e($cooperativa->nombre); ?>

                                    </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-cooperativa"></span>
                                    
                                </div>
                            </div>
                        </div>


                            
                        <div class="col-sm-3">
                            <label for="id_bus"> Bus:</label>
                            <div class="input-group">
                                
                                <select class="form-control " name="id_bus" id="id_bus" >
                                      
                               
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-bus"></span>
                                    
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
                            <label for="hora_reserva"> Hora:</label>
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
                        <button type="button" class="btn btn-default btn-sm btn-update-reserva"> Actualizar Reserva </button>

                    </div>
                
            </form>

            <div class="panel panel-default">
                <div class="panel-heading">
                Informacion de las Reservas 
                </div>
                <div class="panel-body" id="add-reserva-info">
                    
                </div>

                
            </div>
          </section>
        </div>

    
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
       // $("#fecha_reserva").datepicker();

       showReservaInfo($('id_reserva').val());

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
            $('#frm-create-reserva #id').append($('<option/>',{

                value: data.id,
                text: data.name
              

            }))
            //$('#id').html('<option value="data.id">data.name</option>')

           

            $('#name').val("");
            $('#email').val("");
            $('#password').val("");
            $('#country_code').val("");
            $('#phone_number').val("");
            $('#ciudad').val("");
            $('#calle').val("");
            $('#postal').val("");
            $('#tipo option').val("");
           $('#foto').val("");


        })

       })
//******************Viaje*****************

    $('#frm-create-reserva #id_origen_destino').on('change',function(e){
        var id_origen_destino=$(this).val();
        var viaje=$('#frm-create-reserva #id_viaje')
        $(viaje).empty();

        $.get('<?php echo e(route('getShowViaje')); ?>',{id_origen_destino:id_origen_destino},function(data){
            console.log(data);

            $.each(data,function(i,key){

          
                 $('#id_viaje').append($("<option/>",{
                value: key.id_viaje,
                text: key.fecha_horario+'/'+key.hora
                
           
            }))


            })


        })


    })

       $('#add-more-viaje').on('click',function(){

     //   var viaje=$('#frm-create-viaje').val();
        
        $('#viaje-create').modal();

       })

       $('.btn-save-viaje').on('click',function(){

        var estado=$('#estado').val();
        var fecha_horario=$('#fecha_horario').val();
        var hora=$('#hora').val();
        var id_origen_destino=$('#id_origen_destino').val();
        var id_cooperativa=$('#id_cooperativa').val();


         $.post('<?php echo e(route('postInsertViaje')); ?>',{estado:estado,fecha_horario:fecha_horario,hora:hora,id_origen_destino:id_origen_destino,id_cooperativa:id_cooperativa},function(data){
            console.log(data);


             $('#id_viaje').append($('<option/>',{
                value:data.id_viaje,
                text:data.fecha_horario+data.hora
            }))


        })


       })

       //***************************** Cooperativa***********************//

   $('#add-more-cooperativa').on('click',function(){
        $('#cooperativa-create').modal();

       })


       $('.btn-save-cooperativa').on('click',function(){
        var nombre=$('#nombre').val();
        var correo=$('#correo').val();
        var telefono=$('#telefono').val();
        var direccion=$('#direccion').val();
        var activo=$('#activo').val();
        


        $.post('<?php echo e(route('postInsertCooperativa')); ?>',{nombre:nombre,correo:correo,telefono:telefono,direccion:direccion,activo:activo},function(data){

            console.log(data);
              $('#id_cooperativa2').append($('<option/>',{
                value:data.id_cooperativa,
                text:data.nombre
            }))

              $('#nombre').val("");
              $('#correo').val("");
              $('#telefono').val("");
             $('#direccion').val("");
             $('#activo').val("");
        


        })

       })

       //***************************** Origen***********************//


   $('#add-more-origen').on('click',function(){
        $('#origen-create').modal();

       })


       $('.btn-save-origen').on('click',function(){
        var origen=$('#origen').val();
        var destino=$('#destino').val();
        var stock=$('#stock').val();
        var precio=$('#precio').val();
        var condicion=$('#condicion').val();
        


        $.post('<?php echo e(route('postInsertOrigenDestino')); ?>',{origen:origen,destino:destino,stock:stock,precio:precio,condicion:condicion},function(data){

            console.log(data);
              $('#id_origen_destino').append($('<option/>',{
                value:data.origen_destino,
                text:data.origen+'-'+data.destino
            }))

              $('#origen').val("");
              $('#destino').val("");
              $('#stock').val("");
             $('#precio').val("");
             $('#condicion').val("");
        


        })

     

       })

//******************Bus**********************//
 $('#add-more-bus').on('click',function(){

        var cooperativas=$('#id_cooperativa2 option');
        var cooperativa=$('#frm-bus-create').find('#id_cooperativa');
        $(cooperativa).empty();


        $.each(cooperativa,function(i,coop){
        $(cooperativa).append($('<option/>',{
                value:$(coop).val(),
                text:$(coop).text()
            }))

        })

        $('#bus-create').modal();

       })


 $('#frm-bus-create').on('submit',function(e){
    e.preventDefault();

    var data=$(this).serialize();
    var url=$(this).attr('action');
    $.post(url,data,function(data){

     console.log(data);
              $('#id_bus').append($('<option/>',{
                value:data.id_bus,
                text:data.id_bus


    }))
       
})
     $(this).trigger('reset');
})

//**************Reserva**********//

$('#frm-create-reserva').on('submit',function(e){
    e.preventDefault();
    var data=$(this).serialize();
    var url=$(this).attr('action');
    $.post(url,data,function(data){

        console.log(data);
        showReservaInfo($(data.id_reserva));

        
    })

$(this).trigger('reset');
})

function showReservaInfo(id_reserva){
    $.get('<?php echo e(route('showReservaInformation')); ?>',{id_reserva:id_reserva},function(data){

           $('#add-reserva-info').empty().append(data);
            MergeCommonRows($('#table-reserva-info'));

    })
}

$(document).on('click','#reserva-edit',function(data){
    var id_reserva=$(this).data('id_reserva');
   
    alert(id_reserva);
    // $.get('<?php echo e(route('editReserva')); ?>',{id_reserva:id_reserva},function(data){

    //        $('#id_viaje').val(data.id_viaje);
    //        $('#id_origen_destino').val(data.origen_destino);
    //        $('#id').val(data.id);
    //        $('#cantidad').val(data.cantidad);
    //        $('#asiento').val(data.asiento);
    //        $('#fecha_reserva').val(data.fecha_reserva);
    //        $('#hora_reserva').val(data.hora_reserva);
    //        $('#id_reserva').val(data.id_reserva);





    //     console.log(data);
    // })
})

$(document).on('click','.delete-reserva',function(e){
    id_reserva=$(this).val();
    $.post("<?php echo e(route('deleteReserva')); ?>",{id_reserva:id_reserva},function(data){
        showReservaInfo($(data.id_reserva));

    })
})


$('.btn-update-reserva').on('click',function(e){
    e.preventDefault();
    var data=$('#frm-create-reserva').serialize();
    $.post('<?php echo e(route('updateReservaInfo')); ?>',data,function(data){
        showReservaInfo(data.id_reserva);

    })
})


     
//****************Margem*//////////////

function MergeCommonRows(table){
var firsColumnBrakes=[];
    $.each(table.find('th'),function(i){
        var previous=null,
        cellToExtend=null,
        rowspan=1;
        table.find("td:nth-child("+i+")").each(function(index,e){
            var jthis=$(this),
            content=jthis.text();
            if(previous==content && content !== "" && $.inArray(index,firsColumnBrakes)=== -1){
                jthis.addClass('hidden');
                cellToExtend.attr('rowspan',(rowspan=rowspan+1));
            }else{
                if(i===1) firsColumnBrakes.push(index);
                rowspan=1;
                previous=content;
                cellToExtend=jthis;

            }
        });

    });
    $('td.hidden').remove();
}




 
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>