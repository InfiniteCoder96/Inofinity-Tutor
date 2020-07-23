<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model 
{

    protected $table = 'students';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('std_name');

    public function sessions()
    {
        return $this->belongsToMany('Session_', 'id');
    }

    public function results()
    {
        return $this->hasMany('Result', 'id');
    }

}