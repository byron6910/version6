<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reserva extends Model
{
    protected $table='reserva';
    protected $primaryKey='id_reserva';
    protected $fillable=['fecha_reserva','estado','hora_reserva','id'];
    protected $hidden=['created_at','updated_at'];
    

   

    public function user(){
        return  $this->belongsTo('App\User','id');
    }

     public function cooperativa(){
        return  $this->belongsTo('App\Cooperativa','id_cooperativa');
    }

    public function viaje(){
        return  $this->belongsTo('App\Viaje','id_viaje');
    }


    public function pago(){
        return  $this->belongsTo('App\Pago','id_pago');
    }


    // public function cooperativas(){

    //    return $this->hasManyThrough('App\Cooperativa','App\Viaje','id_origen_destino','id_viaje','id_origen_destino','id_viaje');
    // }




}
