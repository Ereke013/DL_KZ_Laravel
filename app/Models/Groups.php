<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $table = 'groups';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function student(){
        return $this->hasMany('App\Models\Students');
    }

}
