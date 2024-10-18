<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel =  new User();
    }

    public function index()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $newUser = $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required|min:5|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        $newUser['password'] = Hash::make($newUser['password']);
        array_pop($newUser);

        $this->userModel->create($newUser);

        return redirect('/')->with('success', 'Berhasil membuat akun pengguna!');
    }
}
