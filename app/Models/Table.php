<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Add 'name' here to allow mass assignment
        'number',
        'image_path',
        // Add other fields as needed
    ];
}
