<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsType;
use App\Models\News;
use App\Models\User;
use App\Http\Resources\NewsResource;
use App\Http\Resources\UserResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listNews = UserResource::collection(News::all());
        $listNews = NewsResource::collection(News::all());
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
        $listNewsType = NewsType::all();
        $listUser = User::all();
        return view('news.create', array('listNewsType' => $listNewsType, 'listUser' => $listUser ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        News::create($request->all());
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
        $listNewsType = NewsType::all();
        $listUser = User::all();
        $news = News::find($id);
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
        
        $news = News::find($id);
        $listNewsType = NewsType::all();
        $listUser = User::all();
        return view('news.edit', array('news' => $news, 'listNewsType' => $listNewsType, 'listUser' => $listUser ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news = News::find($id);
        $news->update($request->all());
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
        News::destroy($id);
        return redirect()->route('news.index');
    }
}
