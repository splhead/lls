<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf', 11)->unique();
            $table->string('senha');
            // $table->string('api_token', 60)->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        factory(User::class)->create([
            'nome' => 'Silas Pinho Ladislau',
            'email' => 'splhead@gmail.com',
            'cpf' => '84389796291',
            'senha' => bcrypt('spl#e@d'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
