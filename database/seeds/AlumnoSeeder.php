<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i < 50; $i++) {
           DB::table('alumno')->insert([
               'nombre' => $faker->FirstNameMale,
               'email' => $faker->email,
               'password' => $faker->randomDigit,
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s'),
           ]);
        }
        /*
        DB::table('alumno')->insert([
            'nombre' => 'Pedro Morales',
            'email' => 'pmmail@gmail.com',
            'password' => 'micontraseña',
        ]);
        */
    }
}
