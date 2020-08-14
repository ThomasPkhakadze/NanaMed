@extends('layouts.admin')

@section('content')
<form role="form" action=" {{ route('about.update',['id' =>  $about->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="box-body">
        <h2>ქართული</h2>
        <div class="form-group py-4">
            <label for="content_ge">ტექსტი</label>
            <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი"
                name="content_ge">{{ $about->content_ge }}</textarea>
        </div>
        <hr class="bg-primary">
        <h2>ინგლისური</h2>
        <div class="form-group py-4">
            <label for="content_en">ტექსტი</label>
            <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი"
                name="content_en">{{ $about->content_en}}</textarea> </div>
        <hr class="bg-primary">
        <h2>რუსული</h2>
        <div class="form-group py-4">
            <label for="content_ru">ტექსტი</label>
            <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი"
                name="content_ru">{{ $about->content_ru }}</textarea>
        </div>
        <hr class="bg-primary">
        <div class="form-group">
            <label for="image">სურათი</label>
            <input type="file" id="image" name="image">
            <img src="{{asset( $about->image) }}" width="200px">
        </div>
        <input type="hidden" value="{{ $about->id }}">
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection