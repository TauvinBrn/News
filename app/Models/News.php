<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class News extends Model
{
    use HasFactory;

    protected $table = 'News';
    protected $guarded = false;
}
