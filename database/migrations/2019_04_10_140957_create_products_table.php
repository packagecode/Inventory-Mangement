<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name')->index();
            $table->bigInteger('supplier_id')->index();
            $table->bigInteger('cat_id')->index();
            $table->string('status');
            $table->bigInteger('user_id')->index();
            $table->string('picture');
            $table->integer('alart_qty');
            $table->integer('sell_price')->nullable();
            $table->double('parcelse_price','8','2')->nullable();
            $table->double('profit','8','2')->nullable();
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
        Schema::dropIfExists('products');
    }
}
