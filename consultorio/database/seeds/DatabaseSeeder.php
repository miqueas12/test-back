<?php

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
        Contatos::create([
        	'nome' => 'Teste',
        	'email' => 'a@hotmail.com',
        	'telefone' => '123',
        ])
    }
}
