<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('membership_id')->nullable();
            $table->foreign('membership_id')
            ->references('id')
            ->on('memberships')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('name');
            $table->text('lastname');
            $table->text('email');
            $table->string('phone');
            $table->text('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
