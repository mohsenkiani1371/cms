@extends('layouts.app')
@section('content')
    <form action="{{url('contents/'.$section->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="box">
            <div class="row clone">
                <div class="col-md-3 my-2">
                    <label for="position">ترتیب</label>
                    <input type="number" name="position[]" class="form-control" required>
                </div>
                @foreach ($section->inputs() as $input)
                    @include('contents.partials.' . $input)
                @endforeach
                <hr class="col-10">
            </div>
        </div>

        <div class="add-row bg-dark p-2">
            <div class="col-md-3 m-auto">
                <a id="cloner" class="btn btn-primary btn-block bg-success text-light"> <i class="fa fa-plus ml-1"></i> افزودن مورد جدید </a>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-2 mr-auto">
                <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check ml-1"></i> تأیید </button>
            </div>
        </div>
    </form>
@endsection
