<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_post_id',
        'recipe_user_id'
    ];

    public function likesBelongsToUser()
    {
        return $this->belongsTo(User::class, 'recipe_user_id');
    }

    public function likesBelongsToPost()
    {
        return $this->belongsTo(User::class, 'recipe_post_id');
    }
}
