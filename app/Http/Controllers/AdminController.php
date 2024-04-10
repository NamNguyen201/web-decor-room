<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{   
    public function viewlogin(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('backend.dashboard');
    }
        
    public function dashboard(Request $request){
        $email = $request->email;
        $password = ($request->password);

        $result = DB::table('tbl_admin')->where('email',$email)->where('password',$password)->first();
        if(isset($result)){
             Session::put('name',$result->name);
             Session::put('id',$result->id);
             return Redirect::to('admin/dashboard');
        }else{
             Session::put('message','Incorrect account or password. Please re-enter.');
             return Redirect::to('login');
        }
       
    }

    public function logout(){
        Session::forget('name',null);
        Session::forget('id',null);
        return Redirect::to('login');
    }

   

    
}
