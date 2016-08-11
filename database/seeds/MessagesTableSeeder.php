<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
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
        	        factory(App\Message::class)->create();
        		} catch (Exception $e) {
        			echo "Exception $num\n";
        			$num++;
        		}
        	}
    }
}
