<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table ='posts';

    // registrasi field table posts
    protected $fillable = [
        'id', 'title', 'description', 'category', 'user_id', 'slug'
    ];

    //membuat setting attribut title
    public function setTitleAttribute($value)
    {
        $this->attributes ['title'] = $value; 
    }
}
