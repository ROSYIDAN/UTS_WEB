<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(){
        return view('admin_page.auth.login2');
    }
    
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email', // membuat form pada login harus di isi atau benar
            'password' => 'required'
        ]);

        $validated = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($validated){
            return redirect()->route('dashboard')->with('succes','🎉🎉 Succes Login 🎉🎉');
        }else{
            return redirect()->back()->with('error','💀💀💀 Invalid Input 💀💀💀');
        }

    }


    
}