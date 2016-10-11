<?php
/**
 * @Author: Silas P Ladislau
 * @Date:   2016-10-06 20:43:56
 * @Last Modified by:   Silas P Ladislau
 * @Last Modified time: 2016-10-06 22:18:13
 */
use App\Contato;
use App\Repositories\RepositoryInterface;

class IContatoRepository extends RepositoryInterface
{
	public function todos()
	{
		return Contato::all();
	}

	/*public function detalhar($data)
	{

	}

	public function criar(ContatoRequest $request)
	{
		$contato = Contato->fill($request->all());
		$contato->save();
	}

	public function atualizar($data)
	{

	}

	public function apagar($data)
	{

	}*/
}