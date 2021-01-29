<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_Type extends Model
{
    use HasFactory;
    protected $table = 'news_type';
    protected $fillable = [
        'category_id', 
        'name',
        'status'
    ];
}
