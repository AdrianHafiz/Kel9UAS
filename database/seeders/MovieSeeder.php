<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'Interstellar',
            'description' => "In Earth's future, a global crop blight and second Dust Bowl are slowly rendering the planet uninhabitable...",
            'director' => 'Christopher Nolan',
            'writers' => 'Christopher Nolan, Jonathan Nolan',
            'stars' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
            'image_url' => 'https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/297acd129204217.616629e21fe76.png'
        ]);

        Movie::create([
            'id' => 2,
            'title' => 'Forrest Gump',
            'description' => 'Forrest, a man with low IQ, recounts the early years of his life when he found himself in the middle of key historical events. All he wants now is to be reunited with his childhood sweetheart, Jenny.',
            'director' => 'Robert Zemeckis',
            'writers' => 'Winston Groom | Eric Roth',
            'stars' => 'Tom Hanks | Robin Wright | Gary Sinise'
        ]);

        Movie::create([
            'id' => 3,
            'title' => 'The Truman Show',
            'description' => 'He doesn\'t know it, but everything in Truman Burbank\'s (Jim Carrey) life is part of a massive TV set. Executive producer Christof (Ed Harris) orchestrates "The Truman Show," a live broadcast of Truman\'s every move captured by hidden cameras. Cristof tries to control Truman\'s mind...',
            'director' => 'Peter Weir',
            'writers' => 'Andrew Niccol',
            'stars' => 'Jim Carrey | Ed Harris | Laura Linney'
        ]);
    }
}
