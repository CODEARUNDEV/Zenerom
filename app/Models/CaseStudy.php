<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
        'slug',
        'num',
        'title',
        'category',
        'category_slug',
        'metric',
        'image',
        'secondary_image',
        'client',
        'summary',
        'timeline',
        'industry',
        'challenge',
        'solution',
        'solution_steps',
        'deliverables',
        'results',
        'testimonial',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'deliverables' => 'array',
        'results' => 'array',
        'solution_steps' => 'array',
        'testimonial' => 'array',
    ];
}
