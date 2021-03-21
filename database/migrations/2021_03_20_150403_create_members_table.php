<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('date_of_birth');
            $table->string('national_id_no')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('email')->nullable();
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('mobile3')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamp('adimssion_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('permanent_village')->nullable();
            $table->string('permanent_thana')->nullable();
            $table->string('permanent_sub_district')->nullable();
            $table->string('permanent_district')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('present_village')->nullable();
            $table->string('present_thana')->nullable();
            $table->string('present_sub_district')->nullable();
            $table->string('present_district')->nullable();
            $table->text('present_address')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->boolean('issued')->default(0);
            //$table->foreignId('issued_by')->nullable();
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
        Schema::dropIfExists('members');
    }
}
