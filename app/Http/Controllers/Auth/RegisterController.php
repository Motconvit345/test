<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use App\Jobs\SendConfirmEmail;
use Carbon\Carbon;
use Mail;
use App\Mail\ConfirmPass;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        $confirmation_code = time().uniqid(true);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'confirmation_code' => $confirmation_code,
            'confirmed' => 0,
            'role_id' => 4,
        ]);
        Mail::to($request->email)->send(new ConfirmPass($confirmation_code));

        return redirect(route('login'))->with('status', 'Vui lòng xác nhận tài khoản email');
        /*return redirect()->action('Auth\RegisterController@notification', '58d95c18f252c');*/
    }

    public function verify($code)
    {
        $user = User::where('confirmation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'confirmed' => 1,
                'confirmation_code' => null
            ]);
            $notification_status = 'Bạn đã xác nhận thành công';
        } else {
            $notification_status ='Mã xác nhận không chính xác';
        }

        return redirect(route('login'))->with('status', $notification_status);
    }

    /*public function notification($status)
    {
        $notification = '';
        switch ($status) {
            case '58d95c18f252c':
                $notification = 'Bạn đã đăng kí thành công, vào email để xác nhận';
                break;
            case '58d95c35c029d':
                $notification = 'Bạn đã xác nhận thành công';
                break;
            case '58d95c3f2f340':
                $notification = 'Mã xác nhận không chính xác';
                break;
        }
        return view('auth.confirm_pass', ['status' => $notification]);
    }*/
}
