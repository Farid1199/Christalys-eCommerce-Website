<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:255',
        ]);

        $review = new Review([
            'user_id' => Auth::id(), // Assuming users are authenticated
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        $review->save();

        return back()->with('success', 'Review submitted successfully!');
    }
}
