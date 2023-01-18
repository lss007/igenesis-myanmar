<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactAddress;

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

            public function view_address(){    
                $getAddress['get_contact_address'] =  ContactAddress::get();
                return view('backend.contacts.view_address', $getAddress);
            
            }

            public function add_address(){
                return view('backend.contacts.add_address');

            }

            public function store_address(Request $request){

                $request->validate([
                    'address' => 'required',
                ]);
                $storeAddress = new ContactAddress();
                $storeAddress->address =  $request->address;
                $storeAddress->save();
                return redirect()->route('view_contact_address')->with('success', 'Address store Sucessfull');

            }

                     // active
                     public function address_active($id){
                        $active  =  ContactAddress::find($id);
                        $active->status = '1';
                        $active->save();
                        return  redirect()->back()->with('sucess', 'Address   Active');
        
                }
        
                     // inactive
                    public function address_inactive($id){
                        $inactive  =  ContactAddress::find($id);
                        $inactive->status = '0';
                        $inactive->save();
                        return  redirect()->back()->with('error', 'Address  Inactive');
        
                }
                    public function address_delete($id){
                        $deleteservice  =  ContactAddress::find($id);
                        $deleteservice->delete();
                        return  redirect()->back()->with('error', 'Address  Deletd');
                    }

                    public function address_edit($id){
                        $editAddress['edit_contact_address'] =  ContactAddress::find($id);
                  
                        return view('backend.contacts.edit_address', $editAddress);
                    }
         
                    public function update_address(Request $request, $id){
                        $request->validate([
                            'address' => 'required',
                        ]);
                        $storeAddress =  ContactAddress::find($id);
                        $storeAddress->address =  $request->address;
                        $storeAddress->save();
                        return redirect()->route('view_contact_address')->with('info', 'Address Updated Sucessfull');
        
                    }

}
