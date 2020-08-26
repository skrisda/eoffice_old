<!DOCTYPE html>
<html>

<head>
    @include('frontend.includes.head_style')
</head>

<body>
    <!-- Site wrapper -->
    <div class="wrapper">

        <nav class="navbar navbar-expand-sm navbar-light bg-gradient-warning">
            <div class="container">
                <a class="navbar-brand text-primary" href="{{url('/')}}">Science Student</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">

                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item {{ (Request::segment(1) == '') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">หนัาหลัก </a>
                        </li>
                        <li class="nav-item {{ (Request::segment(1) == 'contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('contact') }}">ติดต่อเรา</a>
                        </li>
                        {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('service')}}">Service</a>
                        </li> --}}
                    </ul>

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item {{ (Request::segment(1) == 'stdlogin') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('stdlogin')}}">สำหรับนิสิต </a>
                        </li>
                        <li class="nav-item {{ (Request::segment(1) == 'login') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('login')}}">สำหรับผู้ดูแลระบบ </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>
    <!-- ./wrapper -->

    @include('frontend.includes.foot_script')
</body>

</html>