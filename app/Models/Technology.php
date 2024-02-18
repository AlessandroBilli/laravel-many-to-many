<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // Metodo per definire la relazione many-to-many con il modello Project
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
