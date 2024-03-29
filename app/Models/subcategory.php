<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'subcategory_slug', 
    ];

    public function category()
    {
        return $this->belongsTo(category::class,'category_id');
    }
}
