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
        'content',
        'image',
        'company_name',
        'POS',
        'Keywords',
        'RatingBefore',
        'RatingAfter',
        'status',
        'created_by',
    ];
}
