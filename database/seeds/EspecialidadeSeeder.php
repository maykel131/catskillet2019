<?php

use Illuminate\Database\Seeder;
use App\Models\Especialide;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialide::create([
            'nome_especialidade'=> 'Gastroenterologia',
            'descricao'=> 'São especialistas em tratar doenças ou alterações de todo o trato gastrointestinal, que vai da boca ao ânus. Assim, ele é responsável por tratar diversas doenças relacionadas à digestão, dores de estômago, cólicas intestinais, prisão de ventre e diarréia',
        ]);

        Especialide::create([
            'nome_especialidade'=> 'Reumatologia',
            'descricao'=> 'Graduado em Medicina pela Faculdade de Medicina de Sobral, Universidade Federal do Ceará e realizou Residência Médica em Pediatria no Hospital Universitário Walter Cantídio/UFC em 2016. No ano de 2018, concluiu o programa de Residência Médica em Reumatologia Pediátrica pelo Hospital das Clínicas da Faculdade de Medicina de Ribeirão Preto da Universidade de São Paulo (HC-FMRP-USP). Foi aprovado nos Títulos de Especialista em Pediatria e em Reumatologia Pediátrica pela Sociedade Brasileira de Pediatria (SBP). Atua na área de Medicina, com ênfase em saúde materno-infantil, na área de Reumatologia Pediátrica',
        ]);

        Especialide::create([
            'nome_especialidade'=> 'Pediatria',
            'descricao'=> 'é a parte da medicina que estuda e trata crianças',
        ]);
        Especialide::create([
            'nome_especialidade'=> 'Cardiologia',
            'descricao'=> 'aborda as doenças relacionadas com o coração e sistema vascular.',
        ]);
        Especialide::create([
            'nome_especialidade'=> 'Medicina Geral e Familiar',
            'descricao'=> 'são designações para a especialidade médica que presta assistência à saúde de forma continuada, integral e abrangente, centrada na pessoa, com foco na família e orientada para a comunidade.',
        ]);
        Especialide::create([
            'nome_especialidade'=> 'Oftalmologia',
            'descricao'=> 'é uma especialidade da medicina que estuda e trata as doenças relacionadas ao olho, à refração e aos olhos e seus anexos.',
        ]);

    }
}
