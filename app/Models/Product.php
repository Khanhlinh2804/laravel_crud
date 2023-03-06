<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    
    protected $fillable = ['id','name','price','sale_price','image','description','category_id','status'];
    public function categories(){
        return $this->hasOne(Category::class, 'id','category_id');
    }
    use HasFactory;
}
