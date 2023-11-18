<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use App\Models\RecipeLike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRecipeLikeRequest;
use App\Http\Requests\UpdateRecipeLikeRequest;

class RecipeLikeController extends Controller
{

    /**
     * Display People who like the Post
     */
    public function show(Request $request)
    {

        $folksWhoLikesThePost = RecipeLike::with(['likesBelongsToUser:name'])
            ->where('recipe_post_id', $request->recipe_post_id)
            ->get();

        return Inertia::render();
    }

    /**
     * Like  Logic
     */
    public function like(StoreRecipeLikeRequest $request)
    {
        // dd($request);
        RecipeLike::create([
            'recipe_post_id' => $request->post_id,
            'recipe_user_id' => $request->user_id,
        ]);
    }

    /**
     * Unlike Logic
     */
    public function unlike(StoreRecipeLikeRequest $request)
    {
        RecipeLike::where([
            ['recipe_post_id', $request->recipe_post_id],
            ['recipe_user_id', Auth::user()->id,]
        ])->delete();
    }
}
