<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model 
{

    protected $table = 'exams';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('ex_sub_id');

    public function subjects()
    {
        return $this->belongsTo('Subject', 'id');
    }

    public function results()
    {
        return $this->hasMany('Result', 'id');
    }

}