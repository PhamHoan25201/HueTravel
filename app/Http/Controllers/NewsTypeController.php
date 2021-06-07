<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        try {
            DB::beginTransaction();
            $data = $request->all();
            $newstype = $this->newsTypeRepository->create($data);
            DB::commit();
            return redirect()->route('newstype.index');
        } catch (\Exception $exception) {
            return redirect()->route('newstype.index');
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
            $listCategory = $this->categoryRepository->getAll();
            $newstype = NewsType::findOrFail($id);
            DB::commit();
            return view('newstype.show', array('newstype' => $newstype), array('listCategory' => $listCategory));
        } catch (\Exception $exception) {
            return redirect()->route('newstype.index');
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
            $listCategory = $this->categoryRepository->getAll();
            $newstype = NewsType::findOrFail($id);
            DB::commit();
            return view('newstype.show', array('newstype' => $newstype), array('listCategory' => $listCategory));
        } catch (\Exception $exception) {
            return redirect()->route('newstype.index');        
        }
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
        try {
            DB::beginTransaction();
            $data = $request->all();
            $this->newsTypeRepository->update($id, $data);
            DB::commit();
            return redirect()->route('newstype.index');
        } catch (\Exception $exception) {
            return redirect()->route('newstype.index');        
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
            $this->newsTypeRepository->delete($id);
            DB::commit();
            return redirect()->route('newstype.index');
        } catch (\Exception $exception) {
            return redirect()->route('newstype.index');
        }
    }
}