<?php

use Illuminate\Database\Seeder;
use ccservice\entities\Servicestate;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ServicestatesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "Solicitado",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "Por refinar",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "En espera",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "En proceso",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "Facturado",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "Terminado",
        ]);
        Servicestate::create([
        	
        	//"id" => "1",
        	"name" => "Reprogramado",
        ]);

    }

}