@include('includes.top')
    <body>
        @include('includes.menu')
        @yield('body')
<h3>Lag brukerkonto</h3>
<div class="well">
<form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="form-group">
            <label for="username">Brukernavn</label>
            <input class="form-control" placeholder="Brukernavn" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
        </div>
        <div class="form-group">
            <label for="email">Epost-adresse </label>
            <input class="form-control" placeholder="Epost-adresse" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
            <label for="password">Passord</label>
            <input class="form-control" placeholder="Passord" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Bekreft passord</label>
            <input class="form-control" placeholder="Bekreft passord" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">Lag brukerkonto</button>
        </div>
      @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
    </fieldset>
</form>

</div>

    </body>
</html>