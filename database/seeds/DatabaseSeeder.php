<?php

use App\AgendaTipo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgendaTipoSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductBrandSeeder::class);
    }
}
