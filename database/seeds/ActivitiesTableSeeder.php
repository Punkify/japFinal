<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$num=1;
    	for ($i=0; $i < 50; $i++) { 
    		try {
		        factory(App\Activity::class)->create();
    		} catch (Exception $e) {
				echo "Exception $num\n";
				$num++;
    		}
    	}
    }
}
