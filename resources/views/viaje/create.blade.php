@extends('template.admin')
@section('content')
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Viaje </h3>
            @include('Mensajes.error')
         </div>
    </div>

            {{!!Form::open(['url'=>'viaje','method'=>'POST','autocomplete'=>'off'])!!}}
            {{Form::token()}}
    <div class="row">
      


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
                    <label for="id_origen_destino">Origen Destino:</label>
                    <select name="id_origen_destino" class="form-control selectpicker" data-live-search="true">
                        @foreach($origenes as $origen)
                        <option value="{{$origen->id_origen_destino}} "> {{$origen->origen.'-'.$origen->destino}}</option>

                        @endforeach
                    </select>
                </div>
        </div>
 <div class="col-sm-3">
                            <label for="fecha_horario"> Fecha:</label>
                            <div class="input-group">
                                <input type="date" name="fecha_horario" id="fecha_horario" class="form-control">
                                
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    
                                </div>
                            </div>
                        </div>

                         <div class="col-sm-3">
                            <label for="hora">Hora:</label>
                            <input type="time" class="form-control" placeholder="Escriba Hora" value="{{old('$hora')}}"  name="hora" id="hora">
                        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

        </div>

    </div>
            
            

            {!!Form::close()!!}
       
@endsection