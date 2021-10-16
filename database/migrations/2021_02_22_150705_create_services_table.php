<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('text_type');
            $table->string('performance_type');
            $table->longtext('inserted_text');
            $table->string('producing');
            $table->string('music_type');
            $table->longText('invoice_image');
            $table->string('read_status')->default('unread');
            $table->string('status')->default('unapproved');
            $table->string('active_status')->default('active');
            $table->string('reject_message')->default('none');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
