@extends('frontend.layouts.default_layout')
@section('title') ติดต่อเรา @parent @endsection

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-primary">
                <div class="card-header bg-info">ติดต่อเรา</div>
                <div class="card-body text-primary p-2">
                    <div class="row mt-2">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('assets/images/peerasak.jpg') }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-9">
                            <div class="text-secondary font-weight-bold">งานพัฒนานิสิต</div>
                            <div class="text-primary font-weight-bold mt-2">นายพีระศักดิ์ พรหมเนตร</div>
                            <div class="text-secondary">นักวิชาการ</div>
                            <div class="text-secondary">อีเมล : perasak_may@hotmail.com</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('assets/images/krisda.jpg') }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-9">
                            <div class="text-secondary font-weight-bold">งานระบบสารสนเทศและประชาสัมพันธ์</div>
                            <div class="text-primary font-weight-bold mt-2">นายกฤษดา สุวรรณการณ์</div>
                            <div class="text-secondary">นักวิชาการคอมพิวเตอร์</div>
                            <div class="text-secondary">อีเมล : skrisda@tsu.ac.th</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection