<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color', 'content', 'content_thumb', 'chocolate_type',  'size', 'main_thumb'];
}
