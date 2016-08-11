<?php

use App\Consultancy;
use App\User;
use Illuminate\Database\Seeder;

class ConsultanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Consultancy::class, 30)->create();

        $consultancies = Consultancy::all()->all();
        foreach ($consultancies as $consultancy) {
            // $consultancy = Consultancy::find($consultancy->id);
            $user = User::find($consultancy->id);
            $consultancy->user()->save($user);
        }
    }
}
