<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('db.projects');
        foreach($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->image = $project['image'];
            $newProject->body = $project['body'];
            $newProject->slug = STR::slug($project['title'], '-');
            $newProject->user_id = 1;
            $newProject->save();
        }
    }
}
