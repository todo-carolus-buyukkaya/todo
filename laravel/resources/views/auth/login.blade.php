@extends('../auth/master_connections')
@section('titreOnglet')
    Inscription
@endsection
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Connectez-vous</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="/auth/login">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                              <a href="register">Inscrivez-vous</a>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Se connecter</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
