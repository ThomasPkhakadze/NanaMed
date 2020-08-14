<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use File;
use Session;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $about = About::all();
        return view('admin.about.index',[
            'about' => $about,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content_ge' => 'required',
            'content_en' => 'nullable',
            'content_ru' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $about = new About;

        $about->content_ge = $request->content_ge;
        $about->content_en = $request->content_en;
        $about->content_ru = $request->content_ru;
        
        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $about->image = $lastPath;
        $about->save();

        Session::flash('success');

        return redirect()->route('about.index');
    }

    public function edit($id)
    {
        $about = About::find($id);

        return view('admin.about.edit',[
            'about' => $about,
        ]);
    }

    public function update(Request $request, $id)
    {

        $about = About::find($id);

        $request->validate([
            'content_ge' => 'required',
            'content_en' => 'nullable',
            'content_ru' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $about->content_ge = $request->content_ge;
        $about->content_en = $request->content_en;
        $about->content_ru = $request->content_ru;

        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $service->image = $lastPath;
        }
            
        $about->save();

        Session::flash('success');

        return redirect()->route('about.index');

    }
    public function destroy($id)
    {
        $about = About::find($id);

        $about->delete();
        
        Session::flash('success');

        return redirect()->route('about.index');
    }
}
