<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'recipe_post_id',
        'ingredients'
    ];

    public function ingredientBelongsToPost()
    {
        return $this->belongsTo(RecipePost::class, 'recipe_post_id');
    }
}
