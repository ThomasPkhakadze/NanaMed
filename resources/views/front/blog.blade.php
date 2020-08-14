@extends('layouts.main')

@section('content')
<div class="conatiner">
    <div class="row">
        <div class="col-md-12">
            <section class="medica-blog-area section_padding_100">
                <div class="container">
                    <div class="row">

                        <div class="col-1 col-lg-8">

                            @foreach ($posts as $post)
                            <!-- Single Blog Area Start  -->
                            <div class="single-blog-area">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="{{ asset($post->image) }}" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">{{  date('M j, Y ', strtotime($post->created_at)) }}</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <h4>{{ $post->title }}</h4>
                                    <div class="post-meta mb-30 d-flex align-items-center">
                                        <b>{{ $post->description }}</b>
                                    </div>
                                    {!! $post->content !!}
                                    <a href="{{ route('blog.single',[app()->getLocale(), 'slug' =>$post->slug]) }}">Read More</a>
                                </div>
                            </div>
                            @endforeach

                            <!-- Pagination Area -->
                            <div class="pagination-area">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="medica-blog-sidebar-area">
                                <!-- Medica Emergency Card -->
                                <div class="medica-emergency-card">
                                    <h5>{{ __('Contact Info') }}</h5>
                                    @foreach ($ci as $Ci)
                                    <h4>{!! $Ci->schedule !!}</h4>
                                    <h3>{!! $Ci->address !!}</h3>
                                        {!! $Ci->contact_info !!}
                                    @endforeach
                                </div>
                                <!-- Medica Doctors Card -->
                                <div class="medica-catagories-card px-0">
                                    <h5>{{ __('Services') }}</h5>
                                    <ul class="catagories-menu">
                                        @foreach ($services as $service)
                                            <li><a href="">{{ $service->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection