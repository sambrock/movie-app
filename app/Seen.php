<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seen extends Model
{
    protected $table = 'watched';
    public $timestamps = false;
}
