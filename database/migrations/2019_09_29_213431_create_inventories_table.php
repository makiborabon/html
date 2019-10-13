<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('recieved_by');
            $table->unsignedBigInteger('product_type_id');
            $table->string('sku')->nullable();
            $table->string('barcode');
            $table->string('product_name');
            $table->string('quantity');
            $table->string('price');
            $table->string('description');
            $table->string('remarks');
            $table->string('status');
            $table->string('date_recieved');
            $table->softDeletes();
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
        Schema::dropIfExists('inventories');
    }
}
