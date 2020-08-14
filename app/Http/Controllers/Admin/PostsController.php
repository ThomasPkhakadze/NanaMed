<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use File;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('admin.post.index',[
            'categories'=> $categories,
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create',[
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $request->validate([

            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required|max:255',
            'description_en' => 'nullable|max:255',
            'description_ru' => 'required|max:255',

            'content_ge' => 'required',
            'content_en' => 'nullable',
            'content_ru' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|alpha_dash|max:255|unique:posts,slug'
    
        ]);
        // Data->Variable
            $post = new Post;
            
            $post->title_ge = $request->title_ge;
            $post->title_en = $request->title_en;
            $post->title_ru = $request->title_ru;

            $post->description_ge = $request->description_ge;
            $post->description_en = $request->description_en;
            $post->description_ru = $request->description_ru;

            $post->content_ge = $request->content_ge;
            $post->content_en = $request->content_en;
            $post->content_ru = $request->content_ru;

            $post->slug = $request->slug;

            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $post->image = $lastPath;

            $post->save();
        // Messages        
            Session::flash('success');
                
            return redirect()->route('posts.show', $post->id) ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('admin.post.show',[
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        
        return view('admin.post.edit',[
            'categories'=> $categories,
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
       
       
        if($request->slug == $post->slug){

            $this->validate($request, [

                'title_ge' => 'required|max:255',
                'title_en' => 'nullable|max:255',
                'title_ru' => 'required|max:255',

                'description_ge' => 'required|max:255',
                'description_en' => 'nullable|max:255',
                'description_ru' => 'required|max:255',

                'content_ge' => 'required',
                'content_en' => 'nullable',
                'content_ru' => 'required',

                'image' => 'image|max:2048'
                                        
             ]);

        }else{
        $this->validate($request, [

            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required|max:255',
            'description_en' => 'nullable|max:255',
            'description_ru' => 'required|max:255',

           'content_ge' => 'required',
            'content_en' => 'nullable',
            'content_ru' => 'required',
            
            'image' => 'image|max:2048',
            'slug' => 'required|alpha_dash|max:255|unique:posts,slug'
    
        ]);}
        // Find and Replace
            
            
            $post->title_ge = $request->title_ge;
            $post->title_en = $request->title_en;
            $post->title_ru = $request->title_ru;

            $post->description_ge = $request->description_ge;
            $post->description_en = $request->description_en;
            $post->description_ru = $request->description_ru;

            $post->content_ge = $request->content_ge;
            $post->content_en = $request->content_en;
            $post->content_ru = $request->content_ru;

            $post->slug = $request->slug;

            if(!empty($request->image)){
                $newfilename = time() . rand() . '.' . $request->file('image')->extension();
                $path = $request->file('image')->move(public_path("images/"), $newfilename);
                $lastPath = "images/" . $newfilename;
                $request['image'] = $lastPath;
                $service->image = $lastPath;
            }
            
            $post->save();

            // Message

            Session::flash('success');

            // redirect to show

            return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $post = Post::find($id);

        $post->delete();

        Session::flash('success');

        return redirect()->route('posts.index');
    }
}
