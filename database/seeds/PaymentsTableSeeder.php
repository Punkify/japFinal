<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		$num=1;
    		for ($i=0; $i < 51; $i++) { 
    			try {
    		        factory(App\Payment::class)->create();
    			} catch (Exception $e) {
    				echo "Exception $num\n";
    				$num++;
    			}
    		}
    }
}
