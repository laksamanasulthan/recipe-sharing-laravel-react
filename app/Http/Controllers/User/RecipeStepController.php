<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\RecipeStep;
use App\Http\Requests\StoreRecipeStepRequest;
use App\Http\Requests\UpdateRecipeStepRequest;

class RecipeStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RecipeStep $recipeStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecipeStep $recipeStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeStepRequest $request, RecipeStep $recipeStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecipeStep $recipeStep)
    {
        //
    }
}
