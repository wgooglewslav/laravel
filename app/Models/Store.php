<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AboutController;

class Store extends Model
{
    protected $fillable = ['title','content','likes','image', 'category_id', 'tags', 'post_id'];
    protected $guarded = [];

    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id','tag_id');
    }
}
