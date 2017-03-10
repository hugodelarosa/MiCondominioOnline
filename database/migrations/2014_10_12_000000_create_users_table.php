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
            $table->unsignedBigInteger('membership_id');
            $table->foreign('membership_id')->references('id')->on('memberships');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->text('name');
            $table->text('last_name');
            $table->text('email');
            $table->string('telephone');
            $table->text('password');
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
