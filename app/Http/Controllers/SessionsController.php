<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
  public function create()
  {
    return view('sessions.create');
  }

  public function store()
  {
    $attributes = request()->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (!auth()->attempt($attributes)) {

      throw ValidationException::withMessages([
        'username' => 'Username or Password are wrong.',
        'password' => 'Username or Password are wrong.'
      ]);
    }

    session()->regenerate();

    return redirect('/');
  }

  public function destroy()
  {
    auth()->logout();

    return redirect('/');
  }
}
