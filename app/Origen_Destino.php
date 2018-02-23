<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origen_Destino extends Model
{
    protected $table='origen_destino';
    protected $primaryKey='id_origen_destino';
    protected $fillable=['origen','destino','precio','stock','condicion'];
    protected $hidden=['created_at','updated_at'];


    public function viajes(){
        return $this->hasMany('App\viajes','id_viaje');
    }

   

    // public function cooperativas(){

    //    return $this->hasManyThrough('App\Cooperativa','App\Viaje','id_origen_destino','id_viaje','id_origen_destino','id_viaje');
    // }
}
