@extends('layouts.admin')

@section('header','Single Post view')

@section('content')
<hr>
<div class="container">
     <div class="row">
          <div class="col-md-8">
               <img src="{{ asset($post->image) }}" alt="" width="400px">
               <hr class="bg-primary">
               <h1>ქართული</h1>
               <h2>{{$post->title_ge}}</h5><br>
                    <span>{{$post->description_ge}}</span><br>
                    <p>{!! $post->content_ge !!}</p><br>

                    <hr class="bg-primary">
                    <h1>ინგლისური</h1>
                    <h2>{{$post->title_en}}</h5><br>
                         <span>{{$post->description_en}}</span><br>
                         <p>{!! $post->content_en !!}</p><br>

                         <hr class="bg-primary">
                         <h1>რუსული</h1>
                         <h2>{{$post->title_ru}}</h5><br>
                              <span>{{$post->description_ru}}</span><br>
                              <p>{!! $post->content_ru !!}</p><br>
          </div>
          <div class="col-md-4">
               <div class="well">
                    <dl class="dl-horizontal">
                         <dt>მთავარის ლინკი :</dt>
                         <dd> {{ url("/blog/{$post->id}", 'ge') }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                         <dt>შექმნის თარიღი :</dt>
                         <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                         <dt>განახლების თარიღი :</dt>
                         <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                         <div class="col-sm-4">
                              <a href="{{ route('posts.index') }}" class="btn btn-primary btn-block">Back</a>
                         </div>
                         <div class="col-sm-4">
                              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-block">Edit</a>
                         </div>
                         <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                              <div class="col-sm-4">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" href="{{ route('posts.destroy', $post->id) }}"
                                        class="btn btn-danger btn-block">delete</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>

@endsection