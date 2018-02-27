@extends('layouts.app')

@section('content')
<br>
<div class="columns">
<div class="column"></div>
        <div class="column is-three-fifths">
            <div class="card ">
              <header class="card-header">
                 <p class="card-header-title"> Login </p>
              </header>
              <div class="card-content">
                <div class="content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label class="label">E-Mail Address</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
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
                        </div>
                           <label class="checkbox">
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                            <a class="" href="{{ route('password.request') }}"><br>Forgot Your Password?</a>
                      <div class="level-right">
                         <button type="submit" class="button is-info "> Login</button>
                      </div>
                    </form>
                  </div>
                 </div>
               </div>
             </div>
           <div class="column"></div>
         </div>

@endsection
