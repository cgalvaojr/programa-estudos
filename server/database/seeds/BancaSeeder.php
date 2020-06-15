<?php

use Illuminate\Database\Seeder;
use seeds\traits\Banca;
use App\Models\Banca as BancaModel;

class BancaSeeder extends Seeder
{
    use Banca;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->bancasIniciais() as $banca) {
            BancaModel::create($banca);
        }
    }
}
