<?php
namespace App\Interfaces;

use App\Feriado;

class FeriadoRepository implements RepositoryInterface
{
	function __construct()
	{
		//
	}
	
	public function todos()
	{
		return Feriado::all();
	}

	/*public function detalhar()
	{

	}

	public function criar()
	{

	}

	public function atualizar()
	{

	}

	public function apagar()
	{

	}*/
}

?>