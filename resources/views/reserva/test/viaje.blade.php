<div class="modal fade" id="viaje-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Viaje</h4>
			</div>
		
			<div class="modal-body">
				<div class="row">
						<div class="col-sm-12">

                          <label for="estado">Estado:</label>
                                <select id="estado" name="estado" class="form-control">
                                    
                                    <option value="0"> No Disponible</option>
                                    <option value="1 "> Disponible</option>


                                </select>
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

                        <div class="col-sm-12">

                        <label for="id_origen_destino">Origen Destino:</label>



                                <select name="id_origen_destino" id="id_origen_destino" class="form-control selectpicker" data-live-search="true">
                                	@foreach($origenes as $origen)
                                	<option value="{{$origen->id_origen_destino}}"> {{$origen->origen}}- {{$origen->destino}}
                                		
                                	</option>
                                	@endforeach

                                </select>
                        </div>


   						<div class="col-sm-12">
                        <label for="id_cooperativa">Cooperativa:</label>



                                <select name="id_cooperativa" id="id_cooperativa" class="form-control selectpicker" data-live-search="true">
                                	@foreach($cooperativas as $cooperativa)
                                	<option value="{{$cooperativa->id_cooperativa}}"> {{$cooperativa->nombre}}
                                		
                                	</option>
                                	@endforeach

                                </select>
                        </div>



				</div>
			</div>
	

		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-viaje" type="button"  >Save</button>
		</div>
		
		</div>
	</div>

</div>