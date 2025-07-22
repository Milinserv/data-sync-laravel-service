<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet_rows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheet_id');
            $table->longText('row_data');
            $table->enum('status', ['Allowed', 'Prohibited'])->default('Allowed');
            $table->timestamps();

            $table->foreign('sheet_id')->references('id')->on('sheets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheet_rows');
    }
}
