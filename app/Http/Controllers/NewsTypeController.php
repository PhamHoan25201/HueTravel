<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsTypeRequest;
use App\Models\NewsType;
use App\Models\Category;
use App\Http\Resources\NewsTypeResource;
use App\Repositories\NewsType\NewsTypeEloquentRepository;
use App\Repositories\Category\CategoryEloquentRepository;

class NewsTypeController extends Controller
{

    protected $categoryRepository;

    protected $newsTypeRepository;

    public function __construct(NewsTypeEloquentRepository $newsTypeRepository, CategoryEloquentRepository $categoryRepository){
        $this->newsTypeRepository = $newsTypeRepository;
        $this->categoryRepository = $categoryRepository;
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
        //$listNewsType = NewsTypeResource::collection(NewsType::all());
        $listNewsType = NewsTypeResource::collection($this->newsTypeRepository->getAll());
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
        $listCategory = $this->categoryRepository->getAll();
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
        //NewsType::create($request->all());
        $data = $request->all();
        $newstype = $this->newsTypeRepository->create($data);
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
        //$listCategory = Category::all();
        $listCategory = $this->categoryRepository->getAll();
        $newstype = $this->newsTypeRepository->find($id);
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
        //$listCategory = Category::all();
        //$newstype = NewsType::find($id);
        $listCategory = $this->categoryRepository->getAll();
        $newstype = $this->newsTypeRepository->find($id);
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
        //$newstype = NewsType::find($id);
        //$newstype->update($request->all());
       
        $data = $request->all();
        $this->newsTypeRepository->update($id, $data);
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
        //NewsType::destroy($id);
        $this->newsTypeRepository->delete($id);
        return redirect()->route('newstype.index');
    }
}