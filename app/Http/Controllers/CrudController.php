<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function showdata()
    {
      //$alldata = Crud::all();
      $alldata = Crud::paginate(8);
      return view('show_data',compact('alldata'));
    }
    public function adddata()
    {
       return view('add_data');
    }
    public function storedata(Request $request)
    {
      $rules = [
         'name'=>'required',
         'email'=>'required|email',
         'number'=>'required'
      ];
      $message = [
         'name.required'=>'We need Your Name',
         'number.required'=>'We need Your Number',
         'email.required'=>'We cant work without email',
      ];
      $this->validate($request,$rules,$message);
      $crud = new Crud();
      $crud->name = $request->name;
      $crud->email = $request->email;
      $crud->save();
      Session::flash('msg','Data Inserted Successfully');
      return redirect()->to(url('/'));
    }
    public function editdata($id=null)
    {
      if($id !=null)
      {
         $editdata  = Crud::find($id);
         return view('editdata',compact('editdata'));
      }
    }
    public function updatedata(Request $request,$id)
    {
      if($id !=null)
      {
         $rules = [
            'name'=>'required',
            'email'=>'required|email'
         ];
         $message = [
            'name.required'=>'We need Your Name',
            'email.required'=>'We cant work without email',
         ];
         $this->validate($request,$rules,$message);
         $crud =Crud::find($id);
         $crud->name = $request->name;
         $crud->email = $request->email;
         $crud->save();
         Session::flash('msg','Data Successfully updated');
         return redirect()->to(url('/'));
      }
    }
    public function deletedata($id=null)
    {
      if($id !=null)
      {
        $deletedata = Crud::find($id);
        $deletedata->delete();
        Session::flash('msg','Data Deleted Deleted');
        return redirect('/');
      }
    }
}
