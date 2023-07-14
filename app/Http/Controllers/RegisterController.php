<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function create()
  {
    return view('register.create');
  }

  public function store()
  {
    $attributes = request()->validate([
      'name' => 'required|min:3|max:255',
      'username' => 'required|min:3|max:255|unique:users,username',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:7|max:255',
      'confirm_password' => 'required|min:7|max:255',
    ]);

    if ($attributes['password'] !== $attributes['confirm_password']) {
      return redirect()->back()->withErrors(['confirm_password' => 'The password and confirmation password do not match.']);
    }
    auth()->login(
      User::factory()->create([
        'name' => $attributes['name'],
        'username' => $attributes['username'],
        'email' => $attributes['email'],
        'password' => $attributes['password']
      ])
    );

    return redirect('/')->with('success', 'Your account has been created.');
  }
}
