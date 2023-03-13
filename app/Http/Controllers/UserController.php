<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
            $fileExt = $image->getClientOriginalExtension();

            if(!in_array($fileExt, $allowedExtensions)) {
                return back()->withErrors(['image' => 'Invalid file format']); 
            }

            if($image->getSize() <= 2000000) {
                $formFields['image'] = $image->store('images', 'public');
            } else {
                return back()->withErrors(['image' => 'File is too large']); 
            }
        }

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/')->with('message', 'Registered and logged in successfully!');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out successfully!');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
