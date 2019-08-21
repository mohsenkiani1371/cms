@extends('layouts.app')
@section('content')
    <form action="{{url('menu')}}" method="post">
        @csrf
        <div id="box">
            @foreach ($items as $item)
                <div class="row clone">
                    @include('fragments.clone_trash', ['row_counts' => count($items)])

                    <div class="col-md-1 my-2">
                        <label for="position">ترتیب</label>
                        <input type="number" id="position" name="position[]" value="{{$item->position}}" class="form-control" required>
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="name">نام</label>
                        <input type="text" id="name" name="name[]" value="{{$item->name}}" class="form-control">
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="icon">
                            آیکون
                            <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">(مشاهده لیست)</a>
                        </label>
                        <input type="text" id="icon" name="icon[]" value="{{$item->icon}}" class="form-control">
                    </div>
                    <div class="col-md-3 my-2">
                        <label for="external-link">لینک خارجی</label>
                        <input type="text" id="external-link" name="external_link[]" value="@unless($item->link[0] == '#') {{$item->link}} @endunless" class="form-control">
                    </div>
                    <div class="col-md-3 my-2">
                        <label for="internal-link">لینک داخلی (جایگزین لینک خارجی می شود)</label>
                        <select id="internal-link" name="internal_link[]" class="form-control">
                            <option value="">هیچ کدام</option>
                            @foreach ($sections as $section)
                                <option value="#section-{{$section->id}}" @if($item->link == '#section-'.$section->id) selected @endif>
                                    {{ $section->position }} -
                                    {{ translate($section->type) }} ({{ $section->title }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="col-11">
                </div>
            @endforeach

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
