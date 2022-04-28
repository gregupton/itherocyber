<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatamicAuthTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_users', function (Blueprint $table) {
            $table->Uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('super')->default(false);
            $table->string('avatar')->nullable();
            $table->json('preferences')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('password')->nullable()->change();
        });

        Schema::create('cms_role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('role_id');
        });

        Schema::create('cms_group_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('group_id');
        });

        Schema::create('password_activations', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
     public function down()
     {
         Schema::dropIfExists('cms_users');

         Schema::dropIfExists('cms_role_user');
         Schema::dropIfExists('cms_group_user');

         Schema::dropIfExists('password_activations');
     }
}
