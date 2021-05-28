<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use \Illuminate\Support\Facades\Validator;
use App\Repositories\Category\CategoryEloquentRepository;
//use App\Models\NewsType;

class CategoryController extends Controller
{
    //Laravel02
    protected $CategoryRepository;

    public function __construct(CategoryEloquentRepository $CategoryRepository){
        $this->CategoryRepository = $CategoryRepository;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$listCategory = Category::all();
        $listCategory = $this->CategoryRepository->getAll();
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
        //Category::create($request->all());
        $data = $request->all();
        $category = $this->CategoryRepository->create($data);
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->CategoryRepository->find($id);
        // if($category == null){
        //     return redirect()->route('category.index')->with('message', 'Not found category');
        // }
        return view('category.show', array('category' => $category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$category = Category::find($id);
        $category = $this->CategoryRepository->find($id);
        return view('category.edit', array('category' => $category));
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
        //$category = Category::find($id);
        //$category->update($request->all());

        $data = $request->all();
        $category = $this->CategoryRepository->update($id, $data);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Category::destroy($id);
        $this->CategoryRepository->delete($id);
        return redirect()->route('category.index');
    }
}
