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
        Schema::table('model_has_roles', function (Blueprint $table) {
            // Ubah kolom model_id menjadi string agar bisa menyimpan UUID atau string custom
            $table->string('model_id', 6)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_has_roles', function (Blueprint $table) {
            // Kembalikan ke integer jika ingin rollback
            $table->unsignedBigInteger('model_id')->change();
        });
    }
};
