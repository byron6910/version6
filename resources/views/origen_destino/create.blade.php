@extends('template.admin')
@section('content')
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Origen Destino </h3>
            @include('Mensajes.error')

            {{!!Form::open(['url'=>'origen_destino','method'=>'POST','autocomplete'=>'off'])!!}}
            {{Form::token()}}

            
            <div class="form-group">
                <label for="origen">Origen:</label>
                <input type="text" class="form-control" placeholder="Escriba Origen" value="{{old('origen')}}" name="origen">

            </div>

            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" class="form-control" placeholder="Escriba Destino" value="{{old('destino')}}" name="destino">

            </div>


            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" placeholder="Escriba Precio" value="{{old('precio')}}" name="precio">

            </div>

            <div class="form-group">
                <label for="cantidad">Stock:</label>
                <input type="number" class="form-control" placeholder="Escriba Stock" value="{{old('$stock')}}"  name="stock">

            </div>


             <div class="form-group">
                <label for="condicion">Condicion:</label>
                
                <select name="condicion" class="form-control">
                   
                            <option value="1"> Disponible </option>
                            <option value="0"> No Disponible</option>
                </select>
               
            </div>
       

            
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@endsection