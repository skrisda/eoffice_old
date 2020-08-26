@extends('backend.layouts.default_layout')
@section('title') {{ $activity->act_name }} @parent @endsection

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>รายละเอียดกิจกรรม</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('activities.index') }}">กิจกรรม</a></li>
          <li class="breadcrumb-item active">รายละเอียดกิจกรรม</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="card">
    <div class="card-header bg-warning">
      <h3 class="card-title">ชื่อกิจกรรม : {{ $activity->act_name }}</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>

    <div class="card-body m-1">
      <div class="row">
        <div class="font-weight-bold">รายละเอียดกิจกรรม : </div>
        <div> {{ $activity->act_detail }}</div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <table class="table">
            <tbody>
              <tr>
                <th>สถานที่</th>
                <td class="text-primary">{{ $activity->place }}</td>
              </tr>
              <tr>
                <th>ภาคเรียน/ปีการศึกษา</th>
                <td class="text-primary">{{ $activity->term.'/'.$activity->year }}</td>
              </tr>
              <tr>
                <th>จำนวนชั่วโมง</th>
                <td class="text-primary">{{ $activity->hours }} ชั่วโมง</td>
              </tr>
              <tr>
                <th>ประเภทกิจกรรม</th>
                <td class="text-primary">{{ $activity->category->cat_name }}</td>
              </tr>
              <tr>
                <th>ชนิดกิจกรรม</th>
                <td class="text-primary">{{ $activity->type->type_name }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <table class="table">
            <tbody>
              <tr>
                <th>เจ้าของโครงการ</th>
                <td class="text-primary">{{ $activity->owner }}</td>
              </tr>
              <tr>
                <th>วันที่ เริ่ม-สิ้นสุด โครงการ</th>
                <td class="text-primary">{{ date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end)) }}</td>
              </tr>
              <tr>
                <th>เปิดรับสมัครระหว่างวันที่</th>
                <td class="text-primary">{{ date("d/m/Y", strtotime($activity->open))." - ". date("d/m/Y", strtotime($activity->close)) }}</td>
              </tr>
              <tr>
                <th>สถานะโครงการ</th>
                <td class="text-primary">{{ config('global.activity_status')[ $activity->status]}}</td>
              </tr>
              <tr>
                <th>งบประมาณ</th>
                <td class="text-primary">@if($activity->budget == NULL) - @else {{ $activity->budget }} บาท @endif</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div><a class="btn btn-warning" href="{{ route('activities.index') }}">ย้อนกลับ</a></div>
      </div>
    </div>
</section>

@endsection