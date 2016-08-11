<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MessageCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(ConsultanciesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ConsultancySchoolTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(SchoolSessionTableSeeder::class);
        $this->call(SchoolTaskTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(StudentTaskTableSeeder::class);
        $this->call(DocumentStudentTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(MessageMappingsTableSeeder::class);
    }
}
