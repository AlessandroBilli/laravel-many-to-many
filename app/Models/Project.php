<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Metodo per definire la relazione many-to-many con il modello Technology
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
