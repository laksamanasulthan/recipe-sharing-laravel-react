<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RecipeLikeController;
use App\Http\Controllers\User\RecipePostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/myrecipe', [RecipePostController::class, 'myRecipe'])->name('myrecipe');
    Route::get('/recipe', [RecipePostController::class, 'index'])->name('recipe');
    Route::get('/recipe/{id}', [RecipePostController::class, 'edit'])->name('inside-recipe');
    Route::delete('recipe/{id}', [RecipePostController::class, 'destroy'])->name('delete-recipe');
    Route::patch('recipe/{id}', [RecipePostController::class, 'update'])->name('update-id');
    Route::get('/create-recipe', [RecipePostController::class, 'create'])->name('create-recipe');
    Route::post('/submit-recipe', [RecipePostController::class, 'store'])->name('store-recipe');
    Route::get('/list-of-like/{id}', [RecipePostController::class, 'listOfLike'])->name('list-of-like');

    Route::post('/like-recipe', [RecipeLikeController::class, 'like'])->name('like-recipe');
    Route::post('/unlike-recipe', [RecipeLikeController::class, 'unlike'])->name('unlike-recipe');
});

require __DIR__ . '/auth.php';
