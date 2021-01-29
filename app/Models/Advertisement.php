<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertisement';
    //tự động điền
    protected $fillable = [
        'url_img1',
        'url_img2',
        'start_date',
        'end_date',
        'description', 
        
    ];
    //tự động loaị trừ
    protected $guarded = [

    ];
}
