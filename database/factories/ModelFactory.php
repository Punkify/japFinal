<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->unique()->username,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'role' => 'none',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Email::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->randomElement(App\User::all()->lists('id')->toArray()),
        'city' => $faker->city,
        'street' => $faker->streetName,
        'zip' => $faker->postCode,
    ];
});

$factory->define(App\Consultancy::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->randomElement(App\User::all()->lists('id')->toArray()),
        'country' => $faker->country,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'zip' => $faker->postCode,
    ];
});

$factory->define(App\Registration::class, function (Faker\Generator $faker) {
    return [
        'registrar_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'registered_user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->randomElement(App\User::all()->lists('id')->toArray()),
        'age' => $faker->numberBetween(16,50),
        'country' => $faker->country,
        'city' => $faker->city,
        'course' => "Bsc. Computing",
        'consultancy_id' => $faker->randomElement(App\Consultancy::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\ConsultancySchool::class, function (Faker\Generator $faker) {
    return [
        'consultancy_id' => $faker->unique(true)->randomElement(App\Consultancy::all()->lists('id')->toArray()),
        'school_id' => $faker->randomElement(App\School::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\Payment::class, function (Faker\Generator $faker) {
    return [
        'school_id' => $faker->randomElement(App\School::all()->lists('id')->toArray()),
        'amount_paid' => $faker->numberBetween(15000, 100000),
        'amount_used' => $faker->numberBetween(999, 14999),
    ];
});

$factory->define(App\Activity::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->unique()->randomElement(App\User::all()->lists('id')->toArray()),
        'activity' => 'logged in',
    ];
});

$factory->define(App\Session::class, function (Faker\Generator $faker) {
    return [
        'start_date' => $faker->date("-2 years", 'Y-m-D'),
        'end_date' => $faker->date('now', 'Y-m-D'),
        'is_archived' => $faker->boolean,
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText(12),
        'description' => $faker->realText,
    ];
});

$factory->define(App\SchoolSession::class, function (Faker\Generator $faker) {
    return [
        'school_id' => $faker->randomElement(App\School::all()->lists('id')->toArray()),
        'session_id' => $faker->unique()->randomElement(App\Session::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\SchoolTask::class, function (Faker\Generator $faker) {
   return [
            'school_session_id' => $faker->randomElement(App\SchoolSession::all()->lists('id')->toArray()),
            'task_id' => $faker->unique(true)->randomElement(App\Task::all()->lists('id')->toArray()),
            'description' => $faker->realText,
        ];
});

$factory->define(App\Application::class, function (Faker\Generator $faker) {
    return [
            'school_session_id' => $faker->randomElement(App\SchoolSession::all()->lists('id')->toArray()),
            'student_id' => $faker->unique(true)->randomElement(App\Student::all()->lists('id')->toArray()),
        ];
});

$factory->define(App\Document::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'title' => $faker->realText(10),
        'file_path' => "PATH TO THE FILE",
    ];
});

$factory->define(App\StudentTask::class, function (Faker\Generator $faker) {
    return [
        'application_id' => $faker->unique()->randomElement(App\Application::all()->lists('id')->toArray()),
        'school_task_id' => $faker->randomElement(App\SchoolTask::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\DocumentStudent::class, function (Faker\Generator $faker) {
    return [
        'document_id' => $faker->unique()->randomElement(App\Document::all()->lists('id')->toArray()),
        'student_task_id' => $faker->randomElement(App\StudentTask::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'document_student_id' => $faker->randomElement(App\DocumentStudent::all()->lists('id')->toArray()),
    ];
});

$factory->define(App\Message::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'message' => $faker->realText()
    ];
});

$factory->define(App\MessageMapping::class, function (Faker\Generator $faker) {
    return [
        'message_id' => $faker->randomElement(App\Message::all()->lists('id')->toArray()),
        'user_id' => $faker->randomElement(App\User::all()->lists('id')->toArray()),
        'category_id' => $faker->randomElement(App\MessageCategory::all()->lists('id')->toArray()),
        'is_read' => $faker->boolean(),
        'is_starred' => $faker->boolean()
    ];
});

$factory->define(App\SchoolStudent::class, function(Faker\Generator $faker) {
    return [
        'school_id' => $faker->randomElement(App\School::all()->lists('id')->toArray()),
        'student_id' => $faker->unique()->randomElement(App\Student::all()->lists('id')->toArray()),
    ];
});
