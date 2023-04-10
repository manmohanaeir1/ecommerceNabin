<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductCategory extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'order',  
        'slug',
        'parent_id',
        'status',
    ];
    public function subCategory(){
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
    public static function getCategory(){
        $records = DB::table('categories')->select('id', 'category_name', 'slug')->get()->toArray();
        return $records;
    }
}
