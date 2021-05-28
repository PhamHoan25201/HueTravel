<?php 
namespace App\Repositories\News;
use App\Repositories\EloquentRepository;

class NewsEloquentRepository extends EloquentRepository implements NewsRepositoryInterface{

    public function getModel(){
        return \App\Models\News::class;
    }
}
?>