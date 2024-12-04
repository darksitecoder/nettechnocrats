<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
       
        'heading',
        'content',
        'image',
        'company_name',
        
        'status',
        'created_by',
    ];
}
