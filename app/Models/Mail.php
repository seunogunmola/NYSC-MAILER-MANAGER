<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Mail extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'uniqueid',
        'sender',
        'description',
        'destination',
        'date',
        'file',
        'status',
        'received_by',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
