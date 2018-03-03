<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Viaje extends Model
{
    protected $table='viaje';
    protected $primaryKey='id_viaje';
    protected $fillable=['estado','fecha_horario','hora','id_origen_destino','id_cooperativa'];
    protected $hidden=['created_at','updated_at'];
    

  

  

    public function origen_destino(){
        return  $this->belongsTo('App\Origen_Destino','id_origen_destino');
    }

    public function reservas(){
        return $this->hasMany('App\Reserva','id_reserva');
    }

     public function cooperativa(){
        return  $this->belongsTo('App\Cooperativa','id_cooperativa');
    }



    
         
    
}
