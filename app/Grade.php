<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model 
{

    protected $table = 'grades';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('grd_name', 'grd_desc');

    public function subjects()
    {
        return $this->belongsToMany('Subject', 'id');
    }

    public function sessions()
    {
        return $this->hasMany('Session_', 'id');
    }

}