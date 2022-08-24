<?php

namespace Remeritus\LaravelDeveloperDashboard\Models\DeveloperDashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ldd_projects';

    protected $fillable = [
        'title'
    ];

}
