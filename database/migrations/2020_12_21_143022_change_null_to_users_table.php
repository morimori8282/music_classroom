<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('official_name', 255)->nullable()->change();
            $table->string('phonetic_name', 255)->nullable()->change();
            $table->string('salt', 255)->nullable()->change();
            $table->integer('gender')->nullable()->change();
            $table->date('birthday')->nullable()->change();
            $table->string('tel', 255)->nullable()->change();
            $table->string('zip', 255)->nullable()->change();
            $table->integer('pref')->nullable()->change();
            $table->string('address', 255)->nullable()->change();
            $table->string('building', 255)->nullable()->change();
            $table->string('remark', 255)->nullable()->change();
            $table->date('deleted_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
