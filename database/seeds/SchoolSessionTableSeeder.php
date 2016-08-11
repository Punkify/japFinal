<?php

use Illuminate\Database\Seeder;

class SchoolSessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$num=1;
        	for ($i=0; $i < 41; $i++) { 
        		try {
        	        factory(App\SchoolSession::class)->create();
        		} catch (Exception $e) {
        			echo "Exception $num\n";
        			$num++;
        		}
        	}
    }
}
