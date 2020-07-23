<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model 
{

    protected $table = 'teachers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('teach_name', 'teach_desc');

    public function classes()
    {
        return $this->hasMany('Class_', 'id');
    }

}