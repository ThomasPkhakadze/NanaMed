@extends('layouts.admin')


@section('content')
<form action=" {{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <h2>ქართული</h2>
                    <div class="form-group">
                        <label for="title_ge">სათაური</label>
                        <input type="text" class="form-control" name="title_ge" value="{{ $service->title_ge }}">
                    </div>
                    <div class="form-group">
                        <label for="description_ge">აღწერა</label>
                        <textarea name="description_ge" class="textarea">{{ $service->description_ge }}</textarea>
                    </div>

                    <hr class="br-primary">

                    <h2>ინგლისური</h2>
                    <div class="form-group">
                        <label for="title_en">სათაური</label>
                        <input type="text" class="form-control" name="title_en" value="{{ $service->title_en }}">
                    </div>
                    <div class="form-group">
                        <label for="description_en">აღწერა</label>
                        <textarea name="description_en" class="textarea">{{ $service->description_en }}</textarea>
                    </div>


                    <hr class="br-primary">

                    <h2>რუსული</h2>
                    <div class="form-group">
                        <label for="title_ru">სათაური</label>
                        <input type="text" class="form-control" name="title_ru" value="{{ $service->title_ru }}">
                    </div>
                    <div class="form-group">
                        <label for="description_ru">აღწერა</label>
                        <textarea name="description_ru" class="textarea">{{ $service->description_ru }}</textarea>
                    </div>

                    <hr class="br-primary">

                    


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href=" {{ route('posts.index') }} " class="btn btn-danger"> Cancel</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group" height="300px">
                    <label for="image">სურათი</label>
                    <input type="file" id="image" name="image"><br>
                    <img src="{{ asset($service->image) }}" width="300px" class="m-3">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection