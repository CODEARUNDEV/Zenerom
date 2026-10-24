<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/seo-services-dubai', [PageController::class, 'seoDubai'])->name('services.seo');
Route::get('/seo-services-dubai', [PageController::class, 'seoDubai']);
Route::get('/services/{slug}', [PageController::class, 'serviceShow'])->name('services.show');

// Legacy 301 Redirects & Old Website Aliases (Zero Breakage)
Route::redirect('/performance-marketing/google-ad-agency-dubai', '/services/google-ads-agency-dubai', 301);
Route::redirect('/google-ads-agency-dubai', '/services/google-ads-agency-dubai', 301);
Route::redirect('/social-media', '/services/social-media-marketing-dubai', 301);
Route::redirect('/social-media-marketing-dubai', '/services/social-media-marketing-dubai', 301);
Route::redirect('/performance-marketing/lead-generation-services', '/services/lead-generation-dubai', 301);
Route::redirect('/lead-generation-dubai', '/services/lead-generation-dubai', 301);
Route::redirect('/web-development', '/services/website-development-dubai', 301);
Route::redirect('/website-development-dubai', '/services/website-development-dubai', 301);
Route::redirect('/web-development/ecommerce', '/services/ecommerce-development-dubai', 301);
Route::redirect('/ecommerce-development-dubai', '/services/ecommerce-development-dubai', 301);
Route::redirect('/app-development', '/services/mobile-app-development-dubai', 301);
Route::redirect('/mobile-app-development-dubai', '/services/mobile-app-development-dubai', 301);
Route::redirect('/app-development/web-app', '/services/web-application-development-dubai', 301);
Route::redirect('/web-application-development-dubai', '/services/web-application-development-dubai', 301);
Route::redirect('/branding', '/services/branding-agency-dubai', 301);
Route::redirect('/branding-agency-dubai', '/services/branding-agency-dubai', 301);
Route::redirect('/performance-marketing/video-advertising', '/services/video-production-dubai', 301);
Route::redirect('/video-production-dubai', '/services/video-production-dubai', 301);
Route::redirect('/enterprise-solutions/zoho-implementation-services-dubai', '/services/zoho-implementation-dubai', 301);
Route::redirect('/zoho-implementation-dubai', '/services/zoho-implementation-dubai', 301);
Route::redirect('/outsourcing', '/services/it-outsourcing-dubai', 301);
Route::redirect('/it-outsourcing-dubai', '/services/it-outsourcing-dubai', 301);
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/work', [WorkController::class, 'index'])->name('work');
Route::get('/work/{slug}', [WorkController::class, 'show'])->name('work.show');
Route::redirect('/works', '/work', 301);
Route::get('/works/{slug}', function ($slug) {
    return redirect('/work/' . $slug, 301);
});

// Blog Hub & Dynamic Articles (Preserves 100% SEO URLs)
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/api/blog/{slug}', [BlogController::class, 'fullContent'])->name('blog.api');

// Contact & Lead Generation
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [LeadController::class, 'store'])->name('contact.submit');
Route::post('/api/leads', [LeadController::class, 'store'])->name('leads.store');

// SEO XML Sitemap
Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');
    if (!file_exists($path)) {
        abort(404);
    }
    return response(file_get_contents($path), 200, [
        'Content-Type' => 'application/xml',
        'Cache-Control' => 'public, max-age=3600',
    ]);
});
