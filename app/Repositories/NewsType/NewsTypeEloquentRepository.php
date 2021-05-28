<?php 
namespace App\Repositories\NewsType;
use App\Repositories\EloquentRepository;

class NewsTypeEloquentRepository extends EloquentRepository implements NewsTypeRepositoryInterface{

    public function getModel(){
        return \App\Models\NewsType::class;
    }
}
?>