<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('body')->nullable();
            $table->integer('quant');
            $table->string('group')->nullable();
            $table->string('location')->nullable();
            $table->float('cost');
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
        Schema::dropIfExists('asset_stocks');
    }
}
