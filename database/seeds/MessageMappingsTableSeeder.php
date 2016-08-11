<?php

use Illuminate\Database\Seeder;

class MessageMappingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$num=1;
        	for ($i=0; $i < 40; $i++) { 
        		try {
        	        factory(App\MessageMapping::class)->create();
        		} catch (Exception $e) {
        			echo "Exception $num\n";
        			$num++;
        		}
        	}
    }
}
