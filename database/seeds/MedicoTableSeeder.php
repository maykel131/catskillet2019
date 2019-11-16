<?php

use Illuminate\Database\Seeder;
use App\Models\Medico;
use App\Models\Especialide;
use Faker\Factory as Faker;

class MedicoTableSeeder extends Seeder
{ 
    public function run()
    {   
       $faker= Faker::create(); 
       $tamanho=Especialide::count();

        for ($i=1; $i <= $tamanho ; $i++) { 
            Medico::create([
                'id_especialidade'=> $i,
                'nome'=> $faker->name,
                'celular'=> '(85)'.rand(0,999999999),
                'descricao'=> 'Maecenas metus ante, vestibulum ut justo ut, pulvinar molestie mauris. Nunc varius sapien at metus facilisis sollicitudin. Fusce scelerisque eros rhoncus lorem vehicula vehicula.',
                'nome_foto'=>'doutor'.$i.'.jpg',
                'nome_foto_criado'=>'doutor'.$i.'.jpg',
                'rota_foto'=>'medicos/',
            ]);
        }
    }
}
