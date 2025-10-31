<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utilisateur extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];
    use HasFactory;
    public function course(){
        return $this->hasMany(Course::class);
    }
    public function inscription(){

    }
}
