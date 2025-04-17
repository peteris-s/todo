<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create() {
        return view("todos.register");
      }

      public function store(Request $request) {
        $validated = $request->validate([
            "first_name" => ["required", "max:255"],
            "last_name" => ["required", "max:255"],
            "email" => ["required", "email", "max:255", Rule::unique('users', 'email')],
            "password" => ["required", "confirmed", Password::min(6)->numbers()->letters()->symbols()]
        ]);
        $user = User::create($validated);
        Auth::login($user);
        return redirect("/");
      } 
}
