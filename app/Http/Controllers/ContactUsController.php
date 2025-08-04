<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\contact_us;
use Illuminate\View\View;

class ContactUsController extends Controller
{
    
    public function index()
    {
        $contacts = contact_us::latest()->get();
        return view('Contact_us.index', compact('contacts'));
    }// End Method

  
    public function create()
    {
        $contact = contact_us::create();
        return view('Contact_us.create', compact('contact'));
    }// End Method

    public function store(Request $request)
    {
      $request->validate([
        'name' => 'nullable|string|max:100',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|regex:/\+?[0-9\s\-]{0,20}$/',
        'subject' => 'nullable|string|max:150',
        'message' => 'required|string|max:1000',
      ]);

        $contact = new contact_us;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->subject = $request->subject;
        $contact->message  = $request->message ;
        $contact->save();

        $notification = array (
            'message' => 'Your Messge Sent Sucessfully',
            'alert-type' => 'success'
        );
        // return redirect()->back()->with($notification);      
        return redirect()->back()->with('success','Your Messge Sent Sucessfully !');
    
    }// End Method

    public function destroy($id)
    {
     $contact = contact_us::findOrFail($id);

     contact_us::findOrFail($id)->delete();

     $notification = array (
      'message' => 'Messge Of User Deleted Sucessfully',
      'alert-type' => 'success'
  );
  // return redirect()->back()->with($notification);
  return redirect()->back()->with('success','تم الإرسال بنجاح !');

  }// End Method
}
