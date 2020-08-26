@extends('backend.layouts.default_layout')
@section('title') รายชื่อผู้เข้าร่วมกิจกรรม @parent @endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายชื่อผู้เข้าร่วมกิจกรรม</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('activities.index') }}">กิจกรรม</a></li>
            <li class="breadcrumb-item active">รายชื่อผู้เข้าร่วมกิจกรรม</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">{{ $activity->act_name }}</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body m-1">
            <div class="row">
                <table class="table">
                  <thead>
                    <tr class="bg-warning">
                      <th>รหัสนิสิต</th>
                      <th>ชื่อ-สกุล</th>
                      <th>หลักสูตร</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($activity->students as $student)
                    <tr>
                      <td>{{ $student->std_id }}</td>
                      <td>{{ $student->fname." ".$student->lname }}</td>
                      <td>{{ $student->major->major_name }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>
    </div>
  </section>

@endsection