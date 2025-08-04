<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class postController extends Controller
{
  
    public function index()
    {
        $post = posts::all();
        return view('posts.index', compact('post'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
       
        $post = new Posts();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_image = $request->post_image;
        $post->save();

        $notification = array (
            'message' => 'The post Save Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('post.create')->with($notification);
    }

    
    public function show($id)
    {
        $post = Posts::findOrFail($id);
        return view('posts.show', compact('post'));
    }
 
    public function edit($id)
    {
       $post = Posts::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    
    public function update(Request $request)
    {
        $post_id = $request->id;
     if($request->file('post_images')){
       $image = $request->file('post_images');
       $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();

       Image::make($image)->resize(636,852)->save('upload/post_images/'.$name_gen);
       $save_url = 'upload/post_images/'.$name_gen;

       Posts::findOrfail($post_id)->update([
        'title'       => $request->title,
        'content' => $request->content,
        'post_image'  => $save_url,

       ]);

        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->post_image = $request->post_image;
        // $post->save();

        $notification = array (
            'message' => 'The post Deleted Sucessfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
   else{

    Posts::findOrfail($post_id)->update([
        'title'   => $request->title,
        'content' => $request->content,
      ]);
       $notification = array (
       'message' => 'Home Slide Updated Without Image Sucessfully',
       'alert-type' => 'success'
   );
   return redirect()->route('post.index')->with($notification);
 } // end Else 
}//End Method

    
   
    public function destroy($id)
    {
        $post = posts::findOrFail($id);

        posts::findOrFail($id)->DELETE();

     $notification = array (
      'message' => 'The Post Deleted Sucessfully',
      'alert-type' => 'success'
  );
  return redirect()->back()->with($notification);

    }
    
}
