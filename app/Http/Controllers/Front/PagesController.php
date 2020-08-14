<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Faq;
use App\About;
use App\Slider;
use App\ContactInfo;
use App\Service;



class PagesController extends Controller
{
    public function getIndex(){
        $faq = FAQ::orderBy('created_at', 'desc')->limit(5)->get();
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        $about = About::all();
        $ci = ContactInfo::all();
        $sliders = Slider::all();
        $services = Service::all();

        return view('front.index',[
            'faq' => $faq,
            'posts' => $posts,
            'about' => $about,
            'ci' => $ci,
            'sliders' => $sliders,
            'services' => $services
            ]);

        // <a href="{{route('route-name', ['locale'=> app()->getLocale()])}}" > Visit </a>
    
    }
    
    public function getAbout(){
        return view('front.about');
    
    }

    
    public function getBlog(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $services = Service::all();
        $ci = ContactInfo::all();

        return view('front.blog',[
            'posts' => $posts,
            'services' => $services,
            'ci' => $ci
        ]);
    }

    public function singleBlog($slug){
        $post = Post::where('slug', '=', $slug)->first();

        return view('front.single',[
            'post' => $post
        ]);
    }

    
    public function getServices(){
        return view('front.services');
    
    }

    public function getContact(){
        return view('front.contact');
    
    }
    
  

    function search(Request $request)
    {

        // Search in post 

        
        $search = $request->search;

        $posts = Post::where('title_ge', 'LIKE', '%'.$search.'%')
        ->orWhere('title_en', 'LIKE', '%'.$search.'%')->orWhere('title_ru', 'LIKE', '%'.$search.'%')
        ->orWhere('description_ge', 'LIKE', '%'.$search.'%')->orWhere('description_en', 'LIKE', '%'.$search.'%')
        ->orWhere('description_ru', 'LIKE', '%'.$search.'%')->orWhere('content_ge', 'LIKE', '%'.$search.'%')
        ->orWhere('content_en', 'LIKE', '%'.$search.'%')->orWhere('content_ru', 'LIKE', '%'.$search.'%')->get();




        $services = Service::where('title_ge', 'LIKE', '%'.$search.'%')
        ->orWhere('title_en', 'LIKE', '%'.$search.'%')->orWhere('title_ru', 'LIKE', '%'.$search.'%')
        ->orWhere('description_ge', 'LIKE', '%'.$search.'%')->orWhere('description_en', 'LIKE', '%'.$search.'%')
        ->orWhere('description_ru', 'LIKE', '%'.$search.'%')->get();

        $about =About::where('content_ge', 'LIKE', '%'.$search.'%')
        ->orWhere('content_en', 'LIKE', '%'.$search.'%')->orWhere('content_ru', 'LIKE', '%'.$search.'%')->get();

    
        $counter = 0;
        if($posts->count() > 0){
            $counter++;
        }
            if($services->count() > 0){
                $counter++;
            }
                if($about->count() > 0){
                    $counter++;
                }

      
            return view('front.search',[
                'posts' => $posts,
                'services' => $services,
                'abouts' => $about,
                'counter' => $counter

            ]);



        
    }

}
