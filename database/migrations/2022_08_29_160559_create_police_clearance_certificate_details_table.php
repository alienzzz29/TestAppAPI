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
            $table->bigInteger('ctc_id')->unsigned();
            $table->bigInteger('police_id')->unsigned();
            $table->bigInteger('oic_id')->unsigned();
            $table->bigInteger('payment_id')->unsigned();
            $table->enum('status',['pending payment','pending confirmation','under investigation','pending for printing','done']);
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
        Schema::dropIfExists('police_clearance_certificate_details');
    }
}
