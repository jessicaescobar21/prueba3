<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->decimal('ord_num', 6, 0)->primary();
            $table->decimal('ord_amount', 12, 2);
            $table->date('ord_date');
            $table->string('ord_description', 60);
            $table->string('FK_cust_code', 6)->nullable();
            $table->char('FK_agent_code', 6)->nullable();

            $table->foreign('FK_cust_code')
                  ->references('cust_code')
                  ->on('customers')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            
            $table->foreign('FK_agent_code')
                  ->references('agent_code')
                  ->on('agents')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
