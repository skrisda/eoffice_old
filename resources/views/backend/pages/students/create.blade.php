@extends('backend.layouts.default_layout')
@section('title') เพิ่มนิสิต @parent @endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>เพิ่มนิสิต</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('students.index') }}">รายชื่อนิสิต</a></li>
            <li class="breadcrumb-item active">เพิ่มนิสิต</li>
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
        <div class="card-header">
            <h3 class="card-title">เพิ่มนิสิต</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body p-0">
        <form role="form" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="card-body">

                 <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="std_id">รหัสนิสิต</label>
                            <input type="text" class="form-control {{ $errors->has('std_id') ? 'is-invalid' :'' }}" id="std_id" name="std_id" placeholder="ป้อนรหัสนิสิต" value="{{old('std_id')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('std_id') }}</small></span>
                          </div>
        
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="tname" id="tname1" value="นาย" checked>
                              <label class="form-check-label" for="tname1">
                                นาย
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="tname" id="tname2" value="นางสาว">
                              <label class="form-check-label" for="tname2">
                                นางสาว
                              </label>
                            </div>
                          </div>
        
                          <div class="form-group">
                            <label for="fname">ชื่อ</label>
                            <input type="text" class="form-control  {{ $errors->has('fname') ? 'is-invalid' :'' }}" id="fname" name="fname" placeholder="ป้อนชื่อ" value="{{old('fname')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('fname') }}</small></span>
                          </div>
        
                          <div class="form-group">
                            <label for="lname">นามสกุล</label>
                            <input type="text" class="form-control {{ $errors->has('lname') ? 'is-invalid' :'' }}" id="lname" name="lname" placeholder="ป้อนนามสกุล" value="{{old('lname')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('lname') }}</small></span>
                          </div>
        
                          <div class="form-group">
                            <label for="cat_id">หลักสูตร</label>
                            <select class="form-control {{ $errors->has('major_id') ? 'is-invalid' :'' }}" id="major_id" name="major_id">
                              <option value="">--- กรุณาเลือก ---</option>
                              @foreach ($majors as $major)
                                  <option value="{{ $major->major_id }}">{{ $major->major_name }}</option>
                              @endforeach
                            </select>
                            <span class="help-block text-danger"><small>{{ $errors->first('major_id') }}</small></span>
                          </div>

                          <div class="form-group">
                            <label for="gender">เพศ</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" checked>
                              <label class="form-check-label" for="gender1">
                                ชาย
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="gender2" value="2">
                              <label class="form-check-label" for="gender2">
                                หญิง
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="gender3" value="3">
                              <label class="form-check-label" for="gender3">
                                เพศที่สาม
                              </label>
                            </div>
                          </div>
        
                          

                     </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' :'' }}" id="email" name="email" placeholder="ป้อนที่อยู่อีเมล" value="{{old('email')}}">
                        <span class="help-block text-danger"><small>{{ $errors->first('email') }}</small></span>
                      </div>

                    
                      <div class="form-group">
                        <label for="tel">โทร</label>
                        <input type="text" class="form-control {{ $errors->has('tel') ? 'is-invalid' :'' }}" id="tel" name="tel" placeholder="ป้อนเบอร์โทรศัพท์" value="{{old('tel')}}">
                        <span class="help-block text-danger"><small>{{ $errors->first('tel') }}</small></span>
                      </div>

                      <div class="form-group">
                        <label for="status">สถานะ</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                          <label class="form-check-label" for="status1">
                            กำลังศึกษา
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status2" value="2">
                          <label class="form-check-label" for="status2">
                           นิสิตสมทบ
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status3" value="3">
                          <label class="form-check-label" for="status3">
                            จบการศึกษา
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status4" value="4">
                          <label class="form-check-label" for="status4">
                            ลาออก
                          </label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="adv1">อาจารย์ที่ปรึกษา #1</label>
                        <select class="form-control {{ $errors->has('adv1') ? 'is-invalid' :'' }}" id="adv1" name="adv1">
                          <option value="">--- กรุณาเลือก ---</option>
                          @foreach ($advisors as $advisor)
                              <option value="{{ $advisor->id }}">{{ $advisor->tname.$advisor->fname." ".$advisor->lname }}</option>
                          @endforeach
                        </select>
                        <span class="help-block text-danger"><small>{{ $errors->first('adv1') }}</small></span>
                      </div>

                      <div class="form-group">
                        <label for="adv1">อาจารย์ที่ปรึกษา #2</label>
                        <select class="form-control {{ $errors->has('adv2') ? 'is-invalid' :'' }}" id="adv2" name="adv2">
                          <option value="">--- กรุณาเลือก ---</option>
                          @foreach ($advisors as $advisor)
                              <option value="{{ $advisor->id }}">{{ $advisor->tname.$advisor->fname." ".$advisor->lname }}</option>
                          @endforeach
                        </select>
                        <span class="help-block text-danger"><small>{{ $errors->first('adv2') }}</small></span>
                      </div>
                        {{-- <div class="form-group">
                                <label for="product_image">ภาพสินค้า</label>
                                <img src="{{asset('assets/images/noImg.jpg')}}" id="output" class="img-fluid rounded ">
                                <span class="btn btn-primary btn-file">
                                    เลือกไฟล์ <input type="file" name="product_image" id="product_image" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                </span>
                                <p class="label-uppic">เลือกภาพสินค้า</p>
                          </div> --}}
                    </div>
                 </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">บันทึกรายการ</button>
                  <a class="btn btn-danger" href="{{ route('students.index') }}">ยกเลิก</a>
                </div>
              </form>
        </div>
    </div>
  </section>



@endsection