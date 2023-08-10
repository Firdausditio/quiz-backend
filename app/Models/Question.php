<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'quiz_id',
        'description',
    ];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    //inverse one to many
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
