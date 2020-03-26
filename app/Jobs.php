<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $primaryKey = 'id_jobs';

    protected $fillable = ['name'];
    protected $table = 'jobs';
    
}
