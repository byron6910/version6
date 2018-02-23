<?php

use Illuminate\Database\Seeder;

use App\Origen_Destino;
use App\Viaje;



use Faker\Factory as Faker;
use App\Cooperativa;


class ViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $cantidad=Origen_Destino::all()->count();
       // $cantidad1=Cooperativa::all()->count();
        

        for($i=0;$i<$cantidad;$i++){

          //  for($j=0;$j<$cantidad1;$j++){

            Viaje::create([
// para relacionar dejar que sea autoincrementalble
              //  'id_bus'=>$faker->randomNumber(9,false),
                'estado'=>$faker->boolean(),

                     'fecha_horario'=>$faker->date(),
                'hora'=>$faker->time(),
                'id_origen_destino'=>$faker->numberBetween(1,$cantidad),
              
                
               

            //    'id_cooperativa'=>$faker->numberBetween(1,$cantidad1)
                

            ]);
   // }
    }
}
}
