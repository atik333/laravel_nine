@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
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
                                <a class="btn btn-sm btn-success" href="{{route('category.edit',$row->id)}}"><i class="fas fa-pen-square"></i></a>
                                <a class="btn btn-sm btn-danger " href="{{route('category.delete',$row->id)}}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection






<!-- <div class="container">
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
</div> -->