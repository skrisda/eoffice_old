@extends('backend.layouts.default_layout')
@section('title') เพิ่มกิจกรรม @parent @endsection

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>เพิ่มกิจกรรม</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('activities.index') }}">กิจกรรม</a></li>
          <li class="breadcrumb-item active">เพิ่มกิจกรรม</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">

  {!! Session::get('status') !!}

  <!-- Default box -->
  @if($message = Session::get('success'))
  <div class="alert alert-success text-center">
    {{ $message }}
  </div>
  @endif

  <div class="card">
    <div class="card-header bg-warning">
      <h3 class="card-title">เพิ่มกิจกรรม</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>

    <div class="card-body p-0">
      <form role="form" method="post" action="{{ route('activities.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="card-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="act_name">ชื่อกิจกรรม/โครงการ</label>
                <input type="text" class="form-control {{ $errors->has('act_name') ? 'is-invalid' :'' }}" id="act_name"
                  name="act_name" placeholder="ป้อนชื่อกิจกรรม" value="{{old('act_name')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('act_name') }}</small></span>
              </div>

              <div class="form-group">
                <label for="act_detail">รายละเอียด</label>
                <textarea class="form-control" id="act_detail" name="act_detail"
                  style="height: 150px">{{old('act_detail')}}</textarea>
              </div>

              <div class="form-group">
                <label for="place">สถานที่</label>
                <input type="text" class="form-control  {{ $errors->has('place') ? 'is-invalid' :'' }}" id="place"
                  name="place" placeholder="ป้อนสถานที่" value="{{old('place')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('place') }}</small></span>
              </div>

              <div class="form-group">
                <label for="term">ภาคเรียน/ปีการศึกาษา</label>
                <div class="row">
                  <div class="col-md-2">
                    <select class="form-control {{ $errors->has('term') ? 'is-invalid' :'' }}" id="term" name="term">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="col-md-1 text-center">/</div>
                  <div class="col-md-2">
                    <select class="form-control {{ $errors->has('year') ? 'is-invalid' :'' }}" id="year" name="year">
                      <option value="2563">2563</option>
                      <option value="2564">2564</option>
                      <option value="2565">2565</option>
                    </select>
                  </div>
                </div>
                <span
                  class="help-block text-danger"><small>{{ $errors->first('term').$errors->first('year') }}</small></span>
              </div>

              <div class="form-group">
                <label for="hours">จำนวนชั่วโมง</label>
                <input type="number" class="form-control  {{ $errors->has('hours') ? 'is-invalid' :'' }}" id="hours"
                  name="hours" placeholder="ป้อนจำนวนชั่วโมง" value="{{old('hours')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('hours') }}</small></span>
              </div>

              <div class="form-group">
                <label for="cat_id">กิจกรรม</label>
                <select class="form-control {{ $errors->has('cat_id') ? 'is-invalid' :'' }}" id="cat_id" name="cat_id">
                  <option value="">--- กรุณาเลือก ---</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                  @endforeach
                </select>
                <span class="help-block text-danger"><small>{{ $errors->first('cat_id') }}</small></span>
              </div>

              <div class="form-group">
                <label for="type_id">ประภทกิจกรรม</label>
                <select class="form-control {{ $errors->has('type_id') ? 'is-invalid' :'' }}" id="type_id"
                  name="type_id">
                  <option value="">--- กรุณาเลือก ---</option>
                  @foreach ($types as $type)
                  <option value="{{ $type->type_id }}">{{ $type->type_name }}</option>
                  @endforeach
                </select>
                <span class="help-block text-danger"><small>{{ $errors->first('type_id') }}</small></span>
              </div>

            </div>
            <div class="col-md-6">

              <div class="form-group">
                <label for="owner">เจ้าของโครงการ</label>
                <input type="text" class="form-control {{ $errors->has('owner') ? 'is-invalid' :'' }}" id="owner"
                  name="owner" placeholder="ป้อนหมวดหมู่" value="{{old('owner')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('owner') }}</small></span>
              </div>

              <div class="form-group">
                <label for="start">วันที่เริ่มต้นกิจกรรม</label>
                <input type="date" class="form-control {{ $errors->has('start') ? 'is-invalid' :'' }}" id="start"
                  name="start" placeholder="เลือกวันที่" value="{{old('start')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('start') }}</small></span>
              </div>

              <div class="form-group">
                <label for="end">วันที่สิ้นสุดกิจกรรม</label>
                <input type="date" class="form-control {{ $errors->has('end') ? 'is-invalid' :'' }}" id="end" name="end"
                  placeholder="เลือกวันที่" value="{{old('end')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('end') }}</small></span>
              </div>

              <div class="form-group">
                <label for="open">เปิดให้สมัครเข้าร่วมวันที่</label>
                <input type="date" class="form-control {{ $errors->has('open') ? 'is-invalid' :'' }}" id="open"
                  name="open" placeholder="เลือกวันที่" value="{{old('open')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('open') }}</small></span>
              </div>

              <div class="form-group">
                <label for="close">ถึงวันที่</label>
                <input type="date" class="form-control {{ $errors->has('close') ? 'is-invalid' :'' }}" id="close"
                  name="close" placeholder="เลือกวันที่" value="{{old('close')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('close') }}</small></span>
              </div>

              <div class="form-group">
                <label for="budget">งบประมาณ (บาท)</label>
                <input type="number" class="form-control  {{ $errors->has('budget') ? 'is-invalid' :'' }}" id="budget"
                  name="budget" placeholder="ป้อนจำนวนเงิน" value="{{old('budget')}}">
                <span class="help-block text-danger"><small>{{ $errors->first('hour') }}</small></span>
              </div>

            </div>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer text-center">
          <button type="submit" class="btn btn-primary">บันทึกรายการ</button>
          <a class="btn btn-danger" href="{{ route('activities.index') }}">ยกเลิก</a>
        </div>
      </form>
    </div>
  </div>
</section>



@endsection