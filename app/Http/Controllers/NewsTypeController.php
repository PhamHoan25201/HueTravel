<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsTypeRequest;
use App\Models\NewsType;
use App\Models\Category;
use App\Http\Resources\NewsTypeResource;

class NewsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listNewsType = NewsTypeResource::collection(NewsType::all());
        //new NewsTypeResource(NewsType::find(1));
        return view('newstype.index', array('listNewsType' => $listNewsType));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listCategory = Category::all();
        return view('newstype.create', array('listCategory' => $listCategory));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsTypeRequest $request)
    {
        //
        NewsType::create($request->all());
        return redirect()->route('newstype.index');
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
        $listCategory = Category::all();
        $newstype = NewsType::find($id);
        return view('newstype.show', array('newstype' => $newstype), array('listCategory' => $listCategory));
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
        $listCategory = Category::all();
        $newstype = NewsType::find($id);
        return view('newstype.edit', array('newstype' => $newstype), array('listCategory' => $listCategory));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsTypeRequest $request, $id)
    {
        //
        $newstype = NewsType::find($id);
        $newstype->update($request->all());
        return redirect()->route('newstype.index');
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
        NewsType::destroy($id);
        return redirect()->route('newstype.index');
    }
}