<?php
namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function getSignUpPage()
    {
        return view('auth.register');
    }
    public function getSignInPage()
    {
        return view('auth.login');
    }
    public function postSignUp(Request $request)
    {
        $user = new User();
        $user->first_name = $request['first_name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->route('welcome');
    }
    public function postSignIn(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('welcome');
        }
        return redirect()->back();
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}