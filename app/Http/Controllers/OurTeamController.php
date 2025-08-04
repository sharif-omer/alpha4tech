<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Storage;
use App\Models\User;
use App\Models\Team;
use Illuminate\View\View;
use Image;

class OurTeamController extends Controller
{
    
    public function index(Team $team)
    {
        $team_data = Team::all();
        return view('backend.our_team.index', compact('team_data'));
    }// End Method

    public function create()
    {
        return view('backend.our_team.create');
    }// End Method

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'current_position' => 'required|string|max:255',
            'facebook_url' => 'nullable|url',
            'instgram_url' => 'nullable|url',
            'linkdin_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'team_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        if ($request->hasFile('team_image')) {
            $imagePath = $request->file('team_image')->store('team_image', 'public');
            $validated['team_image'] = $imagePath;

            Team::create($validated);
            return redirect()->route('team.index')->with('succes', 'Done');
           
        }
             
    }// End Method

  
    public function show($id)
    {
        return view('backend.our_team.show');
    }// End Method

    public function edit(Team $team)
    {
        return view('backend.our_team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'current_position' => 'required|string|max:255',
            'facebook_url' => 'nullable|url',
            'instgram_url' => 'nullable|url',
            'linkdin_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'team_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        if ($request->hasFile('team_image')) {

            if ($team->team_image && \Storage::disk('public')->exists($team->team_image)) {

               \Storage::disk('public')->delete($team->team_image);
            }

            $validated['team_image'] = $request->file('team_image')->store('team_image', 'public');

            $team->update($validated);
            // return view('backend.our_team.index');    
        }
        return redirect()->route('team.index')->with('succes', 'Done');
        // return redirect()->back();


        // $team_data->name = $request->name;
        // $team_data->current_position = $request->current_position;
        // $team_data->facebook_url = $request->facebook_url;
        // $team_data->instgram_url = $request->instgram_url;
        // $team_data->linkdin_url = $request->linkdin_url;
        // $team_data->twitter_url = $request->twitter_url;
        // $team_data->save();

        // $slideData = $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'nullable|string',
        //     'image' => 'nullable|image|max:2048',
        // ]);
        // if($request->hasFile('image'))
        // {
        //     $slideData['image'] = $request->file('image')->store('slides', 'public');
        // }
        // $slider->update($slideData);
        // return redirect()->route('slider.index')->with('success', 'تم التديل بنجاح');
    }// End Method

    public function destroy($id)
    {
        $team_data = Team::findOrFail($id);

        Team::findOrFail($id)->delete();
    
         $notification = array (
          'message' => 'User Deleted  Sucessfully',
          'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
    
     }
    
}
