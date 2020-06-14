<?php

use Illuminate\Database\Seeder;
use seeds\traits\Assunto;
use App\Models\Assunto as AssuntoModel;

class AssuntoSeeder extends Seeder
{
    use Assunto;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->assuntoIniciais() as $assunto) {
            $filhos = array_pop($assunto);
            $pai = AssuntoModel::create($assunto);

            foreach ($filhos as $assuntoFilho) {
                $pai->assuntosFilhos()->attach(AssuntoModel::create($assuntoFilho)['id_assunto']);
            }
        }
    }
}
