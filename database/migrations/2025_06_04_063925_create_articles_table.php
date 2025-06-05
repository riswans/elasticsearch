<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('file')->nullable();
            $table->bigInteger('user_id')->default(0);
            $table->text('descriptions');
            $table->bigInteger('category_id')->default(0);
            $table->enum('status',['active','no-active'])->default('no-active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
