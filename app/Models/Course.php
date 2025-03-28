<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id'];
    
    public function category()
    {
        return $this->belongTo(Category::class);
    }
}
