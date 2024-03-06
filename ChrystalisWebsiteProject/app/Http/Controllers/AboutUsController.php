<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OverallReview;

class AboutUsController extends Controller
{
    public function submitform(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'review' => 'required',
        ]);

        // Store the form data in the database
        OverallReview::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for your review');
    }
}







