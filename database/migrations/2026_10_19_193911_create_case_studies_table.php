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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('num')->default('01');
            $table->string('title');
            $table->string('category')->default('SEO');
            $table->string('category_slug')->default('seo');
            $table->string('metric')->nullable();
            $table->string('image')->nullable();
            $table->string('client')->nullable();
            $table->text('challenge')->nullable();
            $table->text('solution')->nullable();
            $table->json('deliverables')->nullable();
            $table->json('results')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
