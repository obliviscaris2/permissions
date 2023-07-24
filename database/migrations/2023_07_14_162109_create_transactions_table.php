<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registration_id')->unique();
             $table->date('tran_date');
            // $table->unsignedBigInteger('tran_purpose_id')->default(0);
            // $table->unsignedBigInteger('tran_nature_id');
            // $table->unsignedBigInteger('tran_proof_id');
            $table->string('tran_amount');
            // $table->foreign('tran_purpose_id')->references('id')->on('tran_purposes')->onDelete('cascade');
            // $table->foreign('tran_nature_id')->references('id')->on('tran_natures')->onDelete('cascade');
            // $table->foreign('tran_proof_id')->references('id')->on('tran_proofs')->onDelete('cascade');
            $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('cascade');
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
        Schema::dropIfExists('transactions');
    }
}
