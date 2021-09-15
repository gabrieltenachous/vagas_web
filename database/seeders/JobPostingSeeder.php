<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_postings')->insert([
            'title' => 'Programador PHP',
            'slug' => Str::slug('Programador PHP', '-'),
            'description' => '<p>A E-Inov é uma empresa inovadora que desenvolve soluções digitais relacionados a marketing e disponibiliza para clientes de todo o mundo.</p><p><br></p><p>Por que trabalhar com a gente?</p><ul><li> Por ser uma startup em crescimento, você vai ter acesso a todo time e poder pensar junto com ele o melhor destino dos produtos.</li><li>PLR ilimitado, com gatilhos baseados no lucro do último ano.</li><li>Trabalhar em um ambiente descontraído e acolhedor.</li><li>Aprender todos os dias alguma coisa nova e ver seu trabalho ajudando pessoas de todos os lugares.</li><li>Ahh Café moído na hora ilimitado.</li></ul><p><br></p><p>Conhecimentos e experiência em:</p><ul><li>Domínio da linguagem Javascript e PHP</li><li> Framework PHP: Laravel</li><li> Versionamento com GIT.</li><li> Linguagem SQL.</li><li>HTML e CSS;</li></ul><p><br></p><p>Desejáveis: </p><ul><li>Conhecimento com os frameworks: Jquery, Vue.js e Biblioteca Tailwind</li><li> Experiência com desenvolvimento, testes e documentação de APIs REST;</li><li> Testes Automatizados.</li></ul><p><br></p><p>Detalhes da Vaga:</p><ul><li> CLT</li><li> Trabalho Local em Florianópolis (Bairro Itacorubi)</li><li>Salário a combinar</li><li> Vale Refeição</li><li>Vale Transporte (opcional)</li></ul><p><br></p><p>Processo de Seleção:</p><p><br></p><p>Será enviado ao candidato um desafio para ele resolver utilizando o Framework Laravel, após a entrega do desafio iremos avaliar a resolução do mesmo e marcar uma entrevista.</p>',
            'valid_through'=>Carbon::now()->addDays(60),
            'employment_type'=>'FULL_TIME',
            'base_salary_currency'=>'BRL',
            'base_salary_value_unit_text'=>'MONTH',
            'base_salary_value_value'=>rand(3000,10000),
        ]);

        DB::table('job_postings')->insert([
            'title' => 'Analista de Marketing',
            'slug' => Str::slug('Analista de Marketing', '-'),
            'description' => '<p>A E-Inov é uma empresa inovadora que desenvolve soluções digitais relacionados a marketing e disponibiliza para clientes de todo o mundo.</p><p><br></p><p>Por que trabalhar com a gente?</p><ul><li> Por ser uma startup em crescimento, você vai ter acesso a todo time e poder pensar junto com ele o melhor destino dos produtos.</li><li>PLR ilimitado, com gatilhos baseados no lucro do último ano.</li><li>Trabalhar em um ambiente descontraído e acolhedor.</li><li>Aprender todos os dias alguma coisa nova e ver seu trabalho ajudando pessoas de todos os lugares.</li><li>Ahh Café moído na hora ilimitado.</li></ul><p><br></p><p>Conhecimentos e experiência em:</p><ul><li>Domínio em Marketing Digital</li><li> Experiencia em SEO, Campanhas</li><li> Saiba trabalhar em equipe</li>',
            'valid_through'=>Carbon::now()->addDays(60),
            'employment_type'=>'FULL_TIME',
            'base_salary_currency'=>'BRL',
            'base_salary_value_unit_text'=>'MONTH',
            'base_salary_value_value'=>rand(3000,10000),
        ]);
    }
}
