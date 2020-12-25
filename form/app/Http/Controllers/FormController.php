<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
class FormController extends Controller
{
    //
    public function index(){
        $user=form::all();
        return view("user.index",[
            "x"=>$user
        ]);
        
    }
    // public function create(){
    //     return view('');
    // }


    public function store(Request $request){



        $request->validate([
            'firstname' => 'required|min:5',
            'password' => 'required|confirmed|min:10 |max:16',
            'email'=>'required|min:10',
            'phone'=>'required |min:10|max:14',
        ]);
        form::create([
            "name"=>$request->firstname,
            "password"=>$request->password,
            "email"=>$request->email,
            "phone"=>$request->phone,
        ]);

        
        return redirect("index");}
    




        public function delete($id){
           $del=form::where('id',$id)->delete() ;
           
           return redirect('index');
        }

        public function edit($id){
          $user=form::where('id',$id)->get()->first();
             return view("user.edit",[
                 "user"=>$user,
             ]);
                
        
        }

        public function update(Request $request ,$id)
        {
            form::where('id',$id)->update([

            
                "name"=>$request->firstname,
                "password"=>$request->password,
                "email"=>$request->email,
                "phone"=>$request->phone,
            ]);
           
            return view('user.index');
        }


       



    
   
}
