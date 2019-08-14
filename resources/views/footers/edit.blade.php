@extends('layouts.app')
@section('content')
    <form class="container" action="{{ url('footers/'.$footer->id) }}" method="post">
        @csrf
        {{method_field('PUT')}}
        <div class="row">
            <h3 class="col-12 dinar text-info mb-4">ویرایش فوتر</h3>
            <div class="col-md-4 my-2">
                <label for="title">عنوان فوتر</label>
                <input type="text" name="title" value="{{$footer->title}}" class="form-control">
            </div>
            <div class="col-md-8 my-2">
                <label for="title">آدرس</label>
                <input type="text" name="title" value="{{$footer->address}}" class="form-control">
            </div>
            <div class="col-md-6 my-2">
                <label for="description_1">توضیحات اول فوتر</label>
                <textarea name="description_1" rows="3" class="form-control" id="description_1">{{ $footer->description_1 }}</textarea>
            </div>
            <div class="col-md-6 my-2">
                <label for="description_2">توضیحات آخر فوتر</label>
                <textarea name="description_2" rows="3" class="form-control" id="description_2">{{ $footer->description_2 }}</textarea>
            </div>
            <div class="col-md-6 my-2">
                <label for="telephones">شماره تلفن ها</label>
                <textarea name="telephones" rows="3" class="form-control" id="telephones">{{ $footer->telephones_with_line_breaks() }}</textarea>
            </div>
            <div class="col-md-6 my-2">
                <label for="emails">ایمیل ها</label>
                <textarea name="emails" rows="3" class="form-control" id="emails">{{ $footer->emails_with_line_breaks() }}</textarea>
            </div>
            <div class="col-md-2 my-2">
                <label for="facebook">فیسبوک</label>
                <input type="text" name="facebook" value="{{$footer->facebook}}" class="form-control">
            </div>
            <div class="col-md-2 my-2">
                <label for="twitter">توییتر</label>
                <input type="text" name="twitter" value="{{$footer->twitter}}" class="form-control">
            </div>
            <div class="col-md-2 my-2">
                <label for="google">گوگل</label>
                <input type="text" name="google" value="{{$footer->google}}" class="form-control">
            </div>
            <div class="col-md-2 my-2">
                <label for="linkedin">لینکدین</label>
                <input type="text" name="linkedin" value="{{$footer->linkedin}}" class="form-control">
            </div>
            <div class="col-md-2 my-2">
                <label for="instagram">اینستاگرام</label>
                <input type="text" name="instagram" value="{{$footer->iinstagram}}" class="form-control">
            </div>
            <div class="col-md-2 my-2">
                <label for="telegram">تلگرام</label>
                <input type="text" name="telegram" value="{{$footer->telegram}}" class="form-control">
            </div>

        </div>
        <hr class="col-12">
        <div class="row">
            <div class="col-md-2 m-auto">
                <button type="submit" class="btn btn-primary btn-block" name="button">
                    <i class="ti-check ml-1"></i>
                    تأیید</button>
            </div>
        </div>
    </form>
@endsection
