<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    public function index()
    {
        // Google へのリダイレクト
        return view('user.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToGoogle()
    {
        // Google へのリダイレクト
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $gUser = Socialite::driver('google')->stateless()->user();
            // email が合致するユーザーを取得
            $user = User::where('email', $gUser->email)->first();
            // 見つからなければ新しくユーザーを作成
            if ($user == null) {
                $user = $this->createUserByGoogle($gUser);
            }
            // ログイン処理
            Auth::login($user, true);
            return redirect('/users'); //ログインしたらここにredirect
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
    public function createUserByGoogle($gUser)
    {
        $img = file_get_contents($gUser->avatar_original);
        if ($img !== false) {
            $file_name = $gUser->id . '.png';
            Storage::put('public/profile_images/' . $file_name, $img);
        } else {
            $file_name = "";
        }

        $user = User::create([
            'name'     => $gUser->name,
            'email'    => $gUser->email,
            'password' => \Hash::make(uniqid()),
            'avatar'   => $file_name,
        ]);
        return $user;
    }

    public function logout()
    {
        auth::logout();
        return redirect('/login');
    }
}
