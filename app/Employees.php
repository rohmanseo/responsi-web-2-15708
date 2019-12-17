<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    

    public function jobs()
    {
        return $this->belongsTo('App\Jobs','id_jobs');
    }
}
