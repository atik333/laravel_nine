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
                    <a href="{{route('category.create')}}" class="btn mb-3 btn-primary float-end">Add New Category</a>
                    <table class="table table-dark  table-responsive table-striped">
                        <thead class="">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($category as $sl=>$row)
                            <tr>
                                <td>{{++$sl}}</td>
                                <td>{{$row->category_name}}</td>
                                <td>{{$row->category_slug}}</td>
                                <td>
                                      <a class="btn btn-sm btn-success" href="{{route('category.edit',$row->id)}}">Edit</a>
                                      <a class="btn btn-sm btn-danger " href="{{route('category.delete',$row->id)}}">Delite</a>
                                </td>
                            </tr>
                              @endforeach
                        </tbody>
                    </table>
                    
                






                </div>
            </div>
        </div>
    </div>
</div>
@endsection