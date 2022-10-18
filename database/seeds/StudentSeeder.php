<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++){
            $newStudent = new Student();
            $newStudent->name=$faker->firstName();
            $newStudent->surname=$faker->lastName();
            $newStudent->date_of_birth=$faker->date();
            $newStudent->fiscal_code=strtoupper($faker->unique->bothify('??????##?##?###?'));
            $newStudent->enrolment_date=$faker->date();
            $newStudent->registration_number=$faker->unique->randomNumber(5,true);
            $newStudent->email=$faker->unique->email();

            $newStudent->save();
            

        }
    }
}
