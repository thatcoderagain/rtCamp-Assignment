<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'title', 'correctness'];

    protected $hidden = ['correctness'];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
