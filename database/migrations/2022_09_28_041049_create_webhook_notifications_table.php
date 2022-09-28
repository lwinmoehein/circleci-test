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
        Schema::create('webhook_notifications', function (Blueprint $table) {

            $table->id();
            $table->string('notification_id');
            $table->string('type');
            $table->string('happened_at');
            $table->boolean('has_vcs_info');
            $table->string('commit_subject')->nullable();
            $table->string('commit_author')->nullable();
            $table->string('event_status');
            $table->text('workflow_url');
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
        Schema::dropIfExists('webhook_notifications');
    }
};
