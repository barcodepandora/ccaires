<?php

use Illuminate\Database\Seeder;
use ccservice\entities\Mapstate;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MapstatesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 1,
        	"to" => 2,
        ]);
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 1,
        	"to" => 3,
        ]);        
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 2,
        	"to" => 3,
        ]);
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 3,
        	"to" => 4,
        ]);
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 4,
        	"to" => 5,
        ]);
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 4,
        	"to" => 7,
        ]);
        Mapstate::create([
        	
        	//"id" => "1",
        	"from" => 7,
        	"to" => 4,
        ]);        
    }

}