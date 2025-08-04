<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;
use Illuminate\Support\Facades\Auth;

class HomeSliderController extends Controller
{
    public function HomeSlider()
    {
        $homeSlide = HomeSlide::find(1);
        return view('admin.homeSlide.home_slide_all', compact('homeSlide'));

    } //End Method

    public function updateSlider(Request $request)
    {
     $slide_id = $request->id;
     if($request->file('home_slide')){
       $image = $request->file('home_slide');
       $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();

       Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
       $save_url = 'upload/home_slide/'.$name_gen;

       HomeSlide::findOrfail($slide_id)->update([
         'title'       => $request->title,
         'short_title' => $request->short_title,
         'video_url'   => $request->video_url,
         'home_slide'  => $save_url,
         
       ]);
        $notification = array (
        'message' => 'Home Slide Updated With Image Sucessfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
     } else{

        HomeSlide::findOrfail($slide_id)->update([
            'title'       => $request->title,
            'short_title' => $request->short_title,
            'video_url'   => $request->video_url,            
          ]);
           $notification = array (
           'message' => 'Home Slide Updated Without Image Sucessfully',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
     } // end Else 
    }//End Method
}
