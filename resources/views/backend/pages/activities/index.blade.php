@extends('backend.layouts.default_layout')
@section('title') กิจกรรม @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายการกิจกรรม</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('backend/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">กิจกรรม</li>
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
                <a name="" id="" class="btn btn-success" href="{{ route('activities.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มกิจกรรม
                </a>
            </h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr class="bg-warning">
                        <th>#</th>
                        <th>ชื่อกิจกรรม</th>
                        <th>สถานที่</th>
                        <th>กิจกรรมระดับ</th>
                        <th>ระหว่างวันที่</th>
                        <th class="text-right">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activities as $activity)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>{{  $activity->place  }}</td>
                        <td>{{  $activity->category->cat_name  }}</td>
                        <td >{{   date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}</td>
                        <td class="project-actions text-right">

                            <form action="{{route('activities.destroy', $activity->act_id) }}" method="POST">
                                @csrf
                                <a class="btn btn-secondary btn-sm" href="{{ route('activities.list', $activity->act_id) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    รายชื่อ
                                </a>

                                <a class="btn btn-primary btn-sm" href="{{ route('activities.show', $activity->act_id) }}">
                                    <i class="fas fa-eye">
                                    </i>
                                    รายละเอียด
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('activities.edit', $activity->act_id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    แก้ไข
                                </a>

                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบรายการนี้หรือไม่')">
                                    <i class="fas fa-trash">
                                    </i>
                                    ลบ
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-3" style="padding-left: 40%;">{{ $activities->links() }}</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->

  </section>
  @endsection