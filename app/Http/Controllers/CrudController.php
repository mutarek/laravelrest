<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function showdata()
    {
       return view('show_data');
    }
    public function adddata()
    {
       return view('add_data');
    }
    public function storedata(Request $request)
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
      $crud = new Crud();
      $crud->name = $request->name;
      $crud->email = $request->email;
      $crud->save();
      Session::flash('msg','Data Inserted Successfully');
      return redirect()->back();
    }
}
