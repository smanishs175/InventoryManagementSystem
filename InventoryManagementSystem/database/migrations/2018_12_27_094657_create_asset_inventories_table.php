<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('group')->nullable();
            $table->mediumText('body')->nullable();
            $table->float('cost_add');
            $table->float('cost_remove');
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_inventories');
    }
}
