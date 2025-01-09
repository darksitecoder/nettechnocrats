<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'slug',
        'heading',
        'content',
        'image',
        'video',
        'pdf',
        'status',
        'created_by',
    ];
}
