<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use Carbon\Carbon; 
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
class BlogController extends Controller
{
    //
    // my blogs 
public function viewmyblogs(){
    // for user 
    // $user = auth()->user(); 
    // for admin 
    $user =   auth()->guard('admin')->user();
    // print($user);
    // die();

    $blogdata['getMyblogs'] = BlogPost::where('authorId', $user->id)->get();
    $blogdata['blogCat'] = Category::orderBy('name', 'ASC')->get();
    return view('backend.blog.myblogs',$blogdata);

}
    //view blog post 
    public function addPost(){
        $data['blogCat'] = Category::orderBy('name', 'ASC')->get();
        return view('backend.blogindex',$data);
    }
    // publish 
    public function publishPost(Request $request ){
        $request->validate([
            'title' =>'required|string',
            'summary' =>'required',
            // 'image' =>'required|image',
            ]);
            if($request->file('image')){
                $blog_img =  $request->file('image');
                $name_gen = time().'_'.$blog_img->getClientOriginalName();
                Image::make($blog_img)->fit(354,236)->save(public_path('assets/blog/'.$name_gen));
                
                $save_url = 'assets/blog/'.$name_gen;
                // if path is storage can use below 
                // Image::make($blog_img)->fit(354,236)->save( storage_path('app/public/blog/'.$name_gen));
                // $save_url ='storage/blog/'.$name_gen;
              }
                $publishPost = new BlogPost();
                $userid =   auth()->guard('admin')->user()->id;
                $publishPost->authorId =   $userid;
                $publishPost->catId =  $request->catId;
                $publishPost->title =  $request->title;
                $publishPost->slug = strtolower(str_replace(' ', '-',$request->title));
                $publishPost->image =  $save_url;
                $publishPost->summary =  $request->summary;
                $publishPost->save();
                return  redirect()->route('admin.view.myblog')->with('sucess', 'Blog published Sucessfull');
       

    }

    // Edit blog post 
    public function editPost($id){
        $editPost['blogCat'] = Category::orderBy('name', 'ASC')->get();
        $editPost['editBlogpost'] =  BlogPost::find($id);
    return view('backend.blog.edit',$editPost);


    }


    // update blog post 
    public function updatepost(Request $request, $id){
        $old_slider  =  BlogPost::find($id);
        $old_image = $old_slider->image ;
        if($request->file('image')){
            $blog_img =  $request->file('image');
            $name_gen = time().'_'.$blog_img->getClientOriginalName();
            Image::make($blog_img)->fit(354,236)->save(public_path('assets/blog/'.$name_gen));
            $save_url = 'assets/blog/'.$name_gen;


            if(file_exists($old_image)){
                unlink($old_image);  
                }
                $publishPost =  BlogPost::find($id);
                $userid =   auth()->guard('admin')->user()->id;
                $publishPost->authorId =  $userid ;
                $publishPost->catId =  $request->catId;
                $publishPost->title =  $request->title;
                $publishPost->slug = strtolower(str_replace(' ', '-',$request->title));
                $publishPost->image =  $save_url;
                $publishPost->summary =  $request->summary;
                $publishPost->save();
                return  redirect()->route('admin.view.myblog')->with('info', 'Blog  image update Sucessfull');
          }else{
            $publishPost =  BlogPost::find($id);
            $userid =   auth()->guard('admin')->user()->id;
            $publishPost->authorId =  $userid ;
            $publishPost->catId =  $request->catId;
            $publishPost->title =  $request->title;
            $publishPost->slug = strtolower(str_replace(' ', '-',$request->title));
      
            $publishPost->summary =  $request->summary;
            $publishPost->save();
            return  redirect()->route('admin.view.myblog')->with('info', 'Blog updated Sucessfull');
          }
        
    }

    //delete post 
    public function deletepost($id ){
        $oldPost  =  BlogPost::find($id);
        $old_image = $oldPost->image;
        // dd($old_image );
        if(file_exists($old_image)){
            // dd($old_image);
            unlink($old_image);  
            }
    $deletePost =  BlogPost::find($id);
    $deletePost->delete();
    return  redirect()->route('admin.view.myblog')->with('error', 'Blog  image update Sucessfull');
    }


    // Logout


}
