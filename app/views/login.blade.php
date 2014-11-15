@include('includes.top')
    <body>
        @include('includes.menu')
        @yield('body')
        <h3>Logg inn på brukerkonto</h3>
<div class="well">

<form role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="form-group">
            <label for="email">Brukernavn eller epost-adresse</label>
            <input class="form-control" tabindex="1" placeholder="Brukernavn eller epost-adresse" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
        <label for="password">
            Passord
        </label>
        <input class="form-control" tabindex="2" placeholder="Passord" type="password" name="password" id="password">
       <!-- <p class="help-block">
            <a href="{{{ URL::to('/users/forgot_password') }}}">Glemt passord</a>
        </p> -->
        </div>
        <div class="checkbox">
            <label for="remember">
                <input type="hidden" name="remember" value="0">
                <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> Husk meg
            </label>
        </div>
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
        <div class="form-group">
            <button tabindex="3" type="submit" class="btn btn-primary">Logg inn</button>
        </div>
    </fieldset>
</form>


</div>

    </body>
</html>