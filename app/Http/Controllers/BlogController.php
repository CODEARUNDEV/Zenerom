<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        // Topic category filter
        if ($request->filled('category') && strtolower($request->category) !== 'all') {
            $cat = $request->category;
            $query->where(function ($q) use ($cat) {
                $q->where('category', $cat)
                  ->orWhere('category_slug', $cat);
            });
        }

        // Live search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");
            });
        }

        $query->orderBy('published_at', 'desc');

        // Check if viewing all 72 or paginated
        if ($request->get('view') === 'all') {
            $posts = $query->get();
        } else {
            $posts = $query->paginate(9)->withQueryString();
        }

        $featuredPost = Post::where('is_featured', true)->first() ?? Post::orderBy('published_at', 'desc')->first();

        // Exact authentic categories with counts
        $categoryCounts = [
            'SEO' => Post::where('category', 'SEO')->count(),
            'Digital Marketing' => Post::where('category', 'Digital Marketing')->count(),
            'Branding' => Post::where('category', 'Branding')->count(),
            'Performance Ads' => Post::where('category', 'Performance Ads')->count(),
            'Web Dev' => Post::where('category', 'Web Dev')->count(),
            'Social Media' => Post::where('category', 'Social Media')->count(),
            'Growth Strategy' => Post::where('category', 'Growth Strategy')->count(),
            'Software Dev' => Post::where('category', 'Software Dev')->count(),
            'Outsourcing' => Post::where('category', 'Outsourcing')->count(),
        ];
        $totalCount = Post::count();

        // Pass all 72 items for instant client-side modal hydration and live search
        $allBlogs = Post::select('slug', 'title', 'excerpt', 'category', 'category_slug', 'author', 'reading_time', 'image', 'published_at', 'canonical_url')->get();

        return view('pages.blog.index', compact('posts', 'featuredPost', 'categoryCounts', 'totalCount', 'allBlogs'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }

    public function fullContent($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return response()->json([
            'slug' => $post->slug,
            'title' => $post->title,
            'category' => $post->category,
            'author' => $post->author,
            'reading_time' => $post->reading_time,
            'published_at' => $post->published_at ? $post->published_at->format('F d, Y') : '',
            'content' => $post->content,
            'canonical_url' => $post->canonical_url,
        ]);
    }
}
