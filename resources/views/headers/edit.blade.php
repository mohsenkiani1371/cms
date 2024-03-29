@extends('layouts.app')
@section('content')
    <form class="container" action="{{ url('headers/'.$header->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="row">
            <h3 class="col-12 dinar text-info mb-4">ویرایش هدر</h3>
            <div class="col-md-3 my-2">
                <label for="title">عنوان هدر</label>
                <input type="text" name="title" value="{{$header->title}}" class="form-control">
            </div>
            <div class="col-md-3 my-2">
                <label for="btn_name">نام دکمه</label>
                <input type="text" name="btn_name" value="{{$header->btn_name}}" class="form-control">
            </div>
            <div class="col-md-3 my-2">
                <label for="btn_link">لینک دکمه</label>
                <input type="text" name="btn_link" value="{{$header->btn_link}}" class="form-control">
            </div>
            <div class="col-md-3 my-2">
                <label for="bg_path">تصویر پس زمینه</label>
                <input type="file" name="bg_path" class="form-control">
            </div>
            <div class="col-md-12 my-2">
                <label for="description">متن هدر</label>
                <textarea name="description" rows="" cols="" class="form-control">{{$header->description}}</textarea>
            </div>
            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="mobile_visible" value="0">
                    <input type="checkbox" class="custom-control-input" name="mobile_visible" id="mobile_visible" value="1" @if ($header->mobile_visible) checked @endif >
                    <label class="custom-control-label" for="mobile_visible">اسلایدر موبایل را نمایش بده</label>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="preloader" value="0">
                    <input type="checkbox" class="custom-control-input" name="preloader" id="preloader" value="1" @if ($header->preloader) checked @endif>
                    <label class="custom-control-label" for="preloader">انیمیشن بارگذاری را نمایش بده</label>
                </div>
            </div>
            <hr class="col-12">

            <h3 class="col-12 dinar text-info mb-4">عکس های اسلایدر</h3>
            @foreach ($header->photos as $photo)
                <div class="col-md-3 my-2 photo-card">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset($photo->path) }}" class="img-fluid">
                        </div>
                        <div class="card-footer text-center">
                            <a href="javascript:void" class="delete-photo"  data-photo-id="{{ $photo->id }}">
                                <i class="ti-trash text-danger s-1-5x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr class="col-12">
            <div class="col-md-3 m-auto">
                <label for="slider">آپلود عکس</label>
                <input type="file" name="slider[]" class="form-control" multiple>
            </div>

        </div>
        <hr class="col-12">
        <div id="photos-to-be-deleted"></div>
        <div class="row">
            <div class="col-md-2 m-auto">
                <button type="submit" class="btn btn-primary btn-block" name="button">
                    <i class="ti-check ml-1"></i>
                    تأیید</button>
            </div>
        </div>
    </form>
@endsection
