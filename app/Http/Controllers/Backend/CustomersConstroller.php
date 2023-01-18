<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurCustomers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CustomersConstroller extends Controller
{
    //
    public function view_customer(){
       
        $lastOrder= OurCustomers::max('order_no');
      
       $getcoustomer['get_coustomer']  = OurCustomers::orderBy('order_no','asc')->get();
       return view('backend.ourcoustomer.index',$getcoustomer,compact('lastOrder'));

    }
    public function add_customer(){
       return view('backend.ourcoustomer.add_customers');

    }
    public function store_customers(Request  $request){
      $request->validate([
                // 'name' => 'required',
                'image*' => 'required|image',
            ]);
         
        if($request->file('image')){
            $logo_img =  $request->file('image');
            foreach( $logo_img as $key => $val ){
                $imageName = hexdec(uniqid()).'.'.$val->getClientOriginalExtension();  
                $val->move(public_path('assets/customers/'), $imageName);
                $savedata  = new OurCustomers();
                $savedata->image = $imageName ;
                $savedata->order_no = $request->order_no;

                $savedata->save();
            }
            return redirect()->route('view_our_customer')->with('sucess', ' Logo added Sucessfull');

        }
}


    // active
    public function active_customers($id){
        $active  =  OurCustomers::find($id);
        $active->status = '1';
        $active->save();
        return  redirect()->back()->with('sucess', 'Customers Logo Active');

            }

    // inactive
    public function inactive_customers($id){
        $inactive  =  OurCustomers::find($id);
        $inactive->status = '0';
        $inactive->save();
        return  redirect()->back()->with('error', 'Customers Logo Inactive');

        }
    public function edit_customers($id){
        $editCoustomer['edit_coustomer']   =  OurCustomers::find($id);

       return view('backend.ourcoustomer.edit',$editCoustomer);

    }
    public function update_customers(Request  $request, $id){
 
        if($request->file('image')){
            $getimg  = OurCustomers::find($id);
            $imagePath = public_path('assets/customers/'. $getimg->image);
            if(File::exists($imagePath) && isset( $getimg->image)){
                unlink($imagePath);
            }

            $logo_img =  $request->file('image');
            $imageName = hexdec(uniqid()).'.'.$logo_img->getClientOriginalExtension();  
            $logo_img->move(public_path('assets/customers/'), $imageName);
            $updatedata  =  OurCustomers::find($id);

            $updatedata->image = $imageName ;

            $updatedata->save();
            return redirect()->route('view_our_customer')->with('success', 'Customers Logo updated Sucessfull');
        }else {
            $updatedata  =  OurCustomers::find($id);
            $updatedata->name =  $request->name;
            $updatedata->order_no =  $request->order_no;
            $updatedata->save();
            
            return redirect()->route('view_our_customer')->with('success', 'Customers Logo updated Sucessfull');
        }
  
    }


    public function delete_customers($id){
        $getimg  = OurCustomers::find($id);
        $imagePath = public_path('assets/customers/'. $getimg->image);
        if(File::exists($imagePath) && isset( $getimg->image)){
            unlink($imagePath);
        }

        $deletedata  =  OurCustomers::find($id);
        $deletedata->delete();
        return redirect()->route('view_our_customer')->with('error', 'Customers Logo Deleted Sucessfull');

    }


    public function update_order(Request $request)
    {
        $posts = OurCustomers::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order_no' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }


    public function allDelete(Request $request ){
        $ids = $request->get('ids');
   
        // dd($ids);
        foreach($ids as $val){

            $getimg  = OurCustomers::find($val);
            $imagePath = public_path('assets/customers/'. $getimg->image);
            if(File::exists($imagePath) && isset( $getimg->image)){
        
                unlink($imagePath);
            }

        $img =    DB::table('our_customers')->where('id', $val)->delete();
    

        }
        return redirect()->back()->with('error' ,'Data deleted success');
}
}
