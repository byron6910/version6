@extends('template.admin')

@section('content')
@include('reserva.test.user')
@include('reserva.test.viaje')
@include('reserva.test.cooperativa')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-heading">
                Reserva
          

            <form class="form-horizontal" id="frm-create-reserva">
                <div class="panel panel-default">
                    <div class="form-group">
                         <div class="col-sm-2">

                          <label for="estado">Estado:</label>
                                <select name="estado" class="form-control">
                                    
                                    <option value="0"> No Disponible</option>
                                    <option value="1 "> Disponible</option>


                                </select>
                        </div>

                           {{-------------------------}}

                          <div class="col-sm-3">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" class="form-control" placeholder="Escriba Cantidad" value="{{old('$stock')}}"  name="cantidad">
                        </div>

                           {{-------------------------}}
                         <div class="col-sm-3">
                            <label for="asiento">Asiento:</label>
                            <input type="number" class="form-control" placeholder="Escriba Asiento" value="{{old('$asiento')}}"  name="asiento">
                        </div>

                           {{-------------------------}}
                        <div class="col-sm-3">
                            <label for="id"> Usuario:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id" id="id" data-live-search="true">
                                    @foreach($users as $user)
                                    <option  value="{{$user->id}}"> {{$user->name}}
                                        
                                    </option>
                                    @endforeach
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-user"></span>
                                    
                                </div>
                            </div>
                        </div>
                        {{-------------------------}}
                        <div class="col-sm-3">
                            <label for="id_viaje"> Viaje:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id_viaje" id="id_viaje" data-live-search="true">
                                      @foreach($viajes as $viaje)
                                    <option value="{{$viaje->id_viaje}}"> {{$viaje->fecha_horario}} - {{$viaje->hora}} / {{$viaje->origen_destino->origen}}-{{$viaje->origen_destino->destino}}
                                    </option>

                                    @endforeach
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-viaje"></span>
                                    
                                </div>
                            </div>
                        </div>


     {{-------------------------}}
                        <div class="col-sm-3">
                            <label for="id_cooperativa"> Cooperativa:</label>
                            <div class="input-group">
                                
                                <select class="form-control selectpicker" name="id_cooperativa" id="id_cooperativa" data-live-search="true">
                                      @foreach($cooperativas as $cooperativa)
                                    <option  value="{{$cooperativa->id_cooperativa}}"> {{$cooperativa->nombre}}
                                    </option>

                                    @endforeach
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-cooperativa"></span>
                                    
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
                    </div>
                
            </form>
          </section>
        </div>

    
    </div>
@endsection

@section('scripts')
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

        $.post('{{route('postInsertUser')}}',{name:name,email:email,password:password,country_code:country_code,phone_number:phone_number,ciudad:ciudad,calle:calle,postal:postal,tipo:tipo,foto:foto},function(data){
            console.log(data);
            $('#id').append($('<option/>',{
                value:data.id,
                text:data.name
            }))

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


       $('#add-more-viaje').on('click',function(){

     //   var viaje=$('#frm-create-viaje').val();
        
        $('#viaje-create').modal();

       })

       $('.btn-save-viaje').on('click',function(){

        var estado=$('#estado').val();
        var fecha_horario=$('#fecha_horario').val();
        var hora=$('#hora').val();
        var id_origen_destino=$('#id_origen_destino').val();


         $.post('{{route('postInsertViaje')}}',{estado:estado,fecha_horario:fecha_horario,hora:hora,id_origen_destino:id_origen_destino},function(data){
            console.log(data);
             $('#id_viaje').append($('<option/>',{
                value:data.id_viaje,
                text:data.fecha_horario+data.hora
            }))


        })


       })

       //*****************************//

   $('#add-more-cooperativa').on('click',function(){
        $('#cooperativa-create').modal();

       })


       $('.btn-save-cooperativa').on('click',function(){
        var nombre=$('#nombre').val();
        var correo=$('#correo').val();
        var telefono=$('#telefono').val();
        var direccion=$('#direccion').val();
        var activo=$('#activo').val();
        


        $.post('{{route('postInsertCooperativa')}}',{nombre:nombre,correo:correo,telefono:telefono,direccion:direccion,activo:activo},function(data){

            console.log(data);
              $('#id_cooperativa').append($('<option/>',{
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

 
    </script>
@endsection