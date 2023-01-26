<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn extends Model
{
    use HasFactory;
    protected  $table="learns";
    protected $fillable=[
        'id',
        'main_content',
        'header',
        'sub_content',
        'content'
    ];
    
}
