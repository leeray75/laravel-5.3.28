<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function store(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $response = new \stdClass();
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $responseUser = new \stdClass();
            $responseUser->id = $user->id;
            $responseUser->email = $user->email;
            $responseUser->name =  $user->name;
            $response->status="success";
            $response->user=$responseUser;
            $response->message="Successful Login";
        }
        else{
            $response->status="error";
            $response->email=$email;
            $response->message="Invalid Login";
        }
      
        return response()->json($response);
        //return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
