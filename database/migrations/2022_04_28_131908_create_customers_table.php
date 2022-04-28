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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('cust_code', 6)->primary();
            $table->string('cust_name', 40);
            $table->char('cust_city', 35);
            $table->string('working_area', 35);
            $table->char('FK_agent_code', 6)->nullable();

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
        Schema::dropIfExists('customers');
    }
};
