<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function webinar()
    {
        return $this->hasMany('App\Models\Webinar', 'category_id', 'id');
    }
}
