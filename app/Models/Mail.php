<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'description',
        'destination',
        'date',
        'file',
        'status',
        'received_by'
    ];
}
