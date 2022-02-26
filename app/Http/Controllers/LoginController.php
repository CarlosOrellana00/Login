<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
  public function index(){
    return view('login');
  }

  public function login(Request $request) {
    $u = User::where('name',$request->input('name'))->firstOrFail();
    if($u->password== $request->password ){
      if($u->is_admin == true){
        return redirect('https://greennet.cl/helpdesk/admin/');
      }else{
        return redirect('https://greennet.cl/helpdesk/');
      }
    }else{
      return back()->with('info','Error. Intente nuevamente.');
    }
  }

}
