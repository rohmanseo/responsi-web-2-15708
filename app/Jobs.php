<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = ['name'];
    protected $table = 'jobs';
    
}
