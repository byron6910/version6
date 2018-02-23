<?php

use Illuminate\Database\Seeder;

use App\Reserva;
use App\Cliente;
use App\Viaje;
use App\User;
use App\Cooperativa;


use Faker\Factory as Faker;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $faker=Faker::create();
    
        $cantidad1=User::all()->count();

        $cantidad2=Viaje::all()->count();
        $cantidad3=Cooperativa::all()->count();
        
        
     
        for($k=0;$k<$cantidad1;$k++){
                
                for($j=0;$j<$cantidad2;$j++){
                      for($i=0;$i<$cantidad3;$j++){

            Reserva::create([

               // 'ci_conductor'=>$faker->randomNumber(9,false),
                'fecha_reserva'=>$faker->date(),
                'estado'=>$faker->boolean(),
                'hora_reserva'=>$faker->time(),
                'cantidad'=>$faker->numberBetween(1,43),
                'asiento'=>$faker->numberBetween(1,43),

              
                'id'=>$faker->numberBetween(1,$cantidad1),
                'id_viaje'=>$faker->numberBetween(1,$cantidad2),
                'id_cooperativa'=>$faker->numberBetween(1,$cantidad3),


            ]);
    
        }
    }
        
        }
    }
}
