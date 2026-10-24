<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featuredWorks = CaseStudy::orderBy('updated_at', 'desc')
            ->orderBy('sort_order', 'asc')
            ->take(3)
            ->get();
        $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();
        return view('pages.home', compact('featuredWorks', 'latestPosts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function seoDubai()
    {
        return $this->serviceShow('seo-services-dubai');
    }

    public function serviceShow($slug)
    {
        $service = \App\Services\ServiceCatalog::findBySlug($slug);
        if (!$service) {
            abort(404);
        }

        $relatedCaseStudies = $this->getRelatedCaseStudies($service['case_study_categories'] ?? [$service['category_slug'] ?? 'seo']);
        $relatedPosts = $this->getRelatedPosts($service['blog_categories'] ?? [$service['category_slug'] ?? 'digital-marketing']);
        $complementaryServices = \App\Services\ServiceCatalog::getRelated($slug, 4);

        if (!empty($service['view']) && view()->exists("pages.services.{$service['view']}")) {
            return view("pages.services.{$service['view']}", compact('service', 'relatedCaseStudies', 'relatedPosts', 'complementaryServices'));
        }

        return view('pages.services.show', compact('service', 'relatedCaseStudies', 'relatedPosts', 'complementaryServices'));
    }

    protected function getRelatedCaseStudies(array $categories, int $limit = 3)
    {
        $studies = CaseStudy::where(function ($q) use ($categories) {
            foreach ($categories as $cat) {
                $q->orWhere('category_slug', $cat)
                  ->orWhere('category', 'LIKE', '%' . $cat . '%');
            }
        })
        ->orderBy('sort_order', 'asc')
        ->take($limit)
        ->get();

        if ($studies->count() < $limit) {
            $fallback = CaseStudy::whereNotIn('id', $studies->pluck('id'))
                ->orderBy('sort_order', 'asc')
                ->take($limit - $studies->count())
                ->get();
            $studies = $studies->merge($fallback);
        }

        return $studies;
    }

    protected function getRelatedPosts(array $categories, int $limit = 3)
    {
        $posts = Post::where(function ($q) use ($categories) {
            foreach ($categories as $cat) {
                $q->orWhere('category_slug', $cat)
                  ->orWhere('category', 'LIKE', '%' . $cat . '%')
                  ->orWhere('title', 'LIKE', '%' . $cat . '%');
            }
        })
        ->orderBy('published_at', 'desc')
        ->take($limit)
        ->get();

        if ($posts->count() < $limit) {
            $fallback = Post::whereNotIn('id', $posts->pluck('id'))
                ->orderBy('published_at', 'desc')
                ->take($limit - $posts->count())
                ->get();
            $posts = $posts->merge($fallback);
        }

        return $posts;
    }

    public function solutions()
    {
        return view('pages.solutions');
    }

    public function industries()
    {
        return view('pages.industries');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
