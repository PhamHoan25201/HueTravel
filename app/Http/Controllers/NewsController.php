<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        //
        //$listNews = UserResource::collection(News::all());
        //$listNews = NewsResource::collection(News::all());
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
        //
        //$listNewsType = NewsType::all();
        //$listUser = User::all();
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
        //
        //News::create($request->all());
        $data = $request->all();
        $this->newsRepository->create($data);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$listNewsType = NewsType::all();
        //$listUser = User::all();
        //$news = News::find($id);
        $listNewsType = $this->newsTypeRepository->getAll();
        $listUser = $this->userRepository->getAll();
        $news = $this->newsRepository->find($id);
        return view('news.show', array('news' => $news, 'listNewsType' => $listNewsType, 'listUser' => $listUser));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        //$news = News::find($id);
        //$listNewsType = NewsType::all();
        //$listUser = User::all();
        $news = $this->newsRepository->find($id);
        $listNewsType = $this->newsTypeRepository->getAll();
        $listUser = $this->userRepository->getAll();
        return view('news.edit', array('news' => $news, 'listNewsType' => $listNewsType, 'listUser' => $listUser ));
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
        //
        //$news = News::find($id);
        //$news->update($request->all());
        $data = $request->all();
        $this->newsRepository->update($id, $data);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //News::destroy($id);
        $this->newsRepository->delete($id);
        return redirect()->route('news.index');
    }
}
