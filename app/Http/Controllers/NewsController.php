<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsRequest;
use App\Models\NewsType;
use App\Models\News;
use App\Models\User;
use App\Http\Resources\NewsResource;
use App\Http\Resources\UserResource;
use App\Repositories\NewsType\NewsTypeEloquentRepository;
use App\Repositories\News\NewsEloquentRepository;
use App\Repositories\User\UserEloquentRepository;

class NewsController extends Controller
{
    protected $newsTypeRepository;
    protected $userRepository;
    protected $newsRepository;

    public function __construct(NewsTypeEloquentRepository $newsTypeRepository, UserEloquentRepository $userRepository, NewsEloquentRepository $newsRepository){
        $this->newsTypeRepository = $newsTypeRepository;
        $this->userRepository = $userRepository;
        $this->newsRepository = $newsRepository;
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $listNews = NewsResource::collection($this->newsRepository->getAll());
          return view('news.index', array('listNews' => $listNews));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listNewsType = $this->newsTypeRepository->getAll();
        $listUser = $this->userRepository->getAll();
        return view('news.create', array('listNewsType' => $listNewsType, 'listUser' => $listUser ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            if ($image = $request->file('url_img')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['url_img'] = "$profileImage";
            }
             $this->newsRepository->create($input);
            DB::commit();
            return redirect()->route('news.index')->with("success",trans('tpl.admin.add.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('news.index')->with("error",trans('tpl.admin.add.fail'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            DB::beginTransaction();
            $listNewsType = $this->newsTypeRepository->getAll();
            $listUser = $this->userRepository->getAll();
            $news = News::findOrFail($id);
            DB::commit();
            return view('news.show', array('news' => $news, 'listNewsType' => $listNewsType, 'listUser' => $listUser));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('news.index')->with("error",trans('tpl.admin.notFound'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       try {
            DB::beginTransaction();
            $listNewsType = $this->newsTypeRepository->getAll();
            $listUser = $this->userRepository->getAll();
            $news = News::findOrFail($id);
            DB::commit();
            return view('news.edit', array('news' => $news, 'listNewsType' => $listNewsType, 'listUser' => $listUser ));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('news.index')->with("error",trans('tpl.admin.notFound'));        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
         try {
            DB::beginTransaction();
            $input = $request->all();
            if ($image = $request->file('url_img')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['url_img'] = "$profileImage";
            }
            $this->newsRepository->update($id, $input);
            DB::commit();
            return redirect()->route('news.index')->with("success",trans('tpl.admin.update.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('news.index')->with("error",trans('tpl.admin.update.fail'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->newsRepository->delete($id);
            DB::commit();
            return redirect()->route('news.index')->with("success",trans('tpl.admin.delete.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('news.index')->with("error",trans('tpl.admin.delete.fail'));
        }
    }
}
