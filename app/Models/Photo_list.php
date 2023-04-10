<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_list extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'photo_id' ];

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
    }
    
    
