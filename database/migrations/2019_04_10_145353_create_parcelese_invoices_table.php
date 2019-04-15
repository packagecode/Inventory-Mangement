<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParceleseInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelese_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('supplier_id')->index();
            $table->bigInteger('invoice_no');
            $table->bigInteger('customer_id')->index();
            $table->bigInteger('do_no');
            $table->timestamp('date');
            $table->double('discount','8','2');
            $table->double('discount_value','8','2');
            $table->double('total','8','2');
            $table->double('less','8','2');
            $table->double('sub_total','8','2');
            $table->double('grand_total','8','2');
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
        Schema::dropIfExists('parcelese_invoices');
    }
}
