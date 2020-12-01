<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    use HasFactory;
    protected $table = 'teaches';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teach','teacherId');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Teach','subjectId');
    }


    public function grLesson(){
        return $this->hasMany('App\Models\GroupLesson');
    }
}
