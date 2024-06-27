<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:255',
        ]);

        // Simpan rating dan review ke dalam tabel ratings
        $rating = new Rating();
        $rating->movie_id = $request->movie_id;
        $rating->rating = $request->rating;
        $rating->review = $request->review;
        $rating->save();

        // Jika menggunakan Ajax, kirim respons JSON
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Rating saved successfully']);
        }

        // Redirect atau tampilkan kembali halaman dengan pesan sukses
        return redirect()->back()->with('success', 'Rating saved successfully');
    }
}
