<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Http\Controllers\Controller;
use App\Models\AgeMonthCategory;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Policies\AgeMonthCategoryPolicy;
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
    public function index()
    {
        return Inertia::render('PaidMember/Recipe/Index', [
            'recipes' =>  Recipe::select('id', 'title')->get()            
        ]);
    }

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
        
        // 画像のリサイズ
        $image = imagecreatefromstring(file_get_contents($file->getRealPath()));
        $resizedImage = imagescale($image, 30, 30);
        
        // リサイズ後の画像を保存
        imagepng($resizedImage, $imagePath);


        Recipe::create([
            'title' => $request->title,
            'ingredient_category_id' => $request->ingredient_category_id,
            'age_month_category_id' => $request->age_month_category_id,
            'cal' => $request->cal,
            'time' => $request->time,
            'price' => $request->price,
            'filename' => $new_fname,
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
        $recipe = Recipe::with('ageMonthCategory')->findOrFail($id);

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
