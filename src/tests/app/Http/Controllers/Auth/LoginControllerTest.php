<?php
/**
 * @Author: Silas P Ladislau
 * @Date:   2016-10-02 21:40:35
 * @Last Modified by:   Silas P Ladislau
 * @Last Modified time: 2016-10-02 22:38:59
 */

namespace App\Http\Controller;

use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class LoginControllerTest extends \TestCase
{
	use DatabaseTransactions;
	
	public function testLogin()
	{
		$data=[
			'cpf' => '84389796291',
			'senha' => 'spl#e@d',
		];

		$user = $data;

		$user['senha'] = bcrypt($user['senha']);

		factory(User::class)->create($user);

		$this->post('/login', $data);

		$this->seeStatusCode(200);

		$this->seeJson([
			'cpf' => '84389796291',
		]);
	}
}