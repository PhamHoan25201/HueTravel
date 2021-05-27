<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use \Illuminate\Support\Facades\Validator;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;

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
        $listCategory = Category::all();
        return new CategoryCollection($listCategory);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        // if($category == null){
        //     return redirect()->route('category.index')->with('message', 'Not found category');
        // }
        return new CategoryResource($category);
        
    }

}
