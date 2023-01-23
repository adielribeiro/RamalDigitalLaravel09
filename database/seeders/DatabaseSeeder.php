<?php

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UserSeeder');
    }
}

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into usuarios (nome, ramal, email) values (?, ?, ?)', array('Adiel Vale', '382', 'adiel.vale@essere.group'));
        DB::insert('insert into usuarios (nome, ramal, email) values (?, ?, ?)', array('Gabriel Victorello', '381', 'gabriel.victorello@essere.group'));
        DB::insert('insert into usuarios (nome, ramal, email) values (?, ?, ?)', array('Bruno Ribeiro', '380', 'bruno.ribeiro@essere.group'));
        DB::insert('insert into usuarios (nome, ramal, email) values (?, ?, ?)', array('Flávia Faben', '354', 'flavia.faben@essere.group'));
    }
}
