@extends('layouts.app')

@section('content')

<div class="text-left">
    <a href='{{ url("sections/create") }}' class="btn btn-primary"> <i class="fa fa-plus ml-1"></i> بخش جدید </a>
</div>

<h2 class="dinar text-center text-primary">نقشه سایت</h2>
<hr>
<div class="text-center p-3">
    <div class="card my-2">
        <div class="card-body bg-success text-light">
            <span class="lead">مدیریت منو</span>
        </div>
        <div class="card-footer text-left">
            <a href="#" class="text-decoration-none text-success"> <i class="fa fa-edit s-1-5x" title="ویرایش"></i> </a>
        </div>
    </div>
    <div class="card my-2">
        <div class="card-body bg-dark text-light">
            <span class="lead">مدیریت هدر</span>
        </div>
        <div class="card-footer text-left">
            <a href="{{url('headers/1/edit')}}" class="text-decoration-none text-success"> <i class="fa fa-edit s-1-5x" title="ویرایش"></i> </a>
        </div>
    </div>

    @foreach ($sections as $section)
        <div class="card my-2">
            <div class="card-body bg-warning">
                <span class="lead">{{ translate($section->type) }}</span>
            </div>
            <div class="card-footer text-left">
                <a href='#' class="text-decoration-none text-success mr-3">
                    <i class="fa fa-pencil s-1-5x" title="تغییر خصوصیات"></i>
                </a>
                <a href='{{ url("sections/$section->id/edit") }}' class="text-decoration-none text-success mr-3">
                    <i class="fa fa-edit s-1-5x" title="ویرایش محتویات"></i>
                </a>
                <a href='#' class="text-decoration-none text-danger mr-3">
                    <i class="fa fa-trash s-1-5x" title="حذف"></i>
                </a>
                @if ($section->visible == 0)
                    <a href="#" class="text-decoration-none text-primary"> <i class="fa fa-eye s-1-5x mr-3" title="نمایش"></i> </a>
                @else
                    <a href="#" class="text-decoration-none text-dark"> <i class="fa fa-eye-slash s-1-5x mr-3" title="عدم نمایش"></i> </a>
                @endif
            </div>
        </div>
    @endforeach

    <div class="card my-2">
        <div class="card-body bg-dark text-light">
            <span class="lead">مدیریت فوتر</span>
        </div>
        <div class="card-footer text-left">
            <a href="/footers/1/edit" class="text-decoration-none text-success"> <i class="fa fa-edit s-1-5x" title="ویرایش"></i> </a>
        </div>
    </div>
</div>
@endsection
