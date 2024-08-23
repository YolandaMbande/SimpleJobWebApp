<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->unsignedBigInteger('employer_id')->change();
        });
    }

    public function down():void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            // Optionally change it back to nullable if needed
            $table->unsignedBigInteger('employer_id')->nullable()->change();
        });
    }



};
