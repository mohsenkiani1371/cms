@extends('layouts.app')
@section('content')
    <form class="container" action='{{url("headers/$header->id")}}' method="post">
        @csrf
        {{method_field('PUT')}}
        <div class="row">
            <div class="col-md-4 my-2">
                <label for="title">عنوان هدر</label>
                <input type="text" name="title" value="{{$header->title}}" class="form-control">
            </div>
            <div class="col-md-4 my-2">
                <label for="btn_name">نام دکمه</label>
                <input type="text" name="btn_name" value="{{$header->btn_name}}" class="form-control">
            </div>
            <div class="col-md-4 my-2">
                <label for="btn_link">لینک دکمه</label>
                <input type="text" name="btn_link" value="{{$header->btn_link}}" class="form-control">
            </div>
            <div class="col-md-12 my-2">
                <label for="description">متن هدر</label>
                <textarea name="description" rows="" cols="" class="form-control">{{$header->description}}</textarea>
            </div>
            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">اسلایدر موبایل را نمایش بده</label>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">انیمیشن بارگذاری را نمایش بده</label>
                </div>
            </div>
            <hr class="col-12">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block" name="button">
                    <i class="ti-check ml-1"></i>
                    تأیید</button>
            </div>
        </div>
    </form>
@endsection
