@extends('layouts.app')

@section('fullpage')
<div class="container is-vcentered">
    <div class="columns is-centered ">
        <div class="column m-t-100  m-b-100  is-8">
            <div class="card ">
                <header class="card-header p-t-10 p-l-10 p-b-15">
                    <p class="title">
                        {{ __('Register') }}
                    </p>
                    
                </header>
                
                <div class="card-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">{{ __('Name') }}</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input id="name" placeholder="Name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
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
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expanded">
                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="field is-horizontal">
                            <div class="field-label">
                              <!-- Left empty for spacing -->
                            </div>
                            <div class="field-body">
                              <div class="field pulled-centered">
                                <div class="control">
                                  <button type="submit" class="button is-primary">
                                    {{ __('Register') }}
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    <div class="columns">
        <div class="column is-3"></div>
        <div class="column is-6">
            
        </div>
    </div>
</div>
@endsection
