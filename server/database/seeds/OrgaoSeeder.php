<?php

use Illuminate\Database\Seeder;
use seeds\traits\Orgao;
use App\Models\Orgao as OrgaoModel;

class OrgaoSeeder extends Seeder
{
    use Orgao;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->orgaosIniciais() as $orgao) {
            OrgaoModel::create($orgao);
        }
    }
}
