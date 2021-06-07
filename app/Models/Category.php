<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //trait
    use HasFactory;
    protected $table = 'category';
    //Mass Assigment
    protected $fillable = [
        'name', 
        'status'
    ];
    //Relationships
    public function newsType(){
        return $this->hasMany(NewsType::class,'category_id');
    }
    //Eloquent Event Using Closures
    protected static function booted(){
        static::creating(function($category){
            $category->name = ucwords($category->name);
        });
    }
}
