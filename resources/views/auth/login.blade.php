@extends('layouts.app')

@section('fullpage')
<div class="container">
    <div class="columns is-centered">
        <div class="column m-t-100  m-b-100  is-8">
            <div class="card">
                <div class="card-header p-t-10 p-l-10 p-b-15"><p class="title">{{ __('Login') }}</p></div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="has-text-danger" role="alert">
                                            <strong class="has-text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </div>
                            </div>
                        </div>
                        
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">{{ __('Password') }}</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="has-text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label"></label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </p>
                              </div>
                            </div>
                        </div>

                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <button type="submit" class="button is-primary">
                                    {{ __('Login') }}
                                </button>
                            </p>
                            <p class="control">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
