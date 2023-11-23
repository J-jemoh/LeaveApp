<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('payroll_num');
            $table->string('leave_type');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('days');
            $table->string('handOver_name');
            $table->string('handOver_phone');
            $table->string('department');
            $table->string('status')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('date')->nullable();
            $table->string('signature')->nullable();
            $table->string('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
