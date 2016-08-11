<?php

use Illuminate\Database\Seeder;

class ConsultancySchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		$num=1;
    		for ($i=0; $i < 25; $i++) { 
    			try {
    		        factory(App\ConsultancySchool::class)->create();
    			} catch (Exception $e) {
    				echo "Exception $num\n";
    				$num++;
    			}
    		}
    }
}
