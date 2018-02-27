@extends('layouts.app')

@section('content')
<div class="tabs">
  <ul>
    <li class="is-active"><a href="{{ url('/post') }}">Posts</a></li>
    <li><a>Music</a></li>
    <li><a>Videos</a></li>
    <li><a>Documents</a></li>
  </ul>
</div>

<div class="columns">
    <div class="column">
            <div class="card">
              <header class="card-header">
                 <p class="card-header-title"> Dashboard </p>
              </header>
              <div class="card-content">
                <div class="content">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
