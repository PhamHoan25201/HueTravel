<?php 
namespace App\Repositories\Advertisement;
use App\Repositories\EloquentRepository;

class AdvertisementEloquentRepository extends EloquentRepository implements AdvertisementRepositoryInterface{

    public function getModel(){
        return \App\Models\Advertisement::class;
    }
}
?>