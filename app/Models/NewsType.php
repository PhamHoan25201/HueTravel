<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    use HasFactory;
    protected $table = 'news_type';
    protected $fillable = [
        'category_id', 
        'name',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function News(){
        return $this->hasMany(News::class, 'news_type_id');
    }
}
