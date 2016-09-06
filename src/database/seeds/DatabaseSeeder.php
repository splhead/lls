<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UserTableSeeder');
        // DB::table('usuarios')->insert(
        // 	array(
        // 		'usuario' => '84389796291',
        // 		'senha' => 'mysupersecretpass',
        // 		'tipo' => 'administrador'
        // 	)
        // );

         DB::table('usuarios')->insert([
            'usuario' => str_random(11),
            'senha' => password_hash(str_random(10), PASSWORD_DEFAULT),
            //'password' => bcrypt('secret'),
            'tipo' => 'administrador',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
