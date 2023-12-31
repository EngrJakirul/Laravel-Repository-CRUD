<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price','user_id', 'category_id', 'description', 'image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function FrontUser()
    {
        return $this->belongsTo(FrontUser::class, 'user_id', 'id');
//        return $this->belongsTo(FrontUser::class);
    }
}
