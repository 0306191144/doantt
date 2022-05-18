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
        Schema::create('cahoc', function (Blueprint $table) {
            $table->id();
            $table->string('tencahoc')->nullable();
            $table->integer('ma_giaovien')->nullable();
            $table->integer('ma_lophoc')->nullable();
            $table->integer('ma_phongmay')->nullable();
            $table->integer('ma_userkiemtra')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('cahoc');
    }
};