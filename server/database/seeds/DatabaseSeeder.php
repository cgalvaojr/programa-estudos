<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
             $this->call(BancaSeeder::class);
             $this->call(OrgaoSeeder::class);
             $this->call(AssuntoSeeder::class);
             $this->call(QuestaoSeeder::class);
            DB::commit();
        } catch (\Illuminate\Database\QueryException $exception) {
            DB::rollBack();
        }
    }
}
