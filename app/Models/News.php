<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'news_type_id', 
        'user_id',
        'tieu_de',
        'tom_tat',
        'noi_dung',
        'url_img',
        'ngay',
        'so_lan_xem',
        'tin_noi_bat',
        'so_luot_like'
    ];
    public function Comment(){
        return $this->hasMany(Comment::class, 'news_id');
    }
    public function NewsType(){
        return $this->belongsTo(NewsType::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}

