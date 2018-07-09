@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>RakuAir (insert logo pic)</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection