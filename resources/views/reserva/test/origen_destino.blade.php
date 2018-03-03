<div class="modal fade" id="origen-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X </button>
				<h4 class="modal-title"> Cooperativa</h4>
			</div>
			<div class="modal-body">
				<div class="row">
						   <div class="col-sm-8">
				                <label for="origen">Origen:</label>
				                <input type="text" class="form-control" placeholder="Escriba Origen" value="{{old('origen')}}" id="origen" name="origen">

				            </div>

				            <div class="col-sm-8">
				                <label for="destino">Destino:</label>
				                <input type="text" class="form-control" placeholder="Escriba Destino" value="{{old('destino')}}" name="destino" id="destino">

				            </div>


				            <div class="col-sm-8">
				                <label for="precio">Precio:</label>
				                <input type="number" class="form-control" placeholder="Escriba Precio" value="{{old('precio')}}" name="precio" id="precio">

				            </div>

				            <div class="col-sm-8">
				                <label for="cantidad">Stock:</label>
				                <input type="number" class="form-control" placeholder="Escriba Stock" value="{{old('$stock')}}"  name="stock" id="stock">

				            </div>


				             <div class="col-sm-8">
				                <label for="condicion">Condicion:</label>
				                
				                <select id="condicion" name="condicion" class="form-control">
				                   
				                            <option value="1"> Disponible </option>
				                            <option value="0"> No Disponible</option>
				                </select>
               
           					 </div>
					
       		
				</div>
			</div>
	

		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			<button class="btn btn-success btn-save-origen" type="button" >Save</button>
		</div>
		</div>
	</div>

</div>