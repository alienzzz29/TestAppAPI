<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliceClearanceCertificateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_clearance_certificate_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pcc_id')->unsigned();
            $table->bigInteger('applicant_id')->unsigned();
            $table->bigInteger('purpose_id')->unsigned();
            $table->bigInteger('findings_id')->unsigned();
            $table->bigInteger('ctc_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('payment_id')->unsigned();
            $table->enum('status',['pending payment','pending confirmation','confirmed']);
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
        Schema::dropIfExists('police_clearance_certificate_details');
    }
}
