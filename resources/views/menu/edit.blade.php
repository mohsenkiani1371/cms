@extends('layouts.app')
@section('content')
    <form action="{{url('menu')}}" method="post">
        @csrf
        <div id="box">
            <div class="row clone">
                @include('fragments.clone_trash', ['row_counts' => 1])

                <div class="col-md-2 my-2">
                    <label for="position">ترتیب</label>
                    <input type="number" id="position" name="position[]" value="" class="form-control">
                </div>
                <div class="col-md-3 my-2">
                    <label for="name">نام</label>
                    <input type="text" id="name" name="name[]" value="" class="form-control">
                </div>
                <div class="col-md-3 my-2">
                    <label for="icon">
                        آیکون
                        <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">(مشاهده لیست آیکون ها)</a>
                    </label>
                    <input type="text" id="icon" name="icon[]" value="" class="form-control">
                </div>
                {{-- <div class="col-md-3 my-2">
                    <label for="link">لینک</label>
                    <input type="text" id="link" name="link[]" value="" class="form-control">
                </div> --}}
                <hr class="col-10">
            </div>
        </div>

        @include('fragments.cloner')
        <hr>
        <div class="row">
            <div class="col-md-2 mr-auto">
                <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check ml-1"></i> تأیید </button>
            </div>
        </div>
    </form>
@endsection
