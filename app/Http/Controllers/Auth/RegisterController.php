<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Support\Facades\View;
use App\Models\Category;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $gioiThieu = Category::where('id',13)->take(1)->get();
        $diaDiem = Category::where('id',14)->take(1)->get();
        $traiNghiem = Category::where('id',15)->take(1)->get();
        $camNang = Category::where('id',17)->take(1)->get();
        $dichVu = Category::where('id',16)->take(1)->get();
        View::share('gioiThieu', $gioiThieu);
        View::share('diaDiem', $diaDiem);
        View::share('traiNghiem', $traiNghiem);
        View::share('camNang', $camNang);
        View::share('dichVu', $dichVu);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $job = (new SendWelcomeEmail($user))->delay(Carbon::now()->addMinutes(1));
        dispatch($job);
        return $user;
    }
}
