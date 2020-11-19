<?php

use App\AmbienteConfiguration;
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
        $this->call(ProductSeeder::class);
        $this->call(ProductBrandSeeder::class);
        $this->call(AgendaTipoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AmbienteConfigurationSeeder::class);
    }
}
