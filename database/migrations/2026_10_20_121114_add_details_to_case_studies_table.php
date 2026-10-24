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
        Schema::table('case_studies', function (Blueprint $table) {
            $table->text('summary')->nullable()->after('client');
            $table->string('timeline')->nullable()->after('summary');
            $table->string('industry')->nullable()->after('timeline');
            $table->json('solution_steps')->nullable()->after('solution');
            $table->json('testimonial')->nullable()->after('results');
            $table->string('secondary_image')->nullable()->after('image');
            $table->string('meta_title')->nullable()->after('sort_order');
            $table->text('meta_description')->nullable()->after('meta_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn([
                'summary',
                'timeline',
                'industry',
                'solution_steps',
                'testimonial',
                'secondary_image',
                'meta_title',
                'meta_description',
            ]);
        });
    }
};
