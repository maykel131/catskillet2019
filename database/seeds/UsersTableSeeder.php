<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombres'         => 'Maykel Abiecer',
            'apellidos'       => 'Trejo Cordero',
            'telefono'        => '85987096251',
            'tipo_documento'  => '1',
            'numero_documento' => '21459503',
            'email' => 'trejomaykel@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
