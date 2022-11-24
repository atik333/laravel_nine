@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class') }}
                <a href="{{route('class.index')}}" class="btn btn-primary float-end">All Class</a>
                </div>
                <div class="card-body">
                @if(session()->has('success'))
                              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                         @endif
                  <form action="{{route('edit.store',$data->id)}}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-3">
                              <label for="class" class="mb-1">class</label>
                              <input id="class" class="form-control @error('class_name') is-invalid @enderror" type="text" value="{{$data->class_name}}" name="class_name" >
                              @error('class_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="">
                              <button type="submit" class="btn btn-sm btn-info">Edit</button>
                        </div>
                  </form>
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection