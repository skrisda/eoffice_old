@extends('backend.layouts.default_layout')
@section('title') Products @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('backend/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

        @if($message = Session::get('success'))
        <div class="alert alert-success text-center" role="alert">
             {{ $message }}
          </div>
         @endif

        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a name="" id="" class="btn btn-success" href="{{ route('products.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;Category
                </a>
            </h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        
        <!-- /.card-body -->
        </div>
        <!-- /.card -->

  </section>
  @endsection