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
        try {
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
        } catch (\Exception $exception) {
            return redirect()->route('home.error');
        }
    }

    public function getCategory($id)
    {
        
        try {
            $category = Category::where('id', $id)->first();
            $listCategory = Category::where('id',$category->id)->orderByDesc('created_at')->paginate(2);
            $QC2 = Advertisement::where('id', 16)->take(1)->get();
            $trending = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(1)->get();
            $trending1 = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(7)->get();
                return view('normalUser.category',
                    array(
                        'listCategory'=>$listCategory,
                        'category'=>$category,
                        'QC2'=>$QC2,
                        'trending'=>$trending,
                        'trending1'=>$trending1,
                    ));
        } catch (\Exception $exception) {
            return redirect()->route('home.error');
        }

    }

    public function getNewsType($id)
    {
        try {
            $newstype = NewsType::where('id', $id)->first();
            $listNewsType = NewsType::where('id',$newstype->id)->orderByDesc('created_at')->paginate(2);
            $QC2 = Advertisement::where('id', 16)->take(1)->get();
            $trending = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(1)->get();
            $trending1 = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(7)->get();
                return view('normalUser.newstype',
                    array(
                        'listNewsType'=>$listNewsType,
                        'newstype'=>$newstype,
                        'QC2'=>$QC2,
                        'trending'=>$trending,
                        'trending1'=>$trending1,
                    ));
        } catch (\Exception $exception) {
            return redirect()->route('home.error');
        }

    }
    public function getNews($id)
    {
        
        try {
            $news = News::where('id', $id)->first();
            $listNews = News::where('id',$news->id)->orderByDesc('created_at')->paginate(2);
            $QC2 = Advertisement::where('id', 16)->take(1)->get();
            $trending = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(1)->get();
            $trending1 = News::where('tin_noi_bat',1)->orderByDesc('so_luot_like')->limit(7)->get();
                return view('normalUser.news',
                        array(
                            'listNews'=>$listNews,
                            'news'=>$news,
                            'QC2'=>$QC2,
                            'trending'=>$trending,
                            'trending1'=>$trending1,
                        ));
        } catch (\Exception $exception) {
            return redirect()->route('home.error');
        }
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

    //Function error
    public function error()
    {
        return view('normalUser.404');
    }
}
