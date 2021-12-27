<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->User = new User();
    }
    public function indexuser()
    {
        $data = ['ambil' => $this->User->showuser()];
        return view('main', ['users' => $data]);
    }
    public function detailuser($id)
    {
        $data = ['ambil' => $this->User->detailuser($id)->first()];
        return view('main', $data);
    }
    public function logininput(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/main');
        }
        return back()->with('loginError', 'Login failed!');
    }
    public function login()
    {
        return view('/login');
    }
    public function regist()
    {
        $id = request()->username;
        $data = ['ambil' => $this->User->createinput($id)->first()];
        return view('regist', $data);
        //return dd($data);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    public function inputdatabaru(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        $request->session()->flash('success', 'Registrasi berhasil! Please login!');
        return redirect('/login');

        // return request()->all();
        // $name_mhs = request()->name_mhs;
        // $NIM = request()->NIM;
        // $name = request()->name;
        // $username = request()->username;
        // $email = request()->email;
        // $password = request()->password;
        // $data = [
        //     'name' => $name,
        //     'username' => $username,
        //     'email' => $email,
        //     'password' => $password
        // ];
        // $this->User->inputdatabaru($data);
        // return redirect()->route('utama');
        // $request->validate([
        //     "name" => 'required',
        //     'username' => 'required|unique:users',
        //     'password' => 'required',
        //     'email' => 'required',
        // ]);
        // $query = DB::insert(
        //     'insert into users (id, name) values (?, ?)',
        //     [
        //         1, 'Marc'
        //     ]
        // );

        // return redirect('utama');
    }
}
