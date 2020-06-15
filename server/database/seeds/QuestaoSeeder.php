<?php

use Illuminate\Database\Seeder;
use seeds\traits\Questao;
use App\Models\Questao as QuestaoModel;

class QuestaoSeeder extends Seeder
{
    use Questao;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->questoesIniciais() as $questao) {
            QuestaoModel::create($questao);
        }
    }
}
