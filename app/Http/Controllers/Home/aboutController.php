<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\About;
use App\Models\multiImage;
use Image;

class aboutController extends Controller
{

    public function aboutPage()
    {
        $aboutData = About::find(1);
        return view('admin.About.aboutPage', compact('aboutData'));

    } //End Method

    public function updateAbout(Request $request)
    {
     $about_id = $request->id;
     if($request->file('about_image')){
       $image = $request->file('about_image');
       $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();

       Image::make($image)->resize(636,852)->save('upload/home_about/'.$name_gen);
       $save_url = 'upload/home_about/'.$name_gen;

       About::findOrfail($about_id)->update([
         'title'       => $request->title,
         'short_title' => $request->short_title,
         'short_description'   => $request->short_description,
         'long_description'    => $request->long_description,
         'about_image'  => $save_url,
         
       ]);
        $notification = array (
        'message' => 'About Page Updated With Image Sucessfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
     } else{

        About::findOrfail($about_id)->update([
         'title'       => $request->title,
         'short_title' => $request->short_title,
         'short_description'   => $request->short_description,
         'long_description'    => $request->long_description,
        //  'about_image'  => $save_url,            
          ]);
           $notification = array (
           'message' => 'Home Slide Updated Without Image Sucessfully',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
     } // end Else 
    }//End Method

    public function homeAbout()
    {
      $aboutData = About::find(1);
     return view('frontend.about_page', compact('aboutData'));
    }//End Method

    public function AboutMultiImage()
    {
      $aboutMlutiimge = multiImage::find(1);
      return view('admin.About.multiimage', compact('aboutMlutiimge'));

    }//End Method

    public function storeMultuImage(Request $request)
    {
     $image = $request->file('multi_images');
     foreach($image as $multi_images)
     {
     $name_gen = hexdec(uniqid()). '.'.$multi_images->getClientOriginalExtension();

       Image::make($multi_images)->resize(220, 220)->save('upload/multiImge/'.$name_gen);
       $save_url = 'upload/multiImge/'.$name_gen;

       multiImage::insert([     
        'multi_images'  => $save_url,
        'created_at'  => Carbon::now(),
        
      ]);
    } // End Of Foreach

       $notification = array (
       'message' => 'Multi Image Inserted Sucessfully',
       'alert-type' => 'success'
   );
  //  return redirect()->route('all.multi.image')->back()->with($notification);
   return redirect()->route('all.multi.image')->with($notification);


  }//End Method
  
  public function allMultuImage() 
   {
   $allMultiImage = multiImage::all();
   return view('admin.About.all_multiimage', compact('allMultiImage'));
   }//End Method

public function EditMultuImage($id) 
{ 
  $MultiImage = multiImage::findOrFail($id);
  return view('admin.About.edit_multi_image', compact('MultiImage'));

}//End Method

public function UpdateMultiimage(Request $request)
 {
  $multi_image_id = $request->id;
  if($request->file('multi_images')){
    $image = $request->file('multi_images');
    $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(220,220)->save('upload/multiImge/'.$name_gen);
    $save_url = 'upload/multiImge/'.$name_gen;

    multiImage::findOrfail($multi_image_id)->update([
      
      'multi_images'  => $save_url,
      
    ]);
     $notification = array (
     'message' => 'Updated Multi Image Sucessfully',
     'alert-type' => 'success'
   );
  //  return redirect()->route('all.multi.image')->with($notification);
   return redirect()->route('all.multi.image')->with($notification);



  }
 }//End Method
   public function DeleteMultuImage($id)
   {
     $multi = multiImage::findOrFail($id);
     $img = $multi->multi_images;
     unlink($img);

     multiImage::findOrFail($id)->delete();

     $notification = array (
      'message' => 'Multi Image Deleted Sucessfully',
      'alert-type' => 'success'
  );
  // return redirect()->back()->with($notification);
  return redirect()->route('all.multi.image')->with($notification);

   }//End Method

}
