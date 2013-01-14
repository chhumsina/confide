<form method="POST" action="{{ URL::action('UserController@store'); }}" accept-charset="UTF-8">
    <fieldset>
        <label for="username">{{ Lang::get('confide::confide.username'); }}</label>
        <input placeholder="{{ Lang::get('confide::confide.username'); }}" type="text" name="username" id="username" value="{{ Input::old('username') }}">

        <label for="email">{{ Lang::get('confide::confide.e_mail'); }} <small>{{ Lang::get('confide::confide.signup.confirmation_required'); }}</small></label>
        <input placeholder="{{ Lang::get('confide::confide.e_mail'); }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">

        <label for="password">{{ Lang::get('confide::confide.password'); }}</label>
        <input placeholder="{{ Lang::get('confide::confide.password'); }}" type="password" name="password" id="password">

        <label for="password2">{{ Lang::get('confide::confide.password2'); }}</label>
        <input placeholder="{{ Lang::get('confide::confide.password2'); }}" type="password" name="password2" id="password2">

        @if ( Session::get('error') )
            <div class="alert alert-error">{{ Session::get('error'); }}</div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice'); }}</div>
        @endif

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">{{ Lang::get('confide::confide.signup.submit'); }}</button>
        </div>

    </fieldset>
</form>
