<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['utilisateur_id', 'cours_id'];
    use HasFactory;

   public function course(){
    return $this->belongsTo(Course::class);
   }

   public function student(){
    return $this->belongsTo(Utilisateur::class);
   }
}
