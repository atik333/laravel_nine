@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Class') }}</div>
      
                
                <div class="card-body">
                        @if(session()->has('success'))
                              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                         @endif
                   
                    <br>
                  <div class="d-block">
                        <form action="{{route('subcategory.store')}}" method="post">
                              @csrf

                              <div class="my-3">
                                    <label class="form-label" for="">Choose Category Name</label>
                                    <select class="form-control" name="category_id" id="">
                                          @foreach($category as $row)
                                                <option value="{{$row->id}}">{{$row->category_name}}</option>
                                          @endforeach
                                    </select>
                                    
                              </div>
                              <div class="my-3">
                                    <label class="form-label" for="">sUBCategory Name</label>
                                    <input type="text" value="" class="form-control @error('subcategory_name') is-invalid @enderror" name="subcategory_name" placeholder="Subcategory Name">
                                    @error('subcategory_name')
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