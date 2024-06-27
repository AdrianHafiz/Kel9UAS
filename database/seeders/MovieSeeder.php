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
            'title' => 'Forrest Gump',
            'description' => 'Forrest, a man with low IQ, recounts the early years of his life when he found himself in the middle of key historical events. All he wants now is to be reunited with his childhood sweetheart, Jenny.',
            'director' => 'Robert Zemeckis',
            'writers' => 'Winston Groom | Eric Roth',
            'stars' => 'Tom Hanks | Robin Wright | Gary Sinise',
            'image_url' => 'https://www.petersbilliards.com/images/jcogs_img/cache/forrest-gump-movie-poster_-_28de80_-_05eceabacb1dc8673d4f4daff4ac77d09b282167.jpg'
        ]);

        Movie::create([
            'title' => 'LIFE OF PI',
            'description' => 'After deciding to sell their zoo in India and move to Canada, Santosh and Gita Patel board a freighter with their sons and some animals. A storm sinks the ship, leaving their teenage son, Pi as the sole human survivor.',
            'director' => 'Ang Lee',
            'writers' => 'Yaan Martel | David Magee',
            'stars' => 'Suraj Sharma | Irrfan Khan | Adil Hussain',
            'image_url' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f75158fe-c94d-42a9-a954-285bd0abbc36/d5vtufq-98759060-509a-4302-9db3-27e5bc5750f9.png/v1/fill/w_1024,h_1449,q_80,strp/life_of_pi___a4_movie_poster_by_jswoodhams_d5vtufq-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTQ0OSIsInBhdGgiOiJcL2ZcL2Y3NTE1OGZlLWM5NGQtNDJhOS1hOTU0LTI4NWJkMGFiYmMzNlwvZDV2dHVmcS05ODc1OTA2MC01MDlhLTQzMDItOWRiMy0yN2U1YmM1NzUwZjkucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.i2FDzmTBtNooO-vmHIvqkTukqyx_t4h1zY-JXsYuuus'
        ]);

        Movie::create([
            'title' => 'Hacksaw Ridge',
            'description' => 'The true story of Pfc. Desmond T. Doss (Andrew Garfield), who won the Congressional Medal of Honor despite refusing to bear arms during WWII on religious grounds. Doss was drafted and ostracized by fellow soldiers for his pacifist stance but went on to earn respect and adoration for his bravery, selflessness and compassion after he risked his life -- without firing a shot -- to save 75 men in the Battle of Okinawa.',
            'director' => 'Mel Gibson',
            'writers' => 'Robert Schenkkan | Andrew Knight',
            'stars' => 'Andrew Garfield | Sam Worthington | Luke Bracey',
            'image_url' => 'https://wallpapercave.com/wp/wp11264783.jpg'
        ]);

        }}