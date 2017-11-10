<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateAdminReg;
use App\Http\Requests\ValidateAdminLogin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Admin;

class AdminController extends Controller
{
  //this would work for login
  protected $redirectTo = '/admin/view';


  use AuthenticatesUsers;
    public function show(){
      return view("admin.layout.register");
    }
    //another way of using requests
    //Request::get('firstname')

    public function doAdminReg(ValidateAdminReg $request){
      $admin = Admin::create([
        "firstname" => request('firstname'),
        "lastname" => request('lastname'),
        "email" => request('email'),
        "password" => bcrypt(request('password')),
      ]);

      $this->guard()->login($admin);
      return redirect('/admin/addpost');
    }

    protected function logout(){
      $this->guard()->logout();
        return redirect('/admin');
    }

    //@ overide
    protected function guard(){
      return auth()->guard('web_admin');
    }

    // public function doAdminLogin(ValidateAdminLogin $request){
    //   return auth()->guard('web_admin');
    //   return redirect('/admin');
    // }






}
