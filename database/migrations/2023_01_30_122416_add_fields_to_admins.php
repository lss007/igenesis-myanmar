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
        Schema::table('admins', function (Blueprint $table) {
            //
            $table->string('company')->after('password')->nullable();
            $table->string('job')->after('company')->nullable();
            $table->string('country')->after('job')->nullable();
            $table->string('address')->after('country')->nullable();
            $table->string('phone')->after('address')->nullable();

            $table->string('twitter')->after('phone')->nullable();
            $table->string('facebook')->after('twitter')->nullable();
            $table->string('instagram')->after('facebook')->nullable();
            $table->string('linkedin')->after('instagram')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            //
            $table->dropColumn('company');
            $table->dropColumn('job');
            $table->dropColumn('country');
            $table->dropColumn('address');
            $table->dropColumn('phone');

            $table->dropColumn('twitter');
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('linkedin');


        });
    }
};
