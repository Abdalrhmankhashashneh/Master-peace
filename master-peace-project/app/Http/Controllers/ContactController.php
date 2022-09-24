<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Validator;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontactRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required||email||unique:contacts',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->status = 1;
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully we will contact you as soon as possible');

    }
    public function change($id){
        $contact = contact::find($id);
        $contact->status = 0;
        $contact->save();
        return redirect()->back()->with('success', 'status changed successfully');
    }

}
