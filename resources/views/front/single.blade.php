@extends('layouts.main')

@section('content')
<div class="col-1 col-lg-12">

    
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
@endsection