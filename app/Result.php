<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model 
{

    protected $table = 'results';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('res_exm_id', 'res_std_id');

    public function exams()
    {
        return $this->belongsTo('Exam', 'id');
    }

    public function students()
    {
        return $this->belongsTo('Student', 'id');
    }

}