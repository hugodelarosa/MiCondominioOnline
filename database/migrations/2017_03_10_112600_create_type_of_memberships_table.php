<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeOfMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_of_memberships', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('unlocked_feature_id');
            $table->foreign('unlocked_feature_id')
            ->references('id')
            ->on('unlocked_features')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('name');
            $table->float('cost');
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
        Schema::dropIfExists('type_of_memberships');
    }
}
