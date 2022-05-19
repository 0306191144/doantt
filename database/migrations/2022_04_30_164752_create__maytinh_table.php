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
        Schema::create('maytinh', function (Blueprint $table) {
            $table->id();
            $table->string('tenmaytinh')->nullable();;
            $table->string('mota')->nullable();
            $table->string('ram')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ocung')->nullable();
            $table->integer('ma_phongmay')->nullable();
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
        Schema::dropIfExists('maytinh');
    }
};