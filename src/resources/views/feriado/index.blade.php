@extends('layouts.app')

@section('content')
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-3 col-md-offset-4" style="background-color: #fff;">
				<mferiados feriados="{{$feriados}}"></mferiados>
			</div>
		</div>
		
		<div class="row">
			<form action="/feriados" method="POST" class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Feriados</h2>
				{{csrf_field()}}
				<div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                    <label for="data" class="col-md-4 control-label">Dia n&atilde;o &uacute;til</label>

                    <div class="col-md-6 form-group">
                        <div class="input-group">
                        	<input id="data" type="text" class="form-control" name="data" value="{{ old('data') }}" required placeholder="Escolha uma data">

	                        <div class="input-group-addon">
						        <span class="glyphicon glyphicon-calendar"></span>
						    </div>
					    </div>

                        @if ($errors->has('data'))
                            <span class="help-block">
                                <strong>{{ $errors->first('data') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

				<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                    <label for="descricao" class="col-md-4 control-label">Descri&ccedil;&atilde;o</label>

                    <div class="col-md-6">
                        <textarea id="descricao" type="" class="form-control" name="descricao" value="{{ old('descricao') }}" required placeholder="Ex.: Feriado Municipal"></textarea>

                        @if ($errors->has('descricao'))
                            <span class="help-block">
                                <strong>{{ $errors->first('descricao') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </div>

			</form>
		</div>
	</div>

	

@endsection

@section('postJquery')
	$( "#data" ).datepicker({
		language: 'pt-BR',
		dateFormat: "yy-mm-dd",
		dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
		minDate: 0,
		monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		beforeShowDay: function(date)
		{
			var diaDaSemana = date.getDay();
			// 0: domingo 1: segunda
			if (diaDaSemana == 0 || diaDaSemana == 6) return [false];
			else return [true];
		}
	});
@endsection