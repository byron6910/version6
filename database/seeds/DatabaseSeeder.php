<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
           $this->call(OrigenDestinoSeeder::class);
           $this->call(UserTableSeeder::class);
           $this->call(CooperativaSeeder::class);
          $this->call(BusSeeder::class);
          
         //  $this->call(HorariosSeeder::class);
           $this->call(ViajeSeeder::class);
     
        
     
         $this->call(ReservaSeeder::class);
         
        
         

         
    }
}
