<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedback = Feedback::all();
        return view('welcome', compact('feedback'));
    }

    public function store(Request $request)
{
    $request->validate([
        'feedback' => 'required|string',
    ]);

    Feedback::create([
        'feedback' => $request->feedback,
    ]);

    return redirect()->back()->with('success', 'Feedback successfully submitted.');
}

public function showFeedback()
{
    $feedbacks = Feedback::all(); // Ambil semua feedback (disesuaikan dengan logika aplikasi Anda)

    return view('feedback', ['feedbacks' => $feedbacks]);
}
}