<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
      {
            Auth::logout();
            return redirect("/");
      }

      public function create() {
        return view("todos.login");
      }

      public function store(Request $request) {
        $validated = $request->validate([
          "email" => ["required", "email"],
          "password" => ["required"]
      ]);
      
        if (!Auth::attempt($validated)) {
          throw ValidationException::withMessages([
              "email" => "Nepareizs e-pasts vai parole"
          ]);
          
      }
      $request->session()->regenerate();

      return redirect("/");
      } 
      
}
