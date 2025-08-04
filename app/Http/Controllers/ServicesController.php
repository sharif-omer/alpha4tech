<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function index()
    {
        $services_data = Services::all();
        return view('backend.services.index', compact('services_data'));
    }

    public function create()
    {
        $services_data = Services::all();
        return view('backend.services.create', compact('services_data'));
    }// End Method

    public function store(Request $request)
    {
        $request->validate([         
            'icon'        => 'required',
            'title'       => 'required',
            'description' => 'required',
        ]);

        $services_data = new Services;
        $services_data->icon = $request->icon;
        $services_data->title = $request->title;
        $services_data->description = $request->description;
        $services_data->save();

        $notification = array (
            'message' => 'Your Service Added Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('services.index')->with($notification);

    }// End Method

    public function show(Services $services)
    {
        return view('backend.services.show', compact('services_data'));

    }// End Method

   
    public function edit($id)
    {
        $services_data = Services::get();
        return view('backend.services.edit', compact('services_data'));
    }// End Method

   
    public function update(Request $request, $id)
    {
        $services_data->icon = $request->icon;
        $services_data->title = $request->title;
        $services_data->description = $request->description;
        $services_data->save();

        return redirect()->route('services.index');
    }// End Method

    public function destroy(Services $services, $id)
    {
        $services_data = Services::findOrFail($id);
        Services::findOrFail($id)->delete();
    
         $notification = array (
          'message' => 'Service Deleted Sucessfully',
          'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
    
     
    }// End Method
}
