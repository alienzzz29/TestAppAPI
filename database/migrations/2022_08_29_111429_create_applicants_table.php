<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contact_no');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->enum('civil_status',['single','married','widow','widower','legally separated']);
            $table->string('height');
            $table->enum('sex',['male','female']);
            $table->string('nationality');
            $table->string('applicant_qr')->nullable();
            $table->string('applicant_img')->nullable();
            $table->string('applicant_sig')->nullable();
            $table->string('applicant_thumb')->nullable();
            $table->bigInteger('address_id')->unsigned();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('applicants');
    }
}
