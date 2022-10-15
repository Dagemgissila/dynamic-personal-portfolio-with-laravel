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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('profiletitle')->default('put here title');
            $table->string('profilesubtitle')->default('put here your sub title');
            $table->string('profileimage')->default('put here your personal photo');
            $table->string('aboutMeDescription')->default('describe your self here');
            $table->string('phonenumber')->default('0943880714');
            $table->string('address')->default('addis abeba ethiopia');
            $table->string('birthdate')->default('october 37 1993');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('profiles');
    }
};
