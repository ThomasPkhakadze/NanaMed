@extends('layouts.admin')

@section('content')
<form role="form" action=" {{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="box-body">
      <h2>ქართული</h2>
      <div class="form-group">
        <label for="title_ge">სათაური</label>
        <input type="text" class="form-contdol" name="title_ge" value="{{ $slider->title_ge }}">
      </div>
      <div class="form-group">
        <label for="description_ge">აღწერა</label>
        <textarea name="description_ge" class="textarea">{{ $slider->description_ge }}</textarea>
      </div>
      <div class="form-group">
        <label for="button_ge">ღილაკი</label>
        <input type="text" class="form-contdol" name="button_ge" value="{{ $slider->button_ge }}">
      </div>

      <hr class="bg-primary">

      <div class="box-body">
        <h2>ინგლისური</h2>
        <div class="form-group">
          <label for="title_en">სათაური</label>
          <input type="text" class="form-contdol" name="title_en" value="{{ $slider->title_en }}">
        </div>
        <div class="form-group">
          <label for="description_en">აღწერა</label>
          <textarea name="description_en" class="textarea">{{ $slider->description_en }}</textarea>

        </div>
        <div class="form-group">
          <label for="button_en">ღილაკი</label>
          <input type="text" class="form-contdol" name="button_en" value="{{ $slider->button_en }}">
        </div>

        <hr class="bg-primary">

        <div class="box-body">
          <h2>რუსული</h2>
          <div class="form-group">
            <label for="title_ru">სათაური</label>
            <input type="text" class="form-contdol" name="title_ru" value="{{ $slider->title_ru }}">
          </div>
          <div class="form-group">
            <label for="description_ru">აღწერა</label>
            <textarea name="description_ru" class="textarea">{{ $slider->description_ru }}</textarea>

          </div>
          <div class="form-group">
            <label for="button_ru">ღილაკი</label>
            <input type="text" class="form-contdol" name="button_ru" value="{{ $slider->button_ru }}">
          </div>

          <hr class="bg-primary">

          <div class="form-group">
            <label for="url">URL(გადასამიმართებელი)</label>
            <input type="text" class="form-contdol" id="url" name="url" value="{{ $slider->url }}">
          </div>
          <div class="form-group">
            <label for="image">სურათი</label>
            <input type="file" id="image" name="image">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </form>
@endsection