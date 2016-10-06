<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ elixir('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    <img src="/img/logo.png" alt="" class="center-block img-circle"/>

                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Usuário</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus maxlength="11">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
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

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Lembrar
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Entrar
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>