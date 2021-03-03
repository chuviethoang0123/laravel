<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orders')){
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->bigInteger('used_id')->nullable();
            $table->text('address')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1:new,2:improgress,3:finish,4:cancel');
            $table->tinyInteger('total_price')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('orders')){
        Schema::dropIfExists('orders');
        }
    }
}
