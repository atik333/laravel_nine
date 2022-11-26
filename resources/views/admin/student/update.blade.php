@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View student data') }}</div>

                
                <div class="card-body">
                    <a href="{{route('students.index')}}" class="btn btn-primary float-end">All Student</a>
                    <table class="table table-responsive table-strioe">
                        <thead>
                            <tr>
                                
                                <th>Class Id</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Phon</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                            <tr>
                                
                                <td>{{$show->class_id}}</td>
                                <td>{{$show->name}}</td>
                                <td>{{$show->roll}}</td>
                                <td>{{$show->phon}}</td>
                                <td>{{$show->email}}</td>
                            </tr>
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection