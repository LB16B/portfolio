<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Manual;
use App\Models\Ingredient;
use App\Models\PaidMember;
use App\Http\Controllers\Controller;
use App\Models\AgeMonthCategory;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\StoreManualRequest;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Policies\AgeMonthCategoryPolicy;
use App\Policies\IngredientPolicy;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use \InterventionImage;
use Illuminate\Http\File;
use Intervention\Image\Facades\Image as InterventionImage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return Inertia::render('PaidMember/Recipe/Index', [
    //         'recipes' =>  Recipe::select('id', 'title')->get()            
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('PaidMember/Recipe/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request)
    {
    
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        
        $random_name = Str::random(15);
        $new_fname = date('Y-m-d') . $random_name . '.' . $extension;
        
        $imagePath = public_path('recipe_images') . '/' . $new_fname;

        $image = imagecreatefromstring(file_get_contents($file->getRealPath()));
        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);
        $aspectRatio = $originalWidth / $originalHeight;

        $resizedWidth = 500;
        $resizedHeight = 500;

        if ($aspectRatio > 1) {
            $resizedHeight = $resizedWidth / $aspectRatio;
        } else {
            $resizedWidth = $resizedHeight * $aspectRatio;
        }

        $resizedImage = imagescale($image, $resizedWidth, $resizedHeight);

        imagepng($resizedImage, $imagePath);


        $recipe = Recipe::create([
            'title' => $request->title,
            'paid_member_id' => Auth::id(),
            'ingredient_category_id' => $request->ingredient_category_id,
            'age_month_category_id' => $request->age_month_category_id,
            'cal' => $request->cal,
            'time' => $request->time,
            'price' => $request->price,
            'filename' => $new_fname,
        ]);

        Manual::create([
            'recipe_id' => $recipe->id,
            'manual1' => $request->manual1,
            'manual2' => $request->manual2,
            'manual3' => $request->manual3,
            'manual4' => $request->manual4,
            'manual5' => $request->manual5,
        ]);

        Ingredient::create([
            'recipe_id' => $recipe->id,
            'ingredient1' => $request->ingredient1,
            'ingredient2' => $request->ingredient2,
            'ingredient3' => $request->ingredient3,
            'ingredient4' => $request->ingredient4,
            'ingredient5' => $request->ingredient5,
            'ingredient6' => $request->ingredient6,
            'ingredient7' => $request->ingredient7,
            'ingredient8' => $request->ingredient8,
            'amount1' => $request->amount1,
            'amount2' => $request->amount2,
            'amount3' => $request->amount3,
            'amount4' => $request->amount4,
            'amount5' => $request->amount5,
            'amount6' => $request->amount6,
            'amount7' => $request->amount7,
            'amount8' => $request->amount8,
        ]);

        return to_route('paid_member.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::with(['ageMonthCategory', 'manual', 'ingredient'])->findOrFail($id);

        // dd($recipe);
        return Inertia::render('PaidMember/Recipe/Show', [
            'recipe' => $recipe,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeRequest  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
