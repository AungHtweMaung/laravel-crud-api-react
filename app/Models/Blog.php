<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\BlogSearchTrait;

class Blog extends Model
{
    use HasFactory, BlogSearchTrait;

    protected $fillable = [
        'title',
        'description',
    ];
}
