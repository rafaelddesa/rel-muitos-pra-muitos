<?php

use Illuminate\Database\Seeder;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert(['projeto_id' => 1, 'desenvolvedor_id' => 1, 'horas_semanais'=> 11]);
        DB::table('alocacoes')->insert(['projeto_id' => 1, 'desenvolvedor_id' => 2, 'horas_semanais'=> 63]);
        DB::table('alocacoes')->insert(['projeto_id' => 2, 'desenvolvedor_id' => 2, 'horas_semanais'=> 34]);
        DB::table('alocacoes')->insert(['projeto_id' => 2, 'desenvolvedor_id' => 3, 'horas_semanais'=> 65]);
        DB::table('alocacoes')->insert(['projeto_id' => 3, 'desenvolvedor_id' => 1, 'horas_semanais'=> 26]);
        DB::table('alocacoes')->insert(['projeto_id' => 3, 'desenvolvedor_id' => 2, 'horas_semanais'=> 17]);
        DB::table('alocacoes')->insert(['projeto_id' => 3, 'desenvolvedor_id' => 3, 'horas_semanais'=> 44]);
    }
}
