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
                    <a href="{{route('students.create')}}" class="btn btn-primary float-end">Add New</a>
                    <table class="table table-responsive table-strioe">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Class Id</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Phon</th>
                                <th>Email</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($student as $sl=>$row)
                            <tr>
                                <td>{{++$sl}}</td>
                                <td>{{$row->class_id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->roll}}</td>
                                <td>{{$row->phon}}</td>
                                <td>{{$row->email}}</td>
                                <td>
                                      <a class="btn btn-sm btn-success" href="{{route('students.show',$row->id)}}">View</a>
                                      <a class="btn btn-sm btn-primary" href="{{route('students.edit',$row->id)}}">Edit</a>
                                      <form action="{{route('students.destroy',$row->id)}}" method="post">
                                      @csrf
                                          <input type='hidden' name="_method" value="DELETE">
                                          <button class="btn btn-sm btn-danger " type="submit">Delite</button>
                                      </form>
                                     
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