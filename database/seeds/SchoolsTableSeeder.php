<?php

use App\School;
use App\User;
use Illuminate\Database\Seeder;
class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(School::class, 30)->create();
		
		$schools = School::all()->all();
		foreach ($schools as $school) {
			// $school = School::find($school->id);
			$user = User::find($school->id);
			$school->user()->save($user);
		}
    }
}
