@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">           
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                <h2 class="text-center">Novo Usu&aacute;rio</h2>

                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                    <label for="nome" class="col-md-4 control-label">Nome</label>

                    <div class="col-md-6">
                        <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

                        @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    <label for="cpf" class="col-md-4 control-label">CPF</label>

                    <div class="col-md-6">
                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required>

                        @if ($errors->has('cpf'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cpf') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                    <label for="senha" class="col-md-4 control-label">Senha</label>

                    <div class="col-md-6">
                        <input id="senha" type="password" class="form-control" name="senha" required>

                        @if ($errors->has('senha'))
                            <span class="help-block">
                                <strong>{{ $errors->first('senha') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('senha_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirme a senha</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="senha_confirmation" required>

                        @if ($errors->has('senha_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('senha_confirmation') }}</strong>
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
