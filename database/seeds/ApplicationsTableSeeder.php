<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$num=1;
    	for ($i=0; $i < 30; $i++) { 
    		try {
		        factory(App\Application::class)->create();
    		} catch (Exception $e) {
				echo "Exception $num\n";
				$num++;
    		}
    	}
        
    }
}
