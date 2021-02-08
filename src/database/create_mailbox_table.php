<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailboxes', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('smtp_host');
            $table->string('smtp_port');
            $table->string('smtp_username');
            $table->string('smtp_password');
            $table->string('imap_host');
            $table->string('imap_port');
            $table->string('imap_username');
            $table->string('imap_password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
