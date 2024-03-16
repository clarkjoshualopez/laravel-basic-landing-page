<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGalleryImage extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'image', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
