<?php

namespace App\Http\Controllers;

use App\Models\ageMonthCategory;
use App\Models\IngredientCategory;
use App\Models\Recipe;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonthCategoryRequest;
use App\Http\Requests\UpdateMonthCategoryRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;



class AgeMonthCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ageMonthCategories = AgeMonthCategory::with('recipes')->get();

        return Inertia::render('PaidMember/AgeMonthCategory/Index', [
            'age_month_categories' => $ageMonthCategories,
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
     * @param  \App\Http\Requests\StoreageMonthCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreageMonthCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ageMonthCategory  $ageMonthCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ageMonthCategory = AgeMonthCategory::findOrFail($id);
        $recipes = Recipe::with(['ingredientCategory', 'ageMonthCategory'])->where("age_month_category_id", $id)->paginate(12);
    
        return Inertia::render('PaidMember/AgeMonthCategory/Show', [
            'ageMonthCategory' => $ageMonthCategory,
            'recipes' => $recipes,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ageMonthCategory  $ageMonthCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ageMonthCategory $ageMonthCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateageMonthCategoryRequest  $request
     * @param  \App\Models\ageMonthCategory  $ageMonthCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateageMonthCategoryRequest $request, ageMonthCategory $ageMonthCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ageMonthCategory  $ageMonthCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ageMonthCategory $ageMonthCategory)
    {
        //
    }
}
