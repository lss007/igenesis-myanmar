<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Models\BlogPost;

class CategoryController extends Controller
{
    //viewCategory
    public function viewCategory(){
        $getdata['getCategory'] = Category::get();
        return view('backend.category.index',$getdata);
    }
    // add category 
    public function addCategory(Request $request){
            $request->validate([
             'name' =>'required|string',
            ]);
        $category_data = new  Category();
        $category_data->user_id =  auth()->guard('admin')->user()->id;
        $category_data->name = $request->name;
        $category_data->category_slug = strtolower(str_replace(' ', '-',$request->name));
        $category_data->save();
        $notification = array(
         'message' =>    'Category Inserted successfully',
         'alert-type' => 'success'
         );
         return  redirect()->back()->with('sucess', 'Category inserted sucessfull');
      
        }
    // edit blog category 
    public function editCategory($id){

        $data['Category'] = Category::find($id);

        return view('backend.category.edit',$data);

     }

        // update category 
        public function updateCategory(Request $request, $id){
            $updatedata= Category::find($id);
            $updatedata->name = $request->name;
            $updatedata->save();
            return  redirect()->route('view.blog.category')->with('sucess', 'Category updated sucessfull');
      
            
        }
        //delete blog category 
        public function deleteCategory($id){
            $deldata = Category::find($id);
            $deldata->delete();
            return  redirect()->route('view.blog.category')->with('error', 'Category deleted sucessfull');
      

        }


            // approvedpost
                public function approvedpost($id){
                    $approved  =  BlogPost::find($id);
                    $approved->status = '1';
                    $approved->save();
                    return  redirect()->back()->with('sucess', 'User Blog Post Approved  ');

                }


    // rejectedpost
                public function rejectedpost($id){
                    $rejected  =  BlogPost::find($id);
                    $rejected->status = '0';
                    $rejected->save();
                    return  redirect()->back()->with('error', 'User Blog Post Rejected  ');

                }

    // remove blog 
            public function removeblog($id){
                $getPost  =  BlogPost::find($id);
                $old_image = $getPost->image;
                // dd($old_image );
                if(file_exists($old_image)){
                // dd($old_image);
                    unlink($old_image);  
            }
                    $deletePost =  BlogPost::find($id);
                    $deletePost->delete();
                    return  redirect()->back()->with('error', 'Blog Post Deleted  sucessfull');


            }
}
