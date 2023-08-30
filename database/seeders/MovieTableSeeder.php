<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = [
            [
                'name' => 'Movie 1',
                'slug' => 'movie-1',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=tu_EPBLOsns&list=RDMM&index=22&ab_channel=DialogSenja',
                'thumbnail' => '/images/featured-1.png',
                'rating' => 9.3,
                'is_feature' => 1,
            ],
            [
                'name' => 'Movie 2',
                'slug' => 'movie-2',
                'category' => 'Comedy',
                'video_url' => 'https://www.youtube.com/watch?v=tu_EPBLOsns&list=RDMM&index=22&ab_channel=DialogSenja',
                'thumbnail' => '/images/featured-1.png',
                'rating' => 9.0,
                'is_feature' => 0,
            ],
            [
                'name' => 'Movie 3',
                'slug' => 'movie-3',
                'category' => 'Horror',
                'video_url' => 'https://www.youtube.com/watch?v=tu_EPBLOsns&list=RDMM&index=22&ab_channel=DialogSenja',
                'thumbnail' => '/images/featured-1.png',
                'rating' => 8.0,
                'is_feature' => 0,
            ]
        ];
        Movie::insert($movie);
    }
}