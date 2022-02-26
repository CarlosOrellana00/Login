<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
  // public function index() {
  //   $t = Tienda::first();
  //   if (!$t) {
  //     return redirect()->route('install.index');
  //   }
  //   return view('auth.login', compact('t'));
  // }

  public function login(Request $request) {
    $u = User::where('name',$request->input('name'))->firstOrFail();
    if($u->password== $request->password ){
      if($u->is_admin == true){
        return redirect('https://www.google.cl');
      }else{
        return redirect('https://www.youtube.com');
      }
    }else{
      return back()->with('info','Error. Intente nuevamente.');
    }

  }
}
