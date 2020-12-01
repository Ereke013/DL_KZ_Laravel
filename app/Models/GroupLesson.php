<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupLesson extends Model
{
    use HasFactory;
    protected $table = 'group_lessons';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo('App\Models\GroupLesson','groupId');
    }

    public function teach()
    {
        return $this->belongsTo('App\Models\GroupLesson','teachId');
    }
}
