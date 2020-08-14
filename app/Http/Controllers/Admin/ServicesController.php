<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Session;
use File;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index',[
            'services' => $services,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required',
            'description_en' => 'nullable',
            'description_ru' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $service = new Service;

        $service->title_ge = $request->title_ge;
        $service->title_en = $request->title_en;
        $service->title_ru = $request->title_ru;

        $service->description_ge = $request->description_ge;
        $service->description_en = $request->description_en;
        $service->description_ru = $request->description_ru;

        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request->image = $lastPath;
            $service->image = $lastPath;

        $service->save();

        Session::flash('success');

        return redirect()->route('services.show', $service->id);
    }

    public function show($id)
    {
        $service = Service::find($id);

        return view('admin.services.show',[
            'service' => $service,
        ]);
    }

    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.services.edit',[
            'service' => $service,
        ]);

    }
    
    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $request->validate([
            'title_ge' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ru' => 'required|max:255',

            'description_ge' => 'required',
            'description_en' => 'nullable',
            'description_ru' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable'
        ]);

        $service->title_ge = $request->title_ge;
        $service->title_en = $request->title_en;
        $service->title_ru = $request->title_ru;

        $service->description_ge = $request->description_ge;
        $service->description_en = $request->description_en;
        $service->description_ru = $request->description_ru;

        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $service->image = $lastPath;
        }
        

        $service->save();

        Session::flash('success');
        return redirect()->route('services.show', $service->id);
    }

    public function delete($id)
    {
        $service = Service::find($id);

        $service->delete();

        Session::flash('success');

        return redirect()->route('services.index');
    }
}
