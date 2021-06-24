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
    public function news(){
    	return $this->hasManyThrough(News::class,NewsType::class, 'category_id', 'news_type_id', 'id');
    }
    //Eloquent Event Using Closures
    protected static function booted(){
        static::creating(function($category){
            $category->name = ucwords($category->name);
        });
    }
}
