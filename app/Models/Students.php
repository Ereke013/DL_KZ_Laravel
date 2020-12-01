<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo('App\Models\Students','groupId');
    }
}
