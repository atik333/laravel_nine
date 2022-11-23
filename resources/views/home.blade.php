@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="{{route('photo')}}">Photo</a></li>
                    <li><a href="{{route('student', Crypt::encryptString('2'))}}">student id</a></li>
                    <button class="btn btn-info">atik</button>
                </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <button class="btn btn-info">atik</button>
                    hi {{Auth::user()->name}}






                        <form action="{{route('hash')}}" method="post">
                            @csrf
                            <input type="password" name="password" placeholder="Enter your password"></br>
                            <button type="submit" >submit</button>
                            </form>
                        </div></br></br>
                        @isset($name)
                            
                        <input type="text" value="{{$name}}"> <button class="btn btn-primary">Copy</button>
                        @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection