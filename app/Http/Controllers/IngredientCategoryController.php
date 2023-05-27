<?php

namespace App\Http\Controllers;

use App\Models\IngredientCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIngredientCategoryRequest;
use App\Http\Requests\UpdateIngredientCategoryRequest;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Cache\Store;
>>>>>>> 3cfa08d (test)
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class IngredientCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        // return Inertia::render('PaidMember/Recipe/Index', [
        //     'ingredient_categories' =>  IngredientCategory::select('id', 'name')
        //     ->get()
        // ]);
        return Inertia::render('PaidMember/IngredientCategory/Index', [
            'ingredient_categories' =>  IngredientCategory::select('id', 'name')
            ->get()
=======
        return Inertia::render('PaidMember/IngredientCategory/Index', [
            'ingredient_categories' => IngredientCategory::select('id', 'name')->get()
>>>>>>> 3cfa08d (test)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngredientCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngredientCategory  $ingredientCategory
     * @return \Illuminate\Http\Response
     */
    public function show(IngredientCategory $ingredientCategory)
    {
<<<<<<< HEAD
        // dd($ingredientCategory);
        return Inertia::render('PaidMember/IngredientCategory/Show', [
            'ingredientCategory' =>  $ingredientCategory
        ]);
=======
        //
>>>>>>> 3cfa08d (test)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngredientCategory  $ingredientCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientCategory $ingredientCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredientCategoryRequest  $request
     * @param  \App\Models\IngredientCategory  $ingredientCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredientCategoryRequest $request, IngredientCategory $ingredientCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngredientCategory  $ingredientCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientCategory $ingredientCategory)
    {
        //
    }
}
