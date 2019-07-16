<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaging', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 150);
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('subject')->nullable();
            $table->longText('message');
            $table->boolean('read_status');
            $table->enum('type', ['pengaduan','saran']);
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
        Schema::dropIfExists('messaging');
    }
}
