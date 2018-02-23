<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    
    protected $table='pago';
    protected $primaryKey='id_pago';
    protected $fillable=['fecha_emision','precio','fecha_pago','id_reserva','tipo'];
    protected $hidden=['created_at','updated_at'];

    public function reserva(){
        $this->hasOne('App\Reserva','id_reserva');
    }
}
