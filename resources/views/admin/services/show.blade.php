@extends('layouts.admin')

@section('content')
<hr>
<div class="container">
     <div class="row">
          <div class="col-md-8">
               <img src="{{ asset($service->image) }}" alt="" width="400px">
               <hr class="bg-primary">
               <h1>ქართული</h1>
               <h2>{{$service->title_ge}}</h5><br>
                    <span>{!! $service->description_ge !!}</span><br>

                    <hr class="bg-primary">
                    <h1>ინგლისური</h1>
                    <h2>{{$service->title_en}}</h5><br>
                         <span>{!! $service->description_en !!}</span><br>

                         <hr class="bg-primary">
                         <h1>რუსული</h1>
                         <h2>{{$service->title_ru}}</h5><br>
                              <span>{!! $service->description_ru !!}</span><br>
          </div>
          <div class="col-md-4">
               <div class="well">
                    <dl class="dl-horizontal">
                         <dt>მთავარის ლინკი :</dt>
                         <dd> {{ url("/blog/{$service->id}", 'ge') }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                         <dt>შექმნის თარიღი :</dt>
                         <dd> {{ date('M j, Y H:i', strtotime($service->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                         <dt>განახლების თარიღი :</dt>
                         <dd>{{ date('M j, Y H:i', strtotime($service->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                         <div class="col-sm-4">
                              <a href="{{ route('services.index') }}" class="btn btn-primary btn-block">Back</a>
                         </div>
                         <div class="col-sm-4">
                              <a href="{{ route('services.edit', $service->id) }}" class="btn btn-success btn-block">Edit</a>
                         </div>
                         <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                              <div class="col-sm-4">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" href="{{ route('services.destroy', $service->id) }}"
                                        class="btn btn-danger btn-block">delete</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection