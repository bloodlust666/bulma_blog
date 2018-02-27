@extends('layouts.app')

@section('content')
<br>
<div class="columns">
<div class="column"></div>
        <div class="column is-three-fifths">
            <div class="card ">
              <header class="card-header">
                 <p class="card-header-title"> Register </p>
              </header>
              <div class="card-content">
                <div class="content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field">
                          <label class="label">Username</label>
                          <div class="control has-icons-left has-icons-right">
                                <input id="name" type="text" class="input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus
                                 placeholder="name">
                                 <span class="icon is-small is-left">
                                     <i class="fas fa-user"></i>
                                   </span>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="example@mail.com">
                                <span class="icon is-small is-left">
                                  <i class="fas fa-envelope"></i>
                                </span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="field">
                          <label class="label">Confirm Password</label>
                          <div class="control">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </div>
                        </div>
                          <button type="submit" class="button is-info">
                              Register
                          </button>
                        </div>
                      </form>
                     </div>
                    </div>
                  </div>
                </div>
              <div class="column"></div>
            </div>

@endsection
