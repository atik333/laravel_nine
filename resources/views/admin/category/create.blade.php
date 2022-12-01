@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class') }}</div>

                
                <div class="card-body">
                        @if(session()->has('success'))
                              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                         @endif
                    <a href="{{route('category.index')}}" class="btn mb-3 btn-primary float-end">All Category</a>
                    <br>
                  <div class="d-block">
                        <form action="{{route('category.store')}}" method="post">
                              @csrf
                              <div class="my-3">
                                    <label class="form-label" for="">Category Name</label>
                                    <input type="text" value="" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="Category Name">
                                    @error('category_name')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="my-3">
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                              </div>
                        </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection