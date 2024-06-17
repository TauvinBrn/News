<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use mysql_xdevapi\Table;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'News';
    protected $guarded = false;
    protected $fillable = [
        'title',
        'content',
        'description',
        'images',
        'images2',
    ];
}
