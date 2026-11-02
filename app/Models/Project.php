<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'category', 'stack', 'demo_url', 'source_url', 'icon', 'image'];
    protected $casts = ['stack' => 'array'];
}
