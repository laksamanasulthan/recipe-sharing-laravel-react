<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use App\Models\RecipePost;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRecipePostRequest;
use App\Http\Requests\UpdateRecipePostRequest;
use App\Models\RecipeIngredient;
use App\Models\RecipeStep;
use Carbon\Carbon;

class RecipePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postsRecipe  = RecipePost::withCount('postHasManyLikes')->get();
        return Inertia::render(
            'Recipe/LandingRecipe',
            [
                'recipes' => $postsRecipe,
                'currentUser' => Auth::user()->id
            ]
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function myRecipe()
    {
        $postsRecipe  = RecipePost::withCount('postHasManyLikes')
            ->where('recipe_user_id', Auth::user()->id)
            ->get();
        return Inertia::render(
            'Recipe/MyRecipe',
            [
                'recipes' => $postsRecipe,
                'currentUser' => Auth::user()->id
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Recipe/CreateRecipe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipePostRequest $request)
    {
        DB::beginTransaction();
        try {

            if ($request->has('photo')) {
                $recipe_photo = $request->file('photo');
                $recipe_photo_name = time() . "_" . 'photo' . "_" . Auth::user()->name . "_" . $recipe_photo->getClientOriginalName();
                $destination = "recipe_photo";
                $recipe_photo->move($destination, $recipe_photo_name);
            }

            $createRecipe = RecipePost::create([
                'judul' => $request->judul,
                'desc' => $request->desc,
                'photo' => !empty($request_photo_name) ? $request_photo_name : NULL,
            ]);

            foreach ($request->bahan as $ingredient) {
                $ingredients[] = [
                    'recipe_post_id' => $createRecipe->id,
                    'ingredients' => $ingredient,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            $createIngredients = RecipeIngredient::insert($ingredients);


            foreach ($request->step as $step) {
                $steps[] = [
                    'recipe_post_id' => $createRecipe->id,
                    'step' => $step,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            $createSteps  = RecipeStep::insert($step);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }

        return Inertia::render('Recipe/LandingRecipe');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecipePost $recipePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecipePost $id)
    {
        return Inertia::render('Recipe/InsideRecipe', [
            'recipe' => $id->load('postHasManyIngredients', 'postHasManySteps')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function listOfLike(RecipePost $id)
    {
        return Inertia::render('Recipe/LikeRecipe', [
            'recipe' => $id->load('postHasManyLikes')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipePostRequest $request, RecipePost $recipePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecipePost $id)
    {
        $id->delete();
    }
}
