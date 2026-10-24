<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = base_path('data/blogs.json');
        $fullPath = base_path('data/blogs-full.json');

        if (!file_exists($jsonPath)) {
            $this->command->error("data/blogs.json not found!");
            return;
        }

        $postsData = json_decode(file_get_contents($jsonPath), true);
        $fullContents = file_exists($fullPath) ? json_decode(file_get_contents($fullPath), true) : [];

        $count = 0;
        foreach ($postsData as $index => $item) {
            $slug = $item['slug'] ?? '';
            if (!$slug) continue;

            $fullItem = $fullContents[$slug] ?? null;
            $content = is_array($fullItem) ? ($fullItem['content'] ?? '') : (is_string($fullItem) ? $fullItem : ($item['excerpt'] ?? ''));
            
            $metaTitle = !empty($item['seoTitle']) ? $item['seoTitle'] : ($item['title'] . ' | Zenerom UAE');
            $metaDesc = !empty($item['seoDesc']) ? $item['seoDesc'] : ($item['excerpt'] ?? '');
            $canonicalUrl = !empty($item['canonical']) ? $item['canonical'] : ('https://zenerom.ae/blog/' . $slug . '/');
            $publishedAt = !empty($item['date']) ? Carbon::parse($item['date']) : now();
            $category = !empty($item['category']) ? $item['category'] : 'Digital Marketing';
            $categorySlug = \Illuminate\Support\Str::slug($category);

            Post::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $item['title'] ?? 'Untitled Article',
                    'excerpt' => $item['excerpt'] ?? '',
                    'content' => $content,
                    'category' => $category,
                    'category_slug' => $categorySlug,
                    'author' => $item['author'] ?? 'Zenerom Team',
                    'author_avatar' => 'assets/images/team/shefeek-niyas.webp',
                    'reading_time' => $item['readingTime'] ?? '5 min read',
                    'image' => $item['image'] ?? 'assets/images/Social_Share.webp',
                    'published_at' => $publishedAt,
                    'meta_title' => $metaTitle,
                    'meta_description' => $metaDesc,
                    'canonical_url' => $canonicalUrl,
                    'is_featured' => ($index === 0),
                ]
            );
            $count++;
        }

        $this->command->info("Successfully seeded {$count} authentic blog posts into MySQL!");
    }
}
