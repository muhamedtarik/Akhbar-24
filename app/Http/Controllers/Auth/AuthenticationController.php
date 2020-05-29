<?php

namespace App\Http\Controllers\Auth;

use App\Argaam\Facades\Sso;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\SsoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            // fire login event
            return redirect()->intended($this->redirectTo)->with([
                'type' => 'success',
                'message' => __('You have logged in successfully.')
            ]);
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    /**
     * Register.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function register(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        try {
            $response = Sso::register($attributes);

            if ($response instanceof SsoUser) {
                Auth::login($response);

                return redirect()->intended($this->redirectTo)->with([
                    'type' => 'success',
                    'message' => __('You have registered successfully.')
                ]);
            }

        } catch (\Throwable $e) {
            \Log::info($e->getMessage());
        }
        
        if (! is_null($response)) {
            throw ValidationException::withMessages($response);
        }

        return back()->with([
            'type' => 'error',
            'message' => __('Something went wrong, please try again later.')
        ]);
    }
}
