<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
protected $fillable = [
        'titre',
        'description',
        'teacher_id',
    ];
    use HasFactory;
    public function utilisateur() {
    return $this->belongsTo(Utilisateur::class,'teacher_id');
}
}
