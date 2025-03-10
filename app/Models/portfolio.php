<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
        'portfolio_no',
        'category_1',
        'category_2',
        'heading',
        'industry',
        'content',
        'content_start',
        'content_final',

        'image',
        'image_start',
        'image_final',
        'company_name',

        'seo_title',
        'seo_decription',
        'status',
        'created_by',
    ];
}
