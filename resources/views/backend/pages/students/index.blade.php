@extends('backend.layouts.default_layout')
@section('title') Students @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายชื่อนิสิต</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('students.index') }}">รายชื่อนิสิต</a></li>
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
                <a name="" id="" class="btn btn-success" href="{{ route('students.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มรายชื่อนิสิต
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
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            รหัสนิสิต
                        </th>
                        <th>
                            ชื่อ-สกุล
                        </th>
                        <th>
                            หลักสูตร
                        </th>
                        <th>อ.ที่ปรึกษา</th>
                        <th>
                            สถานะ
                        </th>
                        <th class="text-right">
                            จัดการ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>
                            {{ ++$i }}
                        </td>
                        <td>
                            <a>
                               {{  $student->std_id  }}
                            </a>
                        </td>
                        <td>
                            {{  $student->tname.$student->fname." ".$student->lname  }}
                        </td>
                        <td>
                            {{  $student->major->major_name  }}
                        </td>
                        <td class="small">{{ $student->advisor1->tname.$student->advisor1->fname." ".$student->advisor1->lname }}<br>{{ $student->advisor2->tname.$student->advisor2->fname." ".$student->advisor2->lname }}</td>
                        <td> {{ config('global.student_status')[$student->status]  }}</td>
                        <td class="project-actions text-right">

                            <form action="{{route('students.destroy', $student->std_id) }}" method="POST">
                                @csrf
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                    ดูประวัติ
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
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
            <div class="mt-3" style="padding-left: 40%;">{{ $students->links() }}</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->

  </section>
  @endsection