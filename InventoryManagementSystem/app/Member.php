<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='users';

    public $primaryKey='id';
    public $timestamp=true;
}
