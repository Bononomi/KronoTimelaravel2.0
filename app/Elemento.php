<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    public $timestamps = false;
    protected $table = 'elemento';
    protected $primaryKey = 'codEle';
}
