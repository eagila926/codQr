<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistants extends Model
{
    use HasFactory;

    protected $table = 'assistants';
    
    protected $fillable = [
        'content_qr',

    ];
}
