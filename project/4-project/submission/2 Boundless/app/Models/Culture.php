<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $table = 'culture';
    
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
