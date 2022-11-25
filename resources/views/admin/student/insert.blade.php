@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student') }}
                <a href="{{route('students.index')}}" class="btn btn-primary float-end">All Student</a>
                </div>
                <div class="card-body">
                  @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                   @endif
                  <form action="{{route('students.store')}}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-3">
                              <label for="class" class="form-label">class</label>
                              <select name="class_id" class="form-control" id="">
                                    @foreach($classes as $row)
                                    <option value="{{$row->id}}">{{$row->class_name}}</option>
                                    @endforeach
                              </select>

                        </div>
                        <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"  name="name" placeholder="Enter student name" value="{{old('name')}}">
                              @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="mb-3">
                              <label for="roll" class="form-label">Roll</label>
                              <input id="roll" class="form-control @error('roll') is-invalid @enderror" type="number"  name="roll" placeholder="Enter student roll" value="{{old('roll')}}">
                              @error('roll')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="mb-3">
                              <label for="phon" class="form-label">Phon</label>
                              <input id="phon" class="form-control @error('phon') is-invalid @enderror" type="number"  name="phon" placeholder="Enter student phon" value="{{old('phon')}}">
                              @error('phon')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input id="email" class="form-control @error('email') is-invalid @enderror" type="email"  name="email" placeholder="Enter student email" value="{{old('email')}}">
                              @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="">
                              <button type="submit" class="btn btn-sm btn-info">Data Store</button>
                        </div>
                  </form>
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection