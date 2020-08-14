<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Session;
use File;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
       
    }

    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.index',[
            'sliders' => $sliders
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required',
            'description_en' => 'nullable',
            'description_ru' => 'required',

            'button_ge'=> 'required|max:20',
            'button_en'=> 'nullable|max:20',
            'button_ru'=> 'required|max:20',

            'url' => 'required|max:15',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        $slider = new Slider;

        $slider->title_ge = $request->title_ge;
        $slider->title_en = $request->title_en;
        $slider->title_ru = $request->title_ru;

        $slider->description_ge = $request->description_ge;
        $slider->description_en = $request->description_en;
        $slider->description_ru = $request->description_ru;
        
        $slider->button_ge = $request->button_ge;
        $slider->button_en = $request->button_en;
        $slider->button_ru = $request->button_ru;

        $slider->url = $request->url;

        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $slider->image = $lastPath;
        $slider->save();

        Session::flash('success');

        return redirect()->route('slider.index');


    }
    public function show($id)
    {
        return null;
    }

    

    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.edit',[
            'slider' => $slider
        ]);
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $request->validate([
            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required',
            'description_en' => 'nullable',
            'description_ru' => 'required',

            'button_ge'=> 'required|max:20',
            'button_en'=> 'nullable|max:20',
            'button_ru'=> 'required|max:20',

            'url' => 'required|max:15',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        $slider->title_ge = $request->title_ge;
        $slider->title_en = $request->title_en;
        $slider->title_ru = $request->title_ru;

        $slider->description_ge = $request->description_ge;
        $slider->description_en = $request->description_en;
        $slider->description_ru = $request->description_ru;
        
        $slider->button_ge = $request->button_ge;
        $slider->button_en = $request->button_en;
        $slider->button_ru = $request->button_ru;
        
        $slider->url = $request->url;


        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $service->image = $lastPath;
        }
        $slider->save();
        Session::flash('success');

        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        Session::flash('success');

        return redirect()->route('slider.index');
    }
}
