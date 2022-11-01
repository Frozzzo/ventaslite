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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->string('email')->unique();
            $table->string('name', 100);
            $table->string('password', 50);
            $table->string('phone', 10);
            $table->string('image', 100);
            $table->enum('status', ['ACTIVE', 'LOCKED'])->default('ACTIVE');
            $table->enum('profile', ['ADMIN', 'EMPLOYEE'])->default('ADMIN');
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
};
