<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactInfo;
use Session;

class ContactInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
       
    }
    public function index()
    {
        $ci = ContactInfo::all();

        return view('admin.contact-info.index',[
            'ci' => $ci ,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'schedule_ge' => 'required',
            'schedule_en' => 'nullable',
            'schedule_ru' => 'required',

            'contact_info_ge' =>'required',
            'contact_info_en' =>'nullable',
            'contact_info_ru' =>'required',

            'address_ge' => 'required',
            'address_en' => 'nullable',
            'address_ru' => 'required'
        ]);

        $ci = new ContactInfo;

        $ci->schedule_ge = $request->schedule_ge;
        $ci->schedule_en = $request->schedule_en;
        $ci->schedule_ru = $request->schedule_ru;

        $ci->contact_info_ge = $request->contact_info_ge;
        $ci->contact_info_en = $request->contact_info_en;
        $ci->contact_info_ru = $request->contact_info_ru;

        $ci->address_ge = $request->address_ge;
        $ci->address_en = $request->address_en;
        $ci->address_ru = $request->address_ru;

        $ci->save();

        Session::flash('success');

        return redirect()->route('contact-info.index');
    }
    public function edit($id){
        $ci = ContactInfo::find($id);
        return view('admin.contact-info.edit', [
            'ci' => $ci,
        ]);
    }

    public function update(Request $request, $id)
    {
        $ci = ContactInfo::find($id);

        $this->validate($request, [
            'schedule_ge' => 'required',
            'schedule_en' => 'nullable',
            'schedule_ru' => 'required',

            'contact_info_ge' =>'required',
            'contact_info_en' =>'nullable',
            'contact_info_ru' =>'required',

            'address_ge' => 'required',
            'address_en' => 'nullable',
            'address_ru' => 'required'
        ]);

        $ci->schedule_ge = $request->schedule_ge;
        $ci->schedule_en = $request->schedule_en;
        $ci->schedule_ru = $request->schedule_ru;

        $ci->contact_info_ge = $request->contact_info_ge;
        $ci->contact_info_en = $request->contact_info_en;
        $ci->contact_info_ru = $request->contact_info_ru;

        $ci->address_ge = $request->address_ge;
        $ci->address_en = $request->address_en;
        $ci->address_ru = $request->address_ru;

        $ci->save();
        Session::flash('success');

        return redirect()->route('contact-info.index');
    }

    public function destroy($id)
    {
        $ci = ContactInfo::find($id);

        $ci->delete();

        Session::flash('success');

        return redirect()->route('contact-info.index');
    }
}
