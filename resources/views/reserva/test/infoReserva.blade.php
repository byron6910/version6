<style type="text/css">
	.academic-detail{
		white-space: normal;
		width: 300px;
	}
	#table-class-info{
		width:100%; 
	}

	table tbody >tr >td{
		vertical-align: middle;
	}

</style>
<table class="table table-hover table-striped table-condensed" id="table-reserva-info">
	<thead>
		<tr>
			<th> ID Reserva:</th>
			<th> Usuario:</th>
			<th> Fecha Reserva:</th>
			<th> Hora Reserva:</th>
			<th> Viaje:</th>
			<th> Cantidad:</th>
			<th> Asiento:</th>
			<th> Informacion:</th>
			<th> Action:</th>



		</tr>

	</thead>
	<tbody>
		@foreach($reservas as $reserva)
		<tr>
			<td>{{$reserva->id_reserva}}</td>
			<td>{{$reserva->user->name}}</td>
			<td>{{$reserva->fecha_reserva}}</td>
			<td>{{$reserva->hora_reserva}}</td>
			<td>{{$reserva->id_viaje}}</td>
			<td>{{$reserva->cantidad}}</td>
			<td>{{$reserva->asiento}}</td>
			<td class="academic-detail">
				<a href="#" data-id="{{$reserva->id_reserva}}" id="reserva-edit">
					
					Viaje:{{$reserva->id_viaje}}/ User:{{$reserva->user->name}}/ Fecha:{{$reserva->fecha_reserva}} /hora:{{$reserva->hora}} / cantidad:{{$reserva->cantidad}} / asiento:{{$reserva->asiento}}
				</a>
			</td>
			<td style="vertical-align: middle;width: 50px;">
				<button value="{{$reserva->id_reserva}}" class="btn btn-danger btn-sm delete-reserva">Borrar</button>
			</td>


		</tr>
		@endforeach

	</tbody>
</table>