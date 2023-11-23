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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("gender");
            $table->date("dob");
            $table->string("location");
            $table->enum("role",['supervisor','manager','employee'])->default('employee');
            $table->string('email');
            $table->string('payroll_num');
            $table->integer('empId');
            $table->string('department');
            $table->string('designation');
            $table->date('employ_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
