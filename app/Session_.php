<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session_ extends Model 
{

    protected $table = 'session';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('ses_grd_id', 'ses_cls_id');

    public function classes()
    {
        return $this->belongsTo('Class_', 'id');
    }

    public function students()
    {
        return $this->belongsToMany('Student', 'id');
    }

    public function grades()
    {
        return $this->belongsTo('Grade', 'id');
    }

}