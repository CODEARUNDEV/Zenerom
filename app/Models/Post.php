<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content',
        'category',
        'category_slug',
        'author',
        'author_avatar',
        'reading_time',
        'image',
        'published_at',
        'meta_title',
        'meta_description',
        'canonical_url',
        'is_featured',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function getAuthorAvatarUrlAttribute(): string
    {
        $slug = \Illuminate\Support\Str::slug($this->author ?? '');
        if ($slug && file_exists(public_path("assets/images/team/{$slug}.webp"))) {
            return asset("assets/images/team/{$slug}.webp");
        }

        $firstWord = strtolower(explode(' ', trim($this->author ?? ''))[0] ?? '');
        if ($firstWord && file_exists(public_path("assets/images/team/specialist-{$firstWord}.webp"))) {
            return asset("assets/images/team/specialist-{$firstWord}.webp");
        }

        if (!empty($this->author_avatar)) {
            if (str_starts_with($this->author_avatar, 'http://') || str_starts_with($this->author_avatar, 'https://')) {
                return $this->author_avatar;
            }
            if (file_exists(public_path($this->author_avatar))) {
                return asset($this->author_avatar);
            }
        }

        return asset('assets/images/blog-author-2.webp');
    }
}
