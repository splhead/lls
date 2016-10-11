<?php
namespace App\Interfaces;

use App\Feriado;
use App\Repositories\RepositoryInterface;

class IFeriadoRepository implements RepositoryInterface
{

	public function todos()
	{
		return Feriado::all();
	}

	/*public function detalhar($data)
	{

	}

	public function criar()
	{

	}

	public function atualizar($data)
	{

	}

	public function apagar($data)
	{

	}*/
}

?>