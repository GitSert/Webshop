<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'winery', 'ABV', 'image_url'];
}
