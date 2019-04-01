<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleController extends Controller
{
   public function insert(Request $request)
   {
     $multiple = new Multiple;
     $multiple->id = $request->id;
     $multiple->name = $request->name;
     $multiple->email = $request->email;
     $multiple->password = $request->password;
     $multiple->save();
     return redirect()->route('home')
   }
}
