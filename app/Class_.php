<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Class_ extends Model 
{

    protected $table = 'classes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('cls_name', 'cls_desc', 'cls_address', 'cls_teach_id');

    public function sessions()
    {
        return $this->hasMany('Session_', 'id');
    }

    public function teachers()
    {
        return $this->belongsTo('Teacher', 'id');
    }

}