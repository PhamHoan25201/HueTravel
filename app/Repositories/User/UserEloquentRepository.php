<?php 
namespace App\Repositories\User;
use App\Repositories\EloquentRepository;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface{

    public function getModel(){
        return \App\Models\User::class;
    }
}
?>