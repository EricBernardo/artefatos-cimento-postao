<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddSizeImagesServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->integer('image_height')->nullable()->default(0);
            $table->integer('image_width')->nullable()->default(0);
            $table->integer('image_mobile_height')->nullable()->default(0);
            $table->integer('image_mobile_width')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('image_height');
            $table->dropColumn('image_width');
            $table->dropColumn('image_mobile_height');
            $table->dropColumn('image_mobile_width');
        });
    }
}
