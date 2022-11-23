@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class') }}</div>

                
                <div class="card-body">
                    <a href="{{route('addclass.index')}}" class="btn btn-primary float-end">Add New</a>
                    <table class="table table-responsive table-strioe">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($class as $sl=>$row)
                            <tr>
                                <td>{{++$sl}}</td>
                                <td>{{$row->class_name}}</td>
                                <td>
                                      <a class="btn btn-sm btn-success" href="">Edit</a>
                                      <a class="btn btn-sm btn-danger " href="">Delite</a>
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