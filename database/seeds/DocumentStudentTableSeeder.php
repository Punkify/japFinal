<?php

use Illuminate\Database\Seeder;

class DocumentStudentTableSeeder extends Seeder
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
    			        factory(App\DocumentStudent::class)->create();
    	    		} catch (Exception $e) {
    					echo "Exception $num\n";
    					$num++;
    	    		}
    	    	}
    }
}
