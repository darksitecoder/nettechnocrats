<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTopic extends Model
{
    use HasFactory;

    protected $table = 'blog_topics';

    protected $fillable = [
        'topic',
        'created_by',
    ];
}
