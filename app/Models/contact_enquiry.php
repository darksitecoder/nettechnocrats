<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    use HasFactory;

    // Specify the table name (if different from plural form of the model name)
    protected $table = 'contact_enquires';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'company_size',
        'company_name',
        'company_website',
        'project_title',
        'requirement',
    ];
}
