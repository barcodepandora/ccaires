<?php

use Illuminate\Database\Seeder;
use ccservice\entities\Servicetype;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ServicetypesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Servicetype::create([
        	
        	//"id" => "1",
        	"name" => "Instalacion",
        ]);
        Servicetype::create([
        	
        	//"id" => "1",
        	"name" => "Mantenimiento",
        ]);
        Servicetype::create([
        	
        	//"id" => "1",
        	"name" => "Reparacion",
        ]);

    }

}