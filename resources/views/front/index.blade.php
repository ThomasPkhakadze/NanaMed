@extends('layouts.front')

@section('title')
<title></title>

@endsection
@section('content')
<!-- ***** Hero Area Start ***** -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        @foreach ($sliders as $slider)
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-600 bg-img" style="background-image: url({{ asset($slider->image) }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">{{ $slider->title }}
                            </h2>
                            <h5 data-animation="fadeInUp" data-delay="400ms">{!! $slider->description !!}</h5>
                            <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                <a href="{{ route('pages.' . $slider->url,['language' => app()->getLocale()]) }}"
                                    class="btn medica-btn">Make an Appointment</a>
                                <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- ***** Hero Area End ***** -->

<!-- ***** Contact Info Area Start ***** -->
<div class="medica-contact-info-area">
    <div class="container">
        <div class="row align-items-center justify-content-center p-5">
            @foreach ($ci as $cInfo)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{ asset('index/img/icons/alarm-clock.png') }}" alt="">
                    </div>
                    <div class="contact-meta">
                        {!! $cInfo->schedule !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{ asset('index/img/icons/envelope.png') }}" alt="">
                    </div>
                    <div class="contact-meta">
                        {!! $cInfo->contact_info !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{ asset('index/img/icons/map-pin.png') }}" alt="">
                    </div>
                    <div class="contact-meta">
                        {!! $cInfo->address !!}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ***** About Us Area Start ***** -->
<section class="medica-about-us-area">
    <!-- Card Area -->
    <div class="medica-card-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="medica-emergency-card wow fadeInUp" data-wow-delay="0.2s">
                        <h5>For Emergencies</h5>
                        <h4>+0080 954 4557 884</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id explicabo quam
                            quo nisi nihil ducimus, possimus. Lorem ipsum dolor sit amet.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="medica-doctors-card wow fadeInUp" data-wow-delay="0.4s">
                        <h5>The Doctors</h5>
                        <p>Sit amet, consectetur adipisicing elit. Perferendis id explicabo quam quo nisi nihil
                            ducimus, possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
                            dolor sit amet, consectetur.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="medica-appointment-card wow fadeInUp" data-wow-delay="0.6s">
                        <h5>Book an apppointment</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control text-white" name="name" id="name"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="number" id="number" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                            <button type="submit" class="btn medica-btn mt-15">Make an Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->


<!-- ***** About Us Area Start ***** -->
<section class="medica-about-us-area">
    <!-- About Contact -->
    <div class="medica-about-content p-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 ">
                    <div class="medica-about-text fadeInUp" data-wow-delay="0.2s">
                        <h2>{{ __('About us') }}</h2>
                        @foreach ($about as $About)
                        {!! $About->content !!}
                        @endforeach
                        <a href="#" class="btn medica-btn btn-2">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="medica-about-thumbnail fadeInUp" data-wow-delay="0.2s">
                        @foreach ($about as $About)
                        <img src="{{asset($About->image)}} " width="70%">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->
<!-- ***** Services Area Start ***** -->
<section class="medica-services-area section_padding_100 bg-img "
    style="background-image: url({{ asset('images/background.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <img src="{{ asset('index/img/icons/hospital2.png') }}" alt="">
                    <h2>{{ __('Services') }}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($services as $service)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset($service->image) }}" width="150px">
                    <h5>{{ $service->title }}</h5>
                    {!! $service->description !!}
                </div>
            </div>
            @endforeach


            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
                <a href="#" class="btn medica-btn">See All Services</a>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area End ***** -->


<!-- ***** Blog Area Start ***** -->
<div class="blog-area">
    <div class="col-lg-12">
        <div class="text-center pb-3">
            <h2>{{__('Blog')}}</h2>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-12 col-lg-6">
                <div class="single-blog-area">
                    <!-- Post Thumb -->
                    <div class="post-thumb">
                        <img src="{{ asset($post->image)}}" alt="" width="500px">
                        <!-- Post Date -->
                        <div class="post-date">
                            <a href="#">{{ date('M j, Y ', strtotime($post->created_at)) }}</a>
                        </div>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <h4>{{$post->title}}</h4>
                        <div class="post-meta mb-30 d-flex align-items-center">
                            <p class="author mb-0">{{ $post->description }}</p>
                        </div>
                        <b>{!! $post->content !!}</b><br>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>


<div class="col-12">
    <!-- ***** Testimonials Area Start ***** -->
    <section class="medica-testimonials-area section_padding_100 bg-img background-overlay"
        style="background-image: url({{ asset('index/img/bg-img/hero2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading white-heading">
                        <img src="img/icons/stethoscope.png" alt="">
                        <h2>Clients Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-slider owl-carousel">
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus
                                vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel
                                tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus
                                vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel
                                tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus
                                vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel
                                tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->
</div>
<!-- ***** Blog Area End ***** -->
<div class="col-md-12 faq-area">


    <div class="col-6 bg-gradient">
        <!-- ***** FAQ Area Start ***** -->

        <div class="text-center py-3">
            <h5>{{__('FAQ')}}</h5>
        </div>
        @foreach ($faq as $FAQ)
        <div class="accordions m-2" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel single-accordion">

                <div class="text-left">
                    <h6>
                        <a role="button" class="" aria-expanded="true" aria-controls="{{$FAQ->id}}"
                            data-toggle="collapse" data-parent="#accordion" href="#{{$FAQ->id}}">
                            {!! $FAQ->question!!}
                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        </a>
                    </h6>
                    <div id="{{$FAQ->id}}" class="accordion-content collapse show" style="text-align: left">
                        {!! $FAQ->answer !!}
                    </div>
                </div>

            </div>


        </div>
        @endforeach
        <!-- ***** FAQ Area End ***** -->
    </div>
</div>





@endsection