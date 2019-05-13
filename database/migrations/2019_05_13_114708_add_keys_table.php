<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
