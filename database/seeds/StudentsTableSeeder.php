<?php

use App\Student;
use App\User;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 100)->create();

        $students = Student::all()->all();
		foreach ($students as $student) {
			$user = User::find($student->id);
			$student->user()->save($user);
		}
    }
}
