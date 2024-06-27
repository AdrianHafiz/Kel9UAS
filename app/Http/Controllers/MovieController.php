<?php
// app/Http/Controllers/MovieController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Movie;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    public function mov1()
    {
        return view('movie.mov1');
    }

    public function mov2()
    {
        return view('movie.mov2');
    }

    public function mov3()
    {
        return view('movie.mov3');
    }

    public function mov4()
    {
        return view('movie.mov4');
    }

    public function mov5()
    {
        return view('movie.mov5');
    }

    public function storeRating(Request $request)
    {
        // Validasi input
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:255',
        ]);

        // Simpan rating dan review ke dalam tabel ratings
        $rating = new Rating();
        $rating->movie_id = $request->input('movie_id');
        $rating->rating = $request->input('rating');
        $rating->review = $request->input('review');
        $rating->save();

        // Redirect kembali ke halaman sebelumnya atau halaman lainnya
        return redirect()->back()->with('success', 'Rating berhasil disubmit.');
    }
}
