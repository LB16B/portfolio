<?php

namespace App\Http\Controllers;

use App\Models\IngredientCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIngredientCategoryRequest;
use App\Http\Requests\UpdateIngredientCategoryRequest;
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
        return Inertia::render('PaidMember/Recipe/Index', [
            'ingredient_categories' =>  IngredientCategory::select('id', 'name')
            ->get()
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
        //
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