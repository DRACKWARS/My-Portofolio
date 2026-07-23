<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectImage;


class ProjectImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectImage::insert([

        [
            'project_id' => 1,
            'image' => 'login.png'
        ],

        [
            'project_id' => 1,
            'image' => 'create.png'
        ],
                [
            'project_id' => 1,
            'image' => 'profile.png'
        ],
                [
            'project_id' => 1,
            'image' => 'book view.png'
        ],
                [
            'project_id' => 1,
            'image' => 'dasboard admin.png'
        ],
                [
            'project_id' => 1,
            'image' => 'user.png'
        ],
                [
            'project_id' => 1,
            'image' => 'data buku.png'
        ],
                [
            'project_id' => 1,
            'image' => 'categori.png'
        ],
                [
            'project_id' => 1,
            'image' => 'book rent.png'
        ],
                [
            'project_id' => 1,
            'image' => 'rent log.png'
        ],
    ]);
    }
}
