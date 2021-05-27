<?php 
namespace App\Repositories\Category;
use App\Repositories\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface{

    public function getModel(){
        return \App\Models\Category::class;
    }
}
?>