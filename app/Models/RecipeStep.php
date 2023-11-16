<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_post_id',
        'step'
    ];

    public function stepBelongsToPost()
    {
        return $this->belongsTo(RecipePost::class, 'recipe_post_id');
    }
}
