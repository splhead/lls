<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Interfaces\FeriadoRepository;

use App\Feriado;

class FeriadoController extends Controller
{
	protected $feriado;

    function __construct(FeriadoRepository $feriado)
    {
    	$this->middleware('auth:web,api');
    	$this->feriado = $feriado;
    }

    public function index()
    {
        // $feriados = $this->feriado->todos();
        // return view('feriado.index', ['feriados' => $feriados]);
        return view('feriado.index');
    }

    public function listar()
    {
    	/*$feriados = $this->feriado->todos();
    	return view('feriado.index', ['feriados' => $feriados]);*/
        return \Response::json($this->feriado->todos(), 200);

    }

    public function criar(Request $request)
    {
        $this->validate($request, [
            'data' => 'required|date|date_format:Y-m-d|unique:feriados',
            'descricao' => 'required',
        ]);

        $feriado = new Feriado();
        $feriado->data = $feriado->getDataAttribute($request->input('data'));
        $feriado->descricao = $request->input('descricao');
        $feriado->save();

        return $this->index();

    }
}
