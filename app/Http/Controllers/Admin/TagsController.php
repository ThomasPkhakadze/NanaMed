<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index',[
            'tags' => $tags,
        ]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ge' => 'required',
            'name_en' => 'nullable',
            'name_ru' => 'required'
        ]);

        $tag = new Tag;

        $tag->name_ge = $request->name_ge;
        $tag->name_en = $request->name_en;
        $tag->name_ru = $request->name_ru;
        
        $tag->save();

        Session::flash('success');

        return redirect()->route('tags.index');


    }

    public function destroy($id)
    {
        $tag = Tag::find($id);

        $tag->delete();

        Session::flash('success');

        return redirect()->route('tags.index');

    }
}
