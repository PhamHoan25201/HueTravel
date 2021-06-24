<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
