<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category11 extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(Store::class, 'category_id', 'id');
    }
}
