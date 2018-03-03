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
		<?php $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($reserva->id_reserva); ?></td>
			<td><?php echo e($reserva->user->name); ?></td>
			<td><?php echo e($reserva->fecha_reserva); ?></td>
			<td><?php echo e($reserva->hora_reserva); ?></td>
			<td><?php echo e($reserva->id_viaje); ?></td>
			<td><?php echo e($reserva->cantidad); ?></td>
			<td><?php echo e($reserva->asiento); ?></td>
			<td class="academic-detail">
				<a href="#" data-id="<?php echo e($reserva->id_reserva); ?>" id="reserva-edit">
					
					Viaje:<?php echo e($reserva->id_viaje); ?>/ User:<?php echo e($reserva->user->name); ?>/ Fecha:<?php echo e($reserva->fecha_reserva); ?> /hora:<?php echo e($reserva->hora); ?> / cantidad:<?php echo e($reserva->cantidad); ?> / asiento:<?php echo e($reserva->asiento); ?>

				</a>
			</td>
			<td style="vertical-align: middle;width: 50px;">
				<button value="<?php echo e($reserva->id_reserva); ?>" class="btn btn-danger btn-sm delete-reserva">Borrar</button>
			</td>


		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</tbody>
</table>