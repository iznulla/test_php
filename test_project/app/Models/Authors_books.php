<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors_books extends Model
{
    protected $fillable = ['name', 'authors_id'];
    use HasFactory;
}
