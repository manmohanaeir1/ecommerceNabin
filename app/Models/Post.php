<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{           
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'admin_id');
    }


    public static function getPost(){
        $records = DB::table('posts')->select('id', 'post_title', 'post_slug','post_content')->get()->toArray();
        return $records;
    }
    



}
