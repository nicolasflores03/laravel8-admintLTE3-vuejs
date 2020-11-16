<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('user_type_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('area_base_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('employee_id')->nullable();
            $table->datetime('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->index('user_type_id')->nullable();
            $table->index('company_id')->nullable();
            $table->index('area_base_id')->nullable();
            $table->index('department_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
