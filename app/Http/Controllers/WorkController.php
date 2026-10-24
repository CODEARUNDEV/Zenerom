<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        $caseStudies = CaseStudy::orderBy('sort_order', 'asc')->get();
        return view('pages.work', compact('caseStudies'));
    }

    public function show($slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();

        // Determine Next Case Study in sequence
        $nextStudy = CaseStudy::where('sort_order', '>', $caseStudy->sort_order)
            ->orderBy('sort_order', 'asc')
            ->first();
        if (!$nextStudy) {
            $nextStudy = CaseStudy::orderBy('sort_order', 'asc')->first();
        }

        // Fetch Related Case Studies (same category or others, excluding current)
        $relatedStudies = CaseStudy::where('id', '!=', $caseStudy->id)
            ->where(function ($q) use ($caseStudy) {
                $q->where('category_slug', $caseStudy->category_slug)
                  ->orWhere('category', $caseStudy->category);
            })
            ->take(3)
            ->get();

        if ($relatedStudies->count() < 3) {
            $more = CaseStudy::where('id', '!=', $caseStudy->id)
                ->whereNotIn('id', $relatedStudies->pluck('id'))
                ->orderBy('sort_order', 'asc')
                ->take(3 - $relatedStudies->count())
                ->get();
            $relatedStudies = $relatedStudies->merge($more);
        }

        return view('pages.work-single', compact('caseStudy', 'nextStudy', 'relatedStudies'));
    }
}
