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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('order')->default(0);
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description', 'order']);
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
