@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Admin dashboard
                </div>
            </div>
        </div>
    </div>
</div> --}}

<h2 class="dinar text-center text-primary">نقشه سایت</h2>
<hr>
<div class="text-center p-3">
    <div class="card my-2">
        <div class="card-body">
            <span class="lead">مدیریت منو</span>
        </div>
        <div class="card-footer text-left">
            <a href="#" class="text-decoration-none text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
            @if (true)
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
            @else
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
            @endif
        </div>
    </div>
    <div class="card my-2">
        <div class="card-body">
            <span class="lead">مدیریت هدر</span>
        </div>
        <div class="card-footer text-left">
            <a href="#" class="text-decoration-none text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
            @if (true)
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
            @else
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
            @endif
        </div>
    </div>
    <div class="card my-2">
        <div class="card-body">
            <span class="lead">مدیریت فوتر</span>
        </div>
        <div class="card-footer text-left">
            <a href="#" class="text-decoration-none text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
            @if (true)
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
            @else
                <a href="#" class="text-decoration-none text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
            @endif
        </div>
    </div>
</div>
@endsection
