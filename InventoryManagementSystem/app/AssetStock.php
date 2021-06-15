<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetStock extends Model
{
    protected $table='asset_stocks';
    public $primaryKey='id';
    public $timestamp=true;
}
