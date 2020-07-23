<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model 
{

    protected $table = 'subjects';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('sub_name', 'sub_desc');

    public function exams()
    {
        return $this->hasMany('Exam', 'id');
    }

    public function grades()
    {
        return $this->belongsToMany('Grade', 'id');
    }

}