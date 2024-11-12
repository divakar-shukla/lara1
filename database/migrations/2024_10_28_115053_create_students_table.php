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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('studen_id');
            $table->string('name');
            $table->timestamps();
            // $table->foreign('studen_id')->references('id')->on('users')->onDelete('cascade');//when parent user deleted this row also will delete
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('set null');//when parent user updated this column set nukl
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
