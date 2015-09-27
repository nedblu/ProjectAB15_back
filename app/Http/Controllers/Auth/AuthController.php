<?php

namespace AlphaBeta\Http\Controllers\Auth;

use AlphaBeta\User;
use Validator;
use Illuminate\Http\Request;
use Auth;
use DateTime;
use AlphaBeta\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    protected $redirectTo = '/';
    protected $loginPath = '/auth/login';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {

        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1], $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    protected function authenticated(Request $request, $auth)
    {
        $now = new DateTime();

        $user = User::findOrFail($auth->id);
        $user->last_login = $now->format('Y-m-d H:i:s');
        $user->ip_address = ip2long($request->ip());

        $user->save();

        return redirect()->intended($this->redirectPath());
        
    }

    public function activate(Request $request)
    {
        if ($request->email && $request->code) {

            $validator = \Validator::make($request->all(), [
                'email'   => 'required|email',
                'code'    => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('Auth::index');
            }

            User::where('email',$request->email)->where('code',$request->code)->update(['active' => 1]);

            return redirect()->route('Auth::index','email=' . $request->email);
        }
        else {
            return redirect()->route('Auth::index');
        }
        
    }
}
