<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SetCarritosAbandonados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carrito:setAbandonado';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guardar los carritos abandonados del dia';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $totalUsers = DB::table('users')
        ->whereRaw('id > 0')
        ->count();

        //DB::insert("INSERT INTO test(test) VALUES('testing')");

        $this->info("hay $totalUsers Usuarios!");
        //$this->error('Something went wrong!');
    }
}
