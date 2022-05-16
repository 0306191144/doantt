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
        Schema::create('phancongs', function (Blueprint $table) {
            $table->id();
            $table->integer('malopphancong')->nullable();
            $table->string('thoigianbatdau')->nullable();
            $table->string('thoigianketthuc')->nullable();
            $table->string('noidungcv')->nullable();
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('phancongs');
    }
};