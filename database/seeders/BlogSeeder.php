<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate and insert sample data for 10 blogs
        $blogs = [];
        for ($i = 1; $i <= 10; $i++) {
            $blogs[] = [
                'title' => "Blog $i",
                'content' => "This is the content of Blog $i.",
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('blogs')->insert($blogs);
    }
}
