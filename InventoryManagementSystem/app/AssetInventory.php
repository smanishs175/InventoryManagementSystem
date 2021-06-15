<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetInventory extends Model
{
    protected $table='asset_inventories';

    public $primaryKey='id';

    public $timestamp=true;
}
