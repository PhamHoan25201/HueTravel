<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Repositories\Category\CategoryEloquentRepository;


class CategoryController extends Controller
{
    //Laravel02
    protected $catRepo;

    public function __construct(CategoryEloquentRepository $catRepo){
        $this->catRepo = $catRepo;
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategory = $this->catRepo->getAll();
        return view('Category.index', array('listCategory' => $listCategory));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $category = $this->catRepo->create($data);
            DB::commit();
            return redirect()->route('category.index')->with("success",trans('tpl.admin.add.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('category.index')->with("error",trans('tpl.admin.add.fail'));
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
            $category = Category::findOrFail($id);
            DB::commit();
            return view('category.show', array('category' => $category));
        } catch (\Exception $exception){
            DB::rollBack();
            return redirect()->route('category.index')->with("error",trans('tpl.admin.notFound')); 
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
            $category = Category::findOrFail($id);
            DB::commit();
            return view('category.edit', array('category' => $category));
        } catch (\Exception $exception){
            DB::rollBack();
            return redirect()->route('category.index')->with("error",trans('tpl.admin.notFound'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->catRepo->update($id, $request->all());
            DB::commit();
            return redirect()->route('category.index')->with("success",trans('tpl.admin.update.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('category.index');
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
            $this->catRepo->delete($id);
            DB::commit();
            return redirect()->route('category.index')->with("success",trans('tpl.admin.delete.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('category.index');
        }
    }
}
