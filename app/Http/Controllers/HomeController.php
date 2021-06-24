<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\NewsType;
use App\Models\News;
use App\Models\Advertisement;
use App\Http\Resources\NewsResource;
use App\Http\Resources\NewsTypeResource;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $listCategory = Category::all();
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
        View::share('listCategory', $listCategory);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$trending = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(5)->get();
        $xemNhieu = News::where('tin_noi_bat',1)->orderByDesc('so_lan_xem')->limit(5)->get();
        $baiNoiBat = News::where('tin_noi_bat',1)->get();
        $QC1 = Advertisement::where('id', 15)->get();
        $tinMoiNhat = News::orderByDesc('created_at')->take(4)->get();
        $bestofWeek = News::where('tin_noi_bat', 1)->whereRaw('(curdate() - created_at) < 7')->get();
        return view('normalUser.index', 
            array(
                'trending'=>$trending,
                'xemNhieu'=>$xemNhieu,
                'baiNoiBat'=>$baiNoiBat,
                'QC1'=>$QC1,
                'tinMoiNhat'=>$tinMoiNhat,
                'bestofWeek'=>$bestofWeek,
                
            ));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('Dashboard.index');
    }

    // Function Search
    public function Search(Request $request){
    	$keyword = $request->input('key');
    	$news = News::where('tieu_de','like','%'.$keyword.'%')->orWhere('tom_tat','like','%'.$keyword.'%')->orWhere('noi_dung','like','%'.$keyword.'%')->get();
    	return view('normalUser.search',array(
            'keyword'=>$keyword,
            'news'=> $news,
        ));
    }
}
