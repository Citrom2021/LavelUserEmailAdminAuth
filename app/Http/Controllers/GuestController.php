<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    function index(){
        return view('guests.index');
       
    }
    //return DB::select("select id, name, email from students");
    //return DB::select("select* from students");
    
    function save(Request $request){
          $validator = Validator::make($request->all(),[
              'name'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required|min:5|max:12'
              
          ]);

          if(!$validator->passes()){
              return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
          }else{
              $values = [
                   'name'=>$request->name,
                   'email'=>$request->email,
                   'password'=>Hash::make($request->password)
                   
              ];

              $query = DB::table('users')->insert($values);
              //return DB::connection('mysql2')->table('users')->get();
            
              if( $query ){
                  return response()->json(['status'=>1, 'msg'=>'You have successfully registered']);
              }
          }
    }
    
  
}
