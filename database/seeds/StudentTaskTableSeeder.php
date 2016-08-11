<?php

use Illuminate\Database\Seeder;

class StudentTaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		$num=1;
    		for ($i=0; $i < 31; $i++) { 
    			try {
    		        factory(App\StudentTask::class)->create();
    			} catch (Exception $e) {
    				echo "Exception $num\n";
    				$num++;
    			}
    		}
    }
}
