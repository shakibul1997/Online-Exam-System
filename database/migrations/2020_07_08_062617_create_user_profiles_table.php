<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->string('gender');
            $table->integer('mobile');
            $table->date('birth');
            $table->string('nid');
            $table->string('address1');
            $table->string('address2');
            $table->integer('s_roll');
             $table->string('s_group');
             $table->integer('s_year');
             $table->string('s_board');
             $table->integer('s_gpa');

             $table->integer('h_roll');
             $table->string('h_group');
             $table->integer('h_year');
             $table->string('h_board');
             $table->integer('h_gpa1');

              $table->string('g_university');
             $table->string('g_department');
             $table->integer('g_year');
             $table->integer('g_duration');
             $table->integer('g_cgpa');

             $table->string('m_university')->nullable()->default(null);
             $table->string('m_department')->nullable()->default(null);
             $table->integer('m_year')->nullable()->default(null);
             $table->integer('m_duration')->nullable()->default(null);
             $table->integer('m_cgpa1')->nullable()->default(null);
              $table->string('postname')->nullable()->default(null);
             $table->integer('lengthofservice')->nullable()->default(null);
             $table->string('organization')->nullable()->default(null);
             $table->string('describe')->nullable()->default(null);
             $table->string('skill');
            $table->string('image')->default('defaultuserphoto.jpg');
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
        Schema::dropIfExists('user_profiles');
    }
}
