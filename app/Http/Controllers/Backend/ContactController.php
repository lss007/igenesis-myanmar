<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    
                public function contactMessages(){
                $data['get_messages'] = Contact::latest()->get();
                return view('backend.contacts.index',$data);
                }

                // view comtact messages 
                public function viewMessages($id){
                $viewdata['view_messages'] = Contact::find($id);
                return view('backend.contacts.view',$viewdata);
                }

                public function deleteMessages($id){
                $del_data = Contact::find($id);
                $del_data->delete();
                $notification = array(
                    'message' => 'Data Deleted successfully',
                    'alert-type' => 'info'
                    );
                return redirect()->back()->with($notification);

                }


         
}
