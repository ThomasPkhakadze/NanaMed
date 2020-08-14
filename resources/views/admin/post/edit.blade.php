@extends('layouts.admin')

@section('header', 'Edit Posts')

@section('content')
<form role="form" action=" {{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="content">
    <div class="row">
      <div class="col-8 sm-4">
        <div class="box-body">
          <hr class="bg-primary">
          <h1>ქართული</h1>
          <div class="form-group">
            <label for="title_ge">სათაური</label>
            <input type="text" class="form-control" name="title_ge" value="{{$post->title_ge}}">
          </div>
          <div class="form-group">
            <label for="description_ge">აღწერა</label>
            <input type="text" class="form-control" name="description_ge" value=" {{$post->description_ge}}">
          </div>
          <div class="form-group">
            <label for="content_ge">ტექსტი</label>
            <textarea name="content_ge" class="textarea">{!! $post->content_ge !!}</textarea>
          </div>


          <hr class="bg-primary">
          <h1>ინგლისური</h1>
          <div class="form-group">
            <label for="title_en">სათაური</label>
            <input type="text" class="textarea" name="title_en" value="{{$post->title_en}}">
          </div>
          <div class="form-group">
            <label for="description_en">აღწერა</label>
            <input type="text" class="form-control" name="description_en" value=" {{$post->description_en}}">
          </div>
          <div class="form-group">
            <label for="content_en">ტექსტი</label>
            <textarea name="content_en" class="textarea">{!! $post->contetnt_en !!}</textarea>
          </div>

          <hr class="bg-primary">
          <h1>რუსული</h1>
          <div class="form-group">
            <label for="title_ru">სათაური</label>
            <input type="text" class="form-control" name="title_ru" value="{{$post->title_ru}}">
          </div>
          <div class="form-group">
            <label for="description_ru">აღწერა</label>
            <input type="text" class="form-control" name="description_ru" value=" {{$post->description_ru}}">
          </div>
          <div class="form-group">
            <label for="content_ru">ტექსტი</label>
            <textarea name="content_ru" class="textarea">{!! $post->content_ru !!}</textarea>
          </div>

          <hr class="bg-primary">


        </div>
        <!-- /.box-body -->
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="image">აღწერა</label>
          <input type="file" class="form-control" name="image">
          <img src="{{ asset($post->image) }}" alt="Null" width="90%">
        </div>
        <div class="form-group">
          <label for="slug">ლინკი</label>
          <input type="text" class="form-control" name="slug" value=" {{$post->slug}}">
        </div>
      </div>
    </div>
  </div>


  <div class="box-footer">
    <button type="submit" class="btn btn-success">Save changes</button>
    <a href="{{ route('posts.show', $post->id)}}" class="btn btn-danger btn-box ">Cancel</a>
  </div>
</form>


@endsection