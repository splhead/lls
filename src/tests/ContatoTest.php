<?php

use App\Contato;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ContatoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContatoCreate()
    {
    	$dados = [
    		'tipo'    => 'e-mail',
    		'contato' => 'novoemail@teste.com',
		];

    	$contato = factory(Contato::class)->create($dados);

		$this->assertInstanceOf(Contato::class, $contato);

		$this->assertInstanceOf(Carbon::class, $contato->created_at);
        $this->assertInstanceOf(Carbon::class, $contato->updated_at);

        $this->seeInDatabase('contatos', $dados);

        dd($contato);
    }
}
