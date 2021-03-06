<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('supplier_id')->index();
            $table->bigInteger('product_id')->index();
            $table->bigInteger('sales_invoice_id')->index();
            $table->integer('qty');
            $table->string('status');
            $table->double('price','8','2');
            $table->double('parcelse_price','8','2');
            $table->double('sales_price','8','2');
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
        Schema::dropIfExists('parcelses');
    }
}
