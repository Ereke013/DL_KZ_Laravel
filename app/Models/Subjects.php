<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function teach(){
        return $this->hasMany('App\Models\Teach');
    }
}
