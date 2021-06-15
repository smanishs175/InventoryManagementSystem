<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $table='check_outs';

    public $primaryKey='id';
    public $timestamp=true;
}