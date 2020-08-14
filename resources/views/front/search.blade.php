@extends('layouts.front')

@section('content')
<div class="text-left p-3">
    <h3>Results for:</h3>
    <div class="container">
        <div class="row">
            @if ($counter && $counter == 3)
                    Nothing Found
               
                    @endif
                    @if (!empty($posts))
                        <div class="col-md-6">
                            @foreach ($posts as $post)
                        <hr>
                        <h2>{{ $post->title }}</h2>
                        <h6>{{ $post->description }}</h6>
                        {!! $post->content !!}
                        <hr>
                        <img src="{{ asset($post->image) }}" width="249px">
                        @endforeach
                        </div>
                    @endif
                    
                    @if (!empty($services))
                       <div class="col-md-6">
                        @foreach ($services as $service)
                        <h2>{{ $service->title }}</h2>
                        <h6>{!! $service->description !!}</h6>
                        <img src="{{ asset($service->image) }}" width="249px">
                        @endforeach
                       </div>
                    @endif

                    @if (!empty($abouts))
                        @foreach ($abouts as $about)
                        {!!  $about->content!!} 
                        <br><br>
                        @endforeach
                    @endif

                   

                


        </div>
    </div>
</div>



@endsection