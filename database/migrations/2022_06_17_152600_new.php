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
        Schema::disableForeignKeyConstraints();

        Schema::create('profile_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('DOB');
            $table->string('Phone_no');
            $table->string('address');
            $table->string('bio');
            $table->timestamps();
        });
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Degree');
            $table->string('institute');
            $table->string('start_year');
            $table->string('end_year');
            $table->timestamps();
        });
        Schema::create('awards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('award');
            $table->string('year');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('designation');
            $table->string('organization');
            $table->string('start');
            $table->string('end');
            $table->timestamps();
        });
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('ratings');
            $table->string('comment');
            $table->timestamps();
        });
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkidin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('printrest')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('short_description');
            $table->longText('Descripition');
            $table->string('status');
            $table->integer('charges');
            $table->timestamps();
        });
        Schema::create('service_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('serviceimages');
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
        Schema::enableForeignKeyConstraints();
    }
};