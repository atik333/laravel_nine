@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Category') }}</div>

                
                <div class="card-body">
                        @if(session()->has('success'))
                              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                         @endif
                    <a href="{{route('category.index')}}" class="btn mb-3 btn-primary float-end">All Category</a>
                    <br>
                  <div class="d-block">
                        <form action="{{route('category.update',$data->id)}}" method="post">
                              @csrf
                              <div class="my-3">
                                    <label class="form-label" for="">Category Name</label>
                                    <input type="text" value="{{$data->category_name}}" class="form-control @error('category_name') is-invalid @enderror" name="category_name" >
                                    @error('category_name')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="my-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                        </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection