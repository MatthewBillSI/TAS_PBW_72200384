<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\user;

class AuthController extends Controller
{
    public function user(){
        $user = user::paginate(5);
        return view('user',['user'=> $user]);
    }


    public function formuliruser(Request $request)
    {

        return view('formuliruser');
    }
    public function inputuser(Request $request)
    {
        $user = user::create([
            'nik_user' => $request->nik,
            'name' => $request->name, 
            'no_telp' => $request->no_telp,
            'password' => md5($request->password)

        ]);
        return redirect("/user");
    }
    public function edituser($id)
    {
        $user = user::find($id);
        return view('userupdate',['user' => $user]);
    }
    public function updateuser($id,Request $request)
    {
       $user = user::find($id);
        $user->nik_user = $request->nik; 
        $user->name = $request->name;
        $user->no_telp = $request->no_telp;
        $user->password = md5($request->password);
        $user->save();
        return redirect("/user");
    }

    public function login(){
        return view('formlogin');
    }

    public function cekLogin(Request $request)
    {

        if(Auth::attempt(['no_telp'=>$request-> no_telp, 'password'=>$request->password]))
        {
            $validatedData = $request->validate([
                'no_telp' => ['required'],
                'password' => ['required'],
            ]);
            return redirect('/home');
        }
        else
        {
            $validatedData = $request->validate([
                'no_telp' => ['required'],
                'password' => ['required'],
            ]);
            return redirect('/');
        }
    }

    public function cekLogin2(Request $request){
    $user = User::where('no_telp', $request->no_telp)
            ->where('password',md5($request->password))
            ->first();
            $validatedData = $request->validate([
                'no_telp' => ['required'],
                'password' => ['required'],
            ]);
        Auth::login($user);
        return redirect('/home');


    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('alert',' anda berhasil logout');
    }


    public function home(){
        return view('home');
    }

    public function deleteuser($id)
    {
        $user = user::find($id);
        $user ->delete();
        return redirect("/user");
    }
}

