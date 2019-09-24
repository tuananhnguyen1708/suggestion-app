<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    //Cấu hình số lần nhập sai và thời gian để nhập
//    public $maxAttempts  = 6;
//    public $decayMinutes = 30; //30 phut

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'name';
    }

    public function login(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Vui lòng nhập tên đăng nhập',
            'password.required' => 'Vui lòng nhâp mật khẩu',
        ]);
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Success
            return redirect('/');
        } else {
            // Go back on error (or do what you want)
            return redirect()->back()->with('error','Thông tin đăng nhập không chính xác');
        }
    }

}
