<?php

namespace Remeritus\LaravelDeveloperDashboard\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Remeritus\LaravelDeveloperDashboard\Models\DeveloperDashboard\Project;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->company(),
        ];
    }
}
