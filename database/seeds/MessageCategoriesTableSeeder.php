<?php

use Illuminate\Database\Seeder;

class MessageCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message_categories')->insert(
        	[
        		['category' => 'draft'],
        		['category' => 'junk'],
        		['category' => 'trash'],
        	]
        );
    }
}
