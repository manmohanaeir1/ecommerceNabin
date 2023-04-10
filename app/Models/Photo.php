<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'order',
        'description',
        'date',
        'status',
        'image',
        'thumbnail',
        
        
        
    ];

    public function photoLists()
    {
        return $this->hasMany(Photo_list::class);
    }

   

    


   
}
