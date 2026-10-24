<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'services' => 'nullable',
            'budget' => 'nullable|string|max:100',
            'timeline' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:5000',
            'source' => 'nullable|string|max:100',
        ]);

        if (is_array($request->services)) {
            $validated['services'] = implode(', ', $request->services);
        }

        $validated['ip_address'] = $request->ip();

        $lead = Lead::create($validated);

        return response()->json([
            'success' => true,
            'id' => $lead->id,
            'message' => 'Thank you! Your inquiry has been received. Our strategy team will be in touch within 24 hours.',
        ]);
    }
}
