<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="{{route('photo')}}">Photo</a></li>
            <li><a href="{{route('student', Crypt::encryptString('2'))}}">student id</a></li>
        </ul>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    hi {{Auth::user()->name}}
                </div>
                <form action="{{route('hash')}}" method="post">
                    @csrf
                    <input type="password" name="password" placeholder="Enter your password"></br>
                    <button type="submit" >submit</button>
                </form>
            </div></br></br>
            @isset($name)
                {{$name}}

            @endisset
        </div>

    </div>
</x-app-layout>
