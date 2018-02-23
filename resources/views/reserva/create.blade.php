@extends('template.admin')
@section('content')
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Horario </h3>
            @include('Mensajes.error')
         </div>
    </div>

            {{!!Form::open(['url'=>'reserva','method'=>'POST','autocomplete'=>'off'])!!}}
            {{Form::token()}}
    <div class="row">
      
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha_reserva">Fecha Reserva:</label>
                <input type="date" class="form-control" placeholder="Escriba Fecha" name="fecha_reserva"  required value="{{old('fecha_reserva')}}">

            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" placeholder="Escriba Hora" name="hora_reserva" required value="{{old('hora_reserva')}}")}}>

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
                    <label for="id">Nombre:</label>
                    <select name="id" class="form-control selectpicker" data-live-search="true">
                        @foreach($users as $user)
                        <option value="{{$user->id}} "> {{$user->name.' '. $user->id}}</option>

                        @endforeach
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
            
            

            {!!Form::close()!!}
       
@endsection