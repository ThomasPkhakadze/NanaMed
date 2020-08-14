<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;
use Session;


class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
       
    }

    public function index()
    {
        $faq = Faq::all();
        return view('admin.faq.index',[
            'faq' => $faq,
        ]);
    }
   
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'question_ge' => 'required|max:255',
            'question_en' => 'nullable|max:255',
            'question_ru' => 'required|max:255',

            'answer_ge' => 'required',
            'answer_en' => 'nullable',
            'answer_ru' => 'required'

        ]);

        $faq = new Faq;

        $faq->question_ge = $request->question_ge;
        $faq->question_en = $request->question_en;
        $faq->question_ru = $request->question_ru;

        $faq->answer_ge = $request->answer_ge;
        $faq->answer_en = $request->answer_en;
        $faq->answer_ru = $request->answer_ru;

        $faq->save();

        Session::flash('success');

        return redirect()->route('faq.index');
    }


    public function edit($id)
    {
        $faq = Faq::find($id);
    
        return view('admin.faq.edit',[
            'faq' => $faq,
        ]);
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);

        $this->validate($request, [
            'question_ge' => 'required|max:255',
            'question_en' => 'nullable|max:255',
            'question_ru' => 'required|max:255',

            'answer_ge' => 'required',
            'answer_en' => 'nullable',
            'answer_ru' => 'required'
        ]);
        
        $faq->question_ge = $request->question_ge;
        $faq->question_en = $request->question_en;
        $faq->question_ru = $request->question_ru;

        $faq->answer_ge = $request->answer_ge;
        $faq->answer_en = $request->answer_en;
        $faq->answer_ru = $request->answer_ru;
        
        $faq->save();

        Session::flash('success', 'Faq updated successfully');

        return redirect()->route('faq.index');
    }

    
    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        Session::flash('success', 'Faq was Removed successfully.');

        return redirect()->route('faq.index');
    }
}
