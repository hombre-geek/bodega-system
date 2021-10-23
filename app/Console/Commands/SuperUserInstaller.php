<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class SuperUserInstaller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bodegaInstall:superuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Super User Instalation for Bodega System';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if ( !$this->verifySuperUser() ){

            
            $this->CreateSuperUser();            
            $this->info('Instalador: "Super User" creado con éxito.');

        }else{

            $this->error('Instalador: "Super User" ya existe en el Sistema');

        }

    }

    private function verifySuperUser()
    {
        return User::find(1);
    }

    private function CreateSuperUser()
    {
        return User::create([
                'name' => 'Super',
                'dni' => '000000000',
                'last_name' => 'User',
                'email' => 'user@superuser.com',
                'password' => '12345678'
            ]);
    }
}
