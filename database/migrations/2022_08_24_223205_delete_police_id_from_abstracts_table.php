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
        Schema::table('abstracts', function (Blueprint $table) {
            $table->unsignedInteger('received_by')->nullable()->change();
            $table->dropColumn('police_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abstracts', function (Blueprint $table) {
            $table->string('police_id')->nullable();
            $table->string('received_by')->nullable()->change();
        });
    }
};
