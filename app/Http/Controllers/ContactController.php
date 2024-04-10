<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function list(){
        return view('list_contact');
    }

    public function index(){
        $contacts = Contact::get();
        return view('list_contact',['contacts'=>$contacts]);
    }

    public function edit($id){
       $contacts = Contact::where('id', $id)->first();
       $data = [
        'contact' => $contacts,
       ];
       return view('edit_contact', $data);
    }

    public function update(Request $request,$id){
        $contacts = Contact::find($id);
        $contacts->name = $request->name;
        $contacts->address = $request->address;
        $contacts->email = $request->email;

        $contacts->save();
        return redirect()->route('contact-list');
    }


}
