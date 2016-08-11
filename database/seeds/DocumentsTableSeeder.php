<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$num=1;
        	for ($i=0; $i < 60; $i++) { 
        		try {
        	        factory(App\Document::class)->create();
        		} catch (Exception $e) {
        			echo "Exception $num\n";
        			$num++;
        		}
        	}
    }
}
