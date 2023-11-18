<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_user_id',
        'judul',
        'desc',
        'photo'
    ];

    public function postBelongsToUser()
    {
        return $this->belongsTo(User::class, 'recipe_user_id');
    }

    public function postHasManyIngredients()
    {
        return $this->hasMany(RecipeIngredient::class, 'recipe_post_id');
    }

    public function postHasManySteps()
    {
        return $this->hasMany(RecipeStep::class, 'recipe_post_id');
    }

    public function postHasManyLikes()
    {
        return $this->hasMany(RecipeLike::class, 'recipe_post_id');
    }
}
